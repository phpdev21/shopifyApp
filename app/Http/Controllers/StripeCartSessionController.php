<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Models\User;

class StripeCartSessionController extends Controller
{
    public function createCheckoutSession(Request $request)
    {
        // echo "<pre>";
        $items = json_decode($request['products']);
        $shop = $request['shop'];
        $shop_name = str_replace(' ', '', $shop.'.myshopify.com');
        $shop_token = User::where('name', $shop_name)->first();
        $shop_token = $shop_token->password;

        // print_r($items);
        foreach($items as $item){
            $porduct_qunatity = $item->quantity;
            $product_title = $item->title;
            $porduct_price = $item->price;
        }
        $total_grams= 1000;
        $stripe_product=   [];
        foreach($items as $item){
            $porduct_qunatity = $item->quantity;
            $product_title = $item->title;
            $porduct_price = $item->price;
            array_push($stripe_product, [
                'price_data' => [
                    'currency' => 'EUR',
                    'unit_amount' => $porduct_price,
                    'product_data' => [
                        'name' => $product_title,
                    ],
                ],
                'quantity' => $porduct_qunatity,
            ],);
        }
        // echo "yes";
        // die;
        // $curl = curl_init();  
        // curl_setopt_array($curl, array(
        //   CURLOPT_URL => 'https://'.$shop_id.'.myshopify.com/admin/api/2023-01/products/'.$product_id.'.json',
        //   CURLOPT_RETURNTRANSFER => true,
        //   CURLOPT_ENCODING => '',
        //   CURLOPT_MAXREDIRS => 10,
        //   CURLOPT_TIMEOUT => 0,
        //   CURLOPT_FOLLOWLOCATION => true,
        //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //   CURLOPT_CUSTOMREQUEST => 'GET',
        //   CURLOPT_HTTPHEADER => array(
        //     'X-Shopify-Access-Token: shpua_020ebf9c257b976725996758353b381f'
        //   ),
        // ));
        // $products = json_decode(curl_exec($curl));
        // $total_grams = $products->product->variants[0]->grams*(int)$quantity;
        // $product_price = number_format((float)($products->product->variants[0]->price),2, '.', '');
        // $final_price = $product_price*100;
        // curl_close($curl);
        // $product_price = $products->product->variants[0]->price;
        // $product_title=$products->product->title;


        // Set your Stripe API secret key
        Stripe::setApiKey(env('STRIPE_API_KEY'));
    
        // Create a new checkout session
        $session = Session::create([
            'payment_method_types' => [
                'card',
                'ideal',
                'sofort',
                'sepa_debit',
                'giropay',
                'eps',
                'bancontact',
                'p24',
                'alipay',
                'wechat_pay',
                'klarna'
            ],
            'line_items' => [
                $stripe_product,
            ],
            'mode' => 'payment',
            'success_url' => 'https://2b4d-61-247-229-81.in.ngrok.io/cart-success/title/'.$product_title.'/quantity/'.$porduct_qunatity.'/product_price/'.$porduct_price.'/total_grams/'.$total_grams.'/session_id/'.'{CHECKOUT_SESSION_ID}/shop/'.$shop,
            'cancel_url' => route('checkout.cancel'),
            'locale'  => 'fr',
            'shipping_address_collection' => [
                'allowed_countries' => ['IT'], // Set allowed countries for shipping
            ],
            'shipping' => [
                'name' => $request->input('shipping.name'),
                'address' => [
                    'line1' => $request->input('shipping.address.line1'),
                    'line2' => $request->input('shipping.address.line2'),
                    'city' => $request->input('shipping.address.city'),
                    'state' => $request->input('shipping.address.state'),
                    'postal_code' => $request->input('shipping.address.postal_code'),
                    'country' => $request->input('shipping.address.country'),
                ],
            ],
        ]);
    
        // Redirect the user to the checkout page
        return redirect($session->url);
    }

    public function checkoutSuccess(Request $request,$title,$quantity,$product_price,$total_grams=1000,$session,$shop)
    {
        $shop_name = str_replace(' ', '', $shop.'.myshopify.com');
        $shop_token = User::where('name', $shop_name)->first();
        $shop_token = $shop_token->password;

    Stripe::setApiKey(env('STRIPE_KEY'));
    $session = Session::retrieve($session);
    $shippingName = $session->shipping->name;
    $shippingemail = $session->customer_details->email;
    $shippingcity = $session->shipping->address->city;
    $shippingpostal_code = $session->shipping->address->postal_code;
    $shippingcountry = $session->shipping->address->country;
    $shippingprovince = $session->shipping->address->state;
    $shippingaddress = $session->shipping->address->line1;
    $shippingaddress1 = $session->shipping->address->line2;
    $shippingamount_total = $session->amount_total;
    $curl = curl_init();
    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://'.$shop_name.'/admin/api/2023-01/orders.json',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS =>'{
    "order": {
        "line_items": [
            {
                "title": "'.$title.'",
                "price": '.$product_price.',
                "grams": '.$total_grams.',
                "quantity": '.$quantity.',
                "tax_lines": [
                    {
                        "price": 0.00,
                        "rate": 0.00,
                        "title": "State tax"
                    }
                ]
            }
        ],
        "transactions": [
            {
                "kind": "sale",
                "status": "success",
                "amount": '.$shippingamount_total.'
            }
        ],
        "total_tax": 0.00,
        "currency": "EUR"
    }
}',
    CURLOPT_HTTPHEADER => array(
        'X-Shopify-Access-Token: '.$shop_token,
        'Content-Type: application/json',
    ),
    ));
    $response = json_decode(curl_exec($curl));
    // Handle the successful payment
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://'.$shop_name.'/admin/api/2023-01/orders/'.$response->order->id.'.json',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'PUT',
        CURLOPT_POSTFIELDS =>'{
            "order": {
                "shipping_address":{
                    "first_name" :"'.$shippingName.'",
                    "last_name" : "'.$shippingName.'-Email-'.$shippingemail.'",
                    "address1" : "'.$shippingaddress.'",
                    "address2" :"'.$shippingaddress1.'",
                    "city": "'.$shippingcity.'",
                    "province": "'.$shippingprovince.'",
                    "country": "'.$shippingcountry.'",
                    "zip": "'.$shippingpostal_code.'"
                }
            }
        }',
        CURLOPT_HTTPHEADER => array(
            'X-Shopify-Access-Token: '.$shop_token,
            'Content-Type: application/json',
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;


        return view('checkoutCartSuccess');
    }

    public function checkoutCancel(Request $request)
    {
        // Handle the cancelled payment
        return view('checkout.cancel');
    }
}
