<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AppSetupController extends Controller
{
    public function createDashboard(){
        $current_shop = Auth::id();
        $stripe_data = User::where('id', $current_shop)->first();
        $stripe_api_key = $stripe_data->stripe_api_key;
        $stripe_secert_key = $stripe_data->stripe_secert_key;
        $fb_pixel = $stripe_data->fb_pixel;
        $tiktok_pixel = $stripe_data->tiktok_pixel;
        $stripe_payments_method = $stripe_data->stripe_payments_method;
        $stripe_language = $stripe_data->stripe_language;
        $stripe_currency = $stripe_data->stripe_currency;
        $data = [
            'stripe_api_key' => $stripe_api_key,
            'stripe_secert_key' => $stripe_secert_key,
            'fb_pixel' => $fb_pixel,
            'tiktok_pixel' => $tiktok_pixel,
            'stripe_payments_method' => $stripe_payments_method,
            'stripe_language' => $stripe_language,
            'stripe_currency' => $stripe_currency,
        ];
        return view('welcome', $data);
    }

    public function addStripe(Request $request){
        User::where('name', $request->current_shop)
            ->update([
                'stripe_api_key' => $request->stripe_api_key,
                'stripe_secert_key' =>  $request->stripe_sceret_key,
                'stripe_currency' =>  $request->stripe_currency,
                'stripe_language' =>  $request->stripe_language,
                ]);
        return view('thankyou');
    }



    public function addFbPixel(Request $request){
        User::where('name', $request->current_shop)
            ->update([
                'fb_pixel' => $request->fb_pixel,
                ]);
        return view('thankyou');
    }


    public function addTiktokPixel(Request $request){
        User::where('name', $request->current_shop)
            ->update([
                'tiktok_pixel' => $request->tiktok_pixel,
            ]);
        return view('thankyou');
    }

    public function addPaymentGateway(Request $request){
        $stripe_payments_method = json_encode($request->all());
        User::where('name', $request->current_shop)
            ->update([
                'stripe_payments_method' => $stripe_payments_method,
            ]);
        return view('thankyou');
    }
}
