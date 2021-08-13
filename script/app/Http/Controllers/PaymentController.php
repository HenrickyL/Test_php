<?php

namespace App\Http\Controllers;

use App\PaymentGateway;
use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use Razorpay\Api\Api;

class PaymentController extends Controller
{
    public function getPaymentGateways()
    {
        $paymentGateways = PaymentGateway::where('is_active', 1)->get();
        return response()->json($paymentGateways);
    }

    /**
     * @param Request $request
     */
    public function togglePaymentGateways(Request $request)
    {
        $paymentGateway = PaymentGateway::where('id', $request->id)->first();

        $activeGateways = PaymentGateway::where('is_active', '1')->get();

        if (!$paymentGateway->is_active || count($activeGateways) > 1) {
            $paymentGateway->toggleActive()->save();
            $success = true;
            return response()->json($success, 200);
        } else {
            $success = false;
            return response()->json($success, 401);
        }
    }

    /**
     * @param Request $request
     */
    public function processRazorpay(Request $request)
    {
        $api_key = config('settings.razorpayKeyId');
        $api_secret = config('settings.razorpayKeySecret');

        $api = new Api($api_key, $api_secret);

        try {
            $response = Curl::to('https://api.razorpay.com/v1/orders')
                ->withOption('USERPWD', "$api_key:$api_secret")
                ->withData(array('amount' => $request->totalAmount * 100, 'currency' => config('settings.currencyId'), 'payment_capture' => 1))
                ->post();

            $response = json_decode($response);
            $response = [
                'razorpay_success' => true,
                'response' => $response,
            ];
            return response()->json($response);
        } catch (\Throwable $th) {
            $response = [
                'razorpay_success' => false,
                'message' => $th->getMessage(),
            ];
            return response()->json($response);
        }
    }

    /**
     * @param Request $request
     */
    public function mercadopagoPayment(Request $request)
    {
        $token = $request->token;
        $payment_method_id = $request->payment_method_id;
        $installments = $request->installments;
        $issuer_id = $request->issuer_id;
        \MercadoPago\SDK::setAccessToken('TEST-5261646553829581-041804-0fa632494c8a4be840db2db55541286a-548770938');
        //...
        $payment = new \MercadoPago\Payment();
        $payment->transaction_amount = 100;
        $payment->token = $token;
        $payment->description = 'Gorgeous Silk Computer';
        $payment->installments = $installments;
        $payment->payment_method_id = $payment_method_id;
        $payment->issuer_id = $issuer_id;
        $payment->payer = array(
            'email' => 'lonie@yahoo.com',
        );
        // Guarda y postea el pago
        $payment->save();
        //...
        // Imprime el estado del pago
        return reponse()->json($payment->status);

    }
    /**
     * @param Request $request
     */
    public function processMercadoPago(Request $request)
    {
        \MercadoPago\SDK::setAccessToken('TEST-5261646553829581-041804-0fa632494c8a4be840db2db55541286a-548770938');

        $preference = new \MercadoPago\Preference();

        // Crea un ítem en la preferencia
        $item = new \MercadoPago\Item();
        $item->title = 'Purchase';
        $item->quantity = 1;
        $item->unit_price = 100;
        $preference->items = array($item);
        // $preference->back_urls = array(
        //     'success' => 'http://localhost:3000/cart',
        // );
        // $preference->auto_return = 'approved';
        $preference->save();
        // dd($preference);

        return response()->json($preference->init_point);
    }
}
