<?php

namespace App\Http\Controllers;
use Session;
use Stripe;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Osiset\ShopifyApp\Services\ShopifyService;



class StripeController extends Controller
{
    public function stripe($product_id,$shop_id,$quantity)
    {
        $curl = curl_init();  
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://'.$shop_id.'.myshopify.com/admin/api/2023-01/products/'.$product_id.'.json',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
          CURLOPT_HTTPHEADER => array(
            'X-Shopify-Access-Token: shpua_b913dd3efa0381b2f11ddf39bafa9cfa'
          ),
        ));
        
        $products = curl_exec($curl);
        curl_close($curl);
        return view('stripe', ['products' => json_decode($products),'shop'=>$shop_id]);
    }

    public function stripePost(Request $request)
    {
        // echo "<pre>"; print_r($request->all());die;

        Stripe\Stripe::setApiKey(env('STRIPE_API_KEY'));
        $stripe_response = Stripe\Charge::create ([
                // "amount" => $request->total_price*100 ,
                "amount" => 100*100 ,
                "currency" => "INR",
                "source" => $request->stripeToken,
                "description" => "Product purchase",
        ]);
      echo "<pre>";print_r($stripe_response);die;
        Session::flash('success', 'Payment Successful !');
           
        return back();
    }
}