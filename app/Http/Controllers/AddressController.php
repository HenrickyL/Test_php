<?php

namespace App\Http\Controllers;

use App\Address;
use App\Restaurant;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class AddressController extends Controller
{

    /**
     * @param $latitudeFrom
     * @param $longitudeFrom
     * @param $latitudeTo
     * @param $longitudeTo
     * @return mixed
     */
    private function getDistance($latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo)
    {
        $latFrom = deg2rad($latitudeFrom);
        $lonFrom = deg2rad($longitudeFrom);
        $latTo = deg2rad($latitudeTo);
        $lonTo = deg2rad($longitudeTo);

        $latDelta = $latTo - $latFrom;
        $lonDelta = $lonTo - $lonFrom;

        $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
            cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
        return $angle * 6371;
    }

    /**
     * @param $id
     */
    public function getAddresses(Request $request)
    {
        $user = auth()->user();

        if ($user) {
            $addresses = Address::where('user_id', $user->id)->orderBy('id', 'DESC')->get();

            //if client sends checkOperationalRestaurant (From Change Address Cart Button) calculate the distance from the restaurant and send back
            if ($request->restaurant_id != null) {
                $restaurant = Restaurant::where('id', $request->restaurant_id)->first();
                if ($restaurant) {
                    $checkedAddress = new Collection();
                    foreach ($addresses as $address) {
                        $distance = $this->getDistance($address->latitude, $address->longitude, $restaurant->latitude, $restaurant->longitude);
                        if ($distance <= $restaurant->delivery_radius) {
                            $address->is_operational = 1;
                            $checkedAddress->push($address);
                        } else {
                            $address->is_operational = 0;
                            $checkedAddress->push($address);
                        }
                    }
                    // $sorted = $checkedAddress->sortBy('is_operational');
                    return response()->json($checkedAddress);
                }
            }

            return response()->json($addresses);
        }
        return response()->json(['success' => false], 401);

    }

    /**
     * @param Request $request
     */
    public function saveAddress(Request $request)
    {
        $user = auth()->user();
        if ($user) {
            $address = new Address();
            $address->user_id = $user->id;
            $address->latitude = $request->latitude;
            $address->longitude = $request->longitude;
            $address->address = $request->address;
            $address->house = $request->house;
            $address->tag = $request->tag;
            $address->save();

            $user->default_address_id = $address->id;
            $user->save();

            if ($request->get_only_default_address !== null) {
                $address = Address::where('id', $user->default_address_id)->get(['address', 'house', 'latitude', 'longitude', 'tag'])->first();
                return response()->json($address);
            }

            $addresses = Address::where('user_id', $user->id)->orderBy('id', 'DESC')->get();
            return response()->json($addresses);
        }
        return response()->json(['success' => false], 401);

    }

    /**
     * @param Request $request
     */
    public function deleteAddress(Request $request)
    {
        $user = auth()->user();
        if ($user) {
            $address = Address::where('user_id', $user->id)
                ->where('id', $request->address_id)
                ->first();

            if ($address) {
                $address->delete();
            }

            $addresses = Address::where('user_id', $user->id)->orderBy('id', 'DESC')->get();
            return response()->json($addresses);
        }
        return response()->json(['success' => false], 401);
    }

    /**
     * @param Request $request
     */
    public function setDefaultAddress(Request $request)
    {

        $user = auth()->user();
        if ($user) {

            $user->default_address_id = $request->address_id;
            $user->save();

            $addresses = Address::where('user_id', $user->id)->orderBy('id', 'DESC')->get();

            return response()->json($addresses);
        }
        return response()->json(['success' => false], 401);

    }
}
