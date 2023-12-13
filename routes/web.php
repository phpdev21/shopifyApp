<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\StripeSessionController;
use App\Http\Controllers\StripeCartSessionController;
use App\Http\Controllers\AppSetupController;
use Osiset\ShopifyApp\Jobs\AppUninstalledJob;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[AppSetupController::class, 'createDashboard'])->middleware(['verify.shopify'])->name('home');
// Route::get('/success/title/{product_title}/quantity/{quantity}/product_price/{product_price}/final_price/{final_price}/total_grams/{total_grams}/session_id/{session}/shop/{shop}',[StripeSessionController::class, 'checkoutSuccess'])->name('checkout.success');
Route::get('/success/',[StripeSessionController::class, 'checkoutSuccess'])->name('checkout.success');
Route::post('cancel',[StripeSessionController::class, 'checkoutCancel'])->name('checkout.cancel');
Route::get('stripe-checkout/product/{product_id}/shop/{shop_id}/quantity/{quantity}',[StripeSessionController::class, 'createCheckoutSession'])->name('checkout.create');


/* Cart items */

Route::get('stripe-cart-checkout/',[StripeCartSessionController::class, 'createCheckoutSession'])->name('checkout.create');
Route::get('/cart-success/title/{product_title}/quantity/{quantity}/product_price/{product_price}/total_grams/{total_grams}/session_id/{session}/shop/{shop}',
[StripeCartSessionController::class, 'checkoutSuccess'])->name('checkout.success');


/* App Jobs */

Route::post('/uninstall', function (Request $request) {
    $shopDomain = $request->header('X-Shopify-Shop-Domain');

    // Dispatch the AppUninstalledJob to the Laravel queue
    AppUninstalledJob::dispatch($shopDomain);

    return response('Uninstall webhook received', 200);
});




/* App routes  */

Route::get('create-stripe',[AppSetupController::class, 'createStripe'])->name('stripe.create');
Route::get('create-fb',[AppSetupController::class, 'createFbPixel'])->name('fbpixel.create');
Route::get('create-tiktok',[AppSetupController::class, 'createTiktokPixel'])->name('tiktokpixel.create');


Route::post('add-stripe',[AppSetupController::class, 'addStripe'])->name('stripe.add');
Route::post('add-fb',[AppSetupController::class, 'addFbPixel'])->name('fb.add');
Route::post('add-tiktok',[AppSetupController::class, 'addTiktokPixel'])->name('tiktok.add');

Route::post('add-payment-gateway',[AppSetupController::class, 'addPaymentGateway'])->name('paymentgateway.add');



/* Thank You */

Route::get('/thankyou', function () {
    return view('thankyou');
})->name('thankyou');












