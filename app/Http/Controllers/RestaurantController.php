<?php

namespace App\Http\Controllers;

use App\Item;
use App\Restaurant;
use Cache;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Modules\SuperCache\SuperCache;
use Nwidart\Modules\Facades\Module;

class RestaurantController extends Controller
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
     * @param $name
     * @param $data
     */
    private function processSuperCache($name, $data = null)
    {
        if (Module::find('SuperCache') && Module::find('SuperCache')->isEnabled()) {
            $superCache = new SuperCache();
            $superCache->cacheResponse($name, $data);
        }
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function getDeliveryRestaurants(Request $request)
    {
        // Cache::forget('stores-delivery-active');
        // Cache::forget('stores-delivery-inactive');
        // die();

        // get all active restauants doing delivery
        if (Cache::has('stores-delivery-active')) {
            $restaurants = Cache::get('stores-delivery-active');
        } else {
            $restaurants = Restaurant::where('is_accepted', '1')
                ->where('is_active', 1)
                ->whereIn('delivery_type', [1, 3])
                ->ordered()
                ->get();
            $this->processSuperCache('stores-delivery-active', $restaurants);
        }

        //Create a new Laravel collection from the array data
        $nearMe = new Collection();

        foreach ($restaurants as $restaurant) {
            $distance = $this->getDistance($request->latitude, $request->longitude, $restaurant->latitude, $restaurant->longitude);
            if ($distance <= $restaurant->delivery_radius) {
                $nearMe->push($restaurant);
            }
        }
        // $nearMe = $nearMe->shuffle()->sortByDesc('is_featured');
        $nearMe = $nearMe->map(function ($restaurant) {
            return $restaurant->only(['id', 'name', 'description', 'image', 'rating', 'delivery_time', 'price_range', 'slug', 'is_featured', 'is_active']);
        });

        // $onlyInactive = $nearMe->where('is_active', 0)->get();
        // dd($onlyInactive);
        $nearMe = $nearMe->toArray();

        if (config('settings.randomizeStores') == 'true') {
            shuffle($nearMe);
            usort($nearMe, function ($left, $right) {
                return $right['is_featured'] - $left['is_featured'];
            });
        }

        if (Cache::has('stores-delivery-inactive')) {
            $inactiveRestaurants = Cache::get('stores-delivery-inactive');
        } else {
            $inactiveRestaurants = Restaurant::where('is_accepted', '1')
                ->where('is_active', 0)
                ->whereIn('delivery_type', [1, 3])
                ->ordered()
                ->get();
            $this->processSuperCache('stores-delivery-inactive', $inactiveRestaurants);
        }

        $nearMeInActive = new Collection();
        foreach ($inactiveRestaurants as $inactiveRestaurant) {
            $distance = $this->getDistance($request->latitude, $request->longitude, $inactiveRestaurant->latitude, $inactiveRestaurant->longitude);
            if ($distance <= $inactiveRestaurant->delivery_radius) {
                $nearMeInActive->push($inactiveRestaurant);
            }
        }
        $nearMeInActive = $nearMeInActive->map(function ($restaurant) {
            return $restaurant->only(['id', 'name', 'description', 'image', 'rating', 'delivery_time', 'price_range', 'slug', 'is_featured', 'is_active']);
        });
        $nearMeInActive = $nearMeInActive->toArray();

        $merged = array_merge($nearMe, $nearMeInActive);

        return response()->json($merged);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function getSelfPickupRestaurants(Request $request)
    {
        // get all active restauants doing selfpickups
        if (Cache::has('stores-selfpickup-active')) {
            $restaurants = Cache::get('stores-selfpickup-active');
        } else {
            $restaurants = Restaurant::where('is_accepted', '1')
                ->where('is_active', 1)
                ->whereIn('delivery_type', [2, 3])
                ->ordered()
                ->get();
            $this->processSuperCache('stores-selfpickup-active', $restaurants);
        }

        //Create a new Laravel collection from the array data
        $nearMe = new Collection();

        foreach ($restaurants as $restaurant) {
            $distance = $this->getDistance($request->latitude, $request->longitude, $restaurant->latitude, $restaurant->longitude);
            if ($distance <= $restaurant->delivery_radius) {
                $nearMe->push($restaurant);
            }
        }

        $nearMe = $nearMe->map(function ($restaurant) {
            return $restaurant->only(['id', 'name', 'description', 'image', 'rating', 'delivery_time', 'price_range', 'slug', 'is_featured', 'is_active']);
        });

        $nearMe = $nearMe->toArray();
        if (config('settings.randomizeStores') == 'true') {
            shuffle($nearMe);
            usort($nearMe, function ($left, $right) {
                return $right['is_featured'] - $left['is_featured'];
            });
        }

        if (Cache::has('stores-selfpickup-inactive')) {
            $inactiveRestaurants = Cache::get('stores-selfpickup-inactive');
        } else {
            $inactiveRestaurants = Restaurant::where('is_accepted', '1')
                ->where('is_active', 0)
                ->whereIn('delivery_type', [2, 3])
                ->ordered()
                ->get();
            $this->processSuperCache('stores-selfpickup-inactive', $inactiveRestaurants);
        }

        $nearMeInActive = new Collection();
        foreach ($inactiveRestaurants as $inactiveRestaurant) {
            $distance = $this->getDistance($request->latitude, $request->longitude, $inactiveRestaurant->latitude, $inactiveRestaurant->longitude);
            if ($distance <= $inactiveRestaurant->delivery_radius) {
                $nearMeInActive->push($inactiveRestaurant);
            }
        }
        $nearMeInActive = $nearMeInActive->map(function ($restaurant) {
            return $restaurant->only(['id', 'name', 'description', 'image', 'rating', 'delivery_time', 'price_range', 'slug', 'is_featured', 'is_active']);
        });
        $nearMeInActive = $nearMeInActive->toArray();

        $merged = array_merge($nearMe, $nearMeInActive);

        return response()->json($merged);
    }

    /**
     * @param $slug
     */
    public function getRestaurantInfo($slug)
    {
        // Cache::forget('store-info-' . $slug);

        if (Cache::has('store-info-' . $slug)) {
            $restaurantInfo = Cache::get('store-info-' . $slug);
        } else {
            $restaurantInfo = Restaurant::where('slug', $slug)->first();
            $this->processSuperCache('store-info-' . $slug, $restaurantInfo);
        }

        return response()->json($restaurantInfo);
    }
    /**
     * @param $id
     */
    public function getRestaurantInfoById($id)
    {
        $restaurant = Restaurant::where('id', $id)->first();
        return response()->json($restaurant);
    }

    /**
     * @param $slug
     */
    public function getRestaurantItems($slug)
    {
        // Cache::forget('store-info-' . $slug);
        Cache::forever('items-cache', 'true');
        if (Cache::has('store-info-' . $slug)) {
            $restaurant = Cache::get('store-info-' . $slug);
        } else {
            $restaurant = Restaurant::where('slug', $slug)->first();
            $this->processSuperCache('store-info-' . $slug, $restaurant);
        }

        // Cache::forget('items-recommended-' . $restaurant->id);
        // Cache::forget('items-all-' . $restaurant->id);

        if (Cache::has('items-recommended-' . $restaurant->id) && Cache::has('items-all-' . $restaurant->id)) {
            $recommended = Cache::get('items-recommended-' . $restaurant->id);
            $array = Cache::get('items-all-' . $restaurant->id);
        } else {
            if (config('settings.showInActiveItemsToo') == 'true') {
                $recommended = Item::where('restaurant_id', $restaurant->id)->where('is_recommended', '1')
                    ->with('addon_categories')
                    ->with(array('addon_categories.addons' => function ($query) {
                        $query->where('is_active', 1);
                    }))
                    ->get();

                // $items = Item::with('add')
                $items = Item::where('restaurant_id', $restaurant->id)
                    ->join('item_categories', function ($join) {
                        $join->on('items.item_category_id', '=', 'item_categories.id');
                        $join->where('is_enabled', '1');
                    })
                    ->with('addon_categories')
                    ->with(array('addon_categories.addons' => function ($query) {
                        $query->where('is_active', 1);
                    }))
                    ->get(array('items.*', 'item_categories.name as category_name'));
            } else {
                $recommended = Item::where('restaurant_id', $restaurant->id)->where('is_recommended', '1')
                    ->where('is_active', '1')
                    ->with('addon_categories')
                    ->with(array('addon_categories.addons' => function ($query) {
                        $query->where('is_active', 1);
                    }))
                    ->get();

                // $items = Item::with('add')
                $items = Item::where('restaurant_id', $restaurant->id)
                    ->join('item_categories', function ($join) {
                        $join->on('items.item_category_id', '=', 'item_categories.id');
                        $join->where('is_enabled', '1');
                    })
                    ->where('is_active', '1')
                    ->with('addon_categories')
                    ->with(array('addon_categories.addons' => function ($query) {
                        $query->where('is_active', 1);
                    }))
                    ->get(array('items.*', 'item_categories.name as category_name'));
            }

            $items = json_decode($items, true);

            $array = [];
            foreach ($items as $item) {
                $array[$item['category_name']][] = $item;
            }

            $this->processSuperCache('items-recommended-' . $restaurant->id, $recommended);
            $this->processSuperCache('items-all-' . $restaurant->id, $array);
        }

        return response()->json(array(
            'recommended' => $recommended,
            'items' => $array,
        ));

    }
/**
 * @param Request $request
 */
    public function searchRestaurants(Request $request)
    {
        //get lat and lng and query from user...
        // get all active restauants doing delivery & selfpickup
        $restaurants = Restaurant::where('name', 'LIKE', "%$request->q%")
            ->where('is_accepted', '1')
            ->take(20)->get();

        //Create a new Laravel collection from the array data
        $nearMeRestaurants = new Collection();

        foreach ($restaurants as $restaurant) {
            $distance = $this->getDistance($request->latitude, $request->longitude, $restaurant->latitude, $restaurant->longitude);
            if ($distance <= $restaurant->delivery_radius) {
                $nearMeRestaurants->push($restaurant);
            }
        }

        $items = Item::
            where('is_active', '1')
            ->where('name', 'LIKE', "%$request->q%")
            ->with('restaurant')
            ->get();

        $nearMeItems = new Collection();
        foreach ($items as $item) {
            $itemRestro = $item->restaurant;
            $distance = $this->getDistance($request->latitude, $request->longitude, $itemRestro->latitude, $itemRestro->longitude);
            if ($distance <= $itemRestro->delivery_radius) {
                $nearMeItems->push($item);
            }

        }

        $response = [
            'restaurants' => $nearMeRestaurants,
            'items' => $nearMeItems->take(20),
        ];

        return response()->json($response);

    }

/**
 * @param Request $request
 */
    public function checkRestaurantOperationService(Request $request)
    {
        $status = false;

        $restaurant = Restaurant::where('id', $request->restaurant_id)->first();
        if ($restaurant) {
            $distance = $this->getDistance($request->latitude, $request->longitude, $restaurant->latitude, $restaurant->longitude);
            if ($distance <= $restaurant->delivery_radius) {
                $status = true;
            }
        }
        return response()->json($status);
    }

/**
 * @param Request $request
 */
    public function getSingleItem(Request $request)
    {
        if (Cache::has('item-single-' . $request->id)) {
            $item = Cache::get('item-single-' . $request->id);
        } else {

            if (config('settings.showInActiveItemsToo') == 'true') {
                $item = Item::where('id', $request->id)
                    ->with('addon_categories')
                    ->with(array('addon_categories.addons' => function ($query) {
                        $query->where('is_active', 1);
                    }))
                    ->first();
            } else {
                $item = Item::where('id', $request->id)
                    ->where('is_active', '1')
                    ->with('addon_categories')
                    ->with(array('addon_categories.addons' => function ($query) {
                        $query->where('is_active', 1);
                    }))
                    ->first();
            }

            $this->processSuperCache('item-single-' . $request->id, $item);
        }

        if ($item) {
            return response()->json($item);
        }
    }

/**
 * @param Request $request
 * @return mixed
 */
    public function getFilteredRestaurants(Request $request)
    {
        $restaurants = Restaurant::where('is_accepted', '1')
            ->where('is_active', '1')
            ->whereIn('delivery_type', [1, 3])
            ->whereHas('restaurant_categories', function ($query) use ($request) {
                $query->whereIn('restaurant_category_id', $request->category_ids);
            })->get();

        $nearMe = new Collection();

        foreach ($restaurants as $restaurant) {
            $distance = $this->getDistance($request->latitude, $request->longitude, $restaurant->latitude, $restaurant->longitude);
            if ($distance <= $restaurant->delivery_radius) {
                $nearMe->push($restaurant);
            }
        }
        // $nearMe = $nearMe->shuffle()->sortByDesc('is_featured');
        $nearMe = $nearMe->toArray();
        shuffle($nearMe);
        usort($nearMe, function ($left, $right) {
            return $right['is_featured'] - $left['is_featured'];
        });

        // sleep(5);

        return response()->json($nearMe);
    }

/**
 * @param Request $request
 */
    public function checkCartItemsAvailability(Request $request)
    {
        $items = $request->items;
        $activeItemIds = [];
        foreach ($items as $item) {
            $oneItem = Item::where('id', $item['id'])->first();
            if ($oneItem) {
                if (!$oneItem->is_active) {
                    array_push($activeItemIds, $oneItem->id);
                }
            }
        }
        return response()->json($activeItemIds);
    }
};
