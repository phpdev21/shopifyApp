<html>
   <head>
      <title>How To Integrate Stripe Payment Gateway In Laravel 8 - Techsolutionstuff</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>      
   </head>
   <body>
      <!-- <div class="container">         
         <div class="row">
          <h3 style="text-align: center;margin-top: 40px;margin-bottom: 40px;">How To Integrate Stripe Payment Gateway In Laravel 8 - Techsolutionstuff</h3>
            <div class="col-md-6 col-md-offset-3">
               <div class="panel panel-default credit-card-box">
                  <div class="panel-heading" >
                     <div class="row">
                        <h3>Payment Details</h3>                        
                     </div>
                  </div>
                  <div class="panel-body">
                     @if (Session::has('success'))
                     <div class="alert alert-success text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <p>{{ Session::get('success') }}</p><br>
                     </div>
                     @endif
                     <br>
                     <form role="form" action="{{ route('stripe.post') }}" method="post" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_KEY') }}" id="payment-form">
                        @csrf
                        <div class='form-row row'>
                           <div class='col-xs-12 col-md-6 form-group required'>
                              <label class='control-label'>Name on Card</label> 
                              <input class='form-control' size='4' type='text'>
                           </div>
                           <div class='col-xs-12 col-md-6 form-group required'>
                              <label class='control-label'>Card Number</label> 
                              <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                           </div>                           
                        </div>                        
                        <div class='form-row row'>
                           <div class='col-xs-12 col-md-4 form-group cvc required'>
                              <label class='control-label'>CVC</label> 
                              <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                           </div>
                           <div class='col-xs-12 col-md-4 form-group expiration required'>
                              <label class='control-label'>Expiration Month</label> 
                              <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                           </div>
                           <div class='col-xs-12 col-md-4 form-group expiration required'>
                              <label class='control-label'>Expiration Year</label> 
                              <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                           </div>
                        </div>                     
                        <div class="form-row row">
                           <div class="col-xs-12">
                              <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div> -->
      <div class="checkout-form">
         <div class="container h-100 py-5">
            <div class="inner h-100">
               <form  method="post" action="{{ route('stripe.post') }}"  class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="{{ env('STRIPE_PUBLISHABLE_KEY') }}" id="">
               @csrf
                  <div class="row h-100 mx-0">
                     <div class="col-md-6 p-4">
                        <h2 class="mb-4 title-name">{{$shop}}</h2>
                        <h4 class="section-head">Contact details</h4>
                           <div class="mb-3">
                              <label class="form-label custom-label">Email</label>
                              <input type="email" name="email" class="form-control custom-field" value="" required/>
                           </div>
                           <h4 class="mt-4 section-head">Shipping address</h4>
                           <div class="mb-3">
                              <label class="form-label custom-label">Country</label>
                              <select class="form-control custom-field form-select">
                                 <option selected>Italy</option>
                              </select>
                           </div>
                           <div class="row">
                              <div class="col-md-6 h-100">
                                 <div class="mb-3">
                                    <label class="form-label custom-label">First Name</label>
                                    <input type="text" name="firstname" class="form-control custom-field" value="" required />
                                 </div>
                              </div>
                              <div class="col-md-6 h-100">
                                 <div class="mb-3">
                                    <label class="form-label custom-label">Surname</label>
                                    <input type="text" name="surname" class="form-control custom-field" value="" required/>
                                 </div>
                              </div>
                           </div>
                           <div class="mb-3">
                              <label class="form-label custom-label">Address</label>
                              <input type="text" name="address" class="form-control custom-field" value=""  required/>
                           </div>
                           <div class="mb-3">
                              <label class="form-label custom-label">Phone number</label>
                              <input type="text" name="phonenumber" class="form-control custom-field" value="" required />
                           </div>
                           <div class="text-center">
                              <button class="btn payment-btn">Pay Now</button>
                           </div>
                     </div>
                     <div class="col-md-6 shipping-col">
                        <div class="d-flex justify-content-between align-items-center pb-4 border-bottom-1">
                        @foreach ($products->product->variants as $variant)
                           <h4 class="product_name text-capitalize mb-0">{{ $products->product->title }}</h4>
                           <p class="product_price mb-0" data-price="{{ $variant->price }}">{{ $variant->price }}€</p>
                        @endforeach
                        </div>
                        <div class="total-row">
                           <div class="d-flex justify-content-between align-items-center px-3">
                              <p class="product_name mb-0">Subtotale</p>
                              <p class="subtotal_price mb-0">101,00 €</p>
                              <input type="hidden" value=""  class="total_product_price_1"  name="total_price">
                           </div>
                           <div class="d-flex justify-content-between align-items-center border-bottom-1 highlight-row mt-3">
                              <p class="total_name mb-0"><b>Totale</b></p>
                              <p class="total_price mb-0"><small>EUR</small><span class="total_product_price">101,00</span> €</p>
                           </div>
                        </div>
                        <h4 class="card-title text-white">Enter Card details</h4>
                        <div class='form-row row'>
                           <div class='col-xs-12 col-md-6 form-group required'>
                              <label class='form-label custom-label text-white'>Name on Card</label> 
                              <input class='form-control custom-field' size='4' type='text'>
                           </div>
                           <div class='col-xs-12 col-md-6 form-group required'>
                              <label class='form-label custom-label text-white'>Card Number</label> 
                              <input autocomplete='off' class='form-control custom-field card-number' size='20' type='text'>
                           </div>                           
                        </div>                        
                        <div class='form-row row'>
                           <div class='col-xs-12 col-md-4 form-group cvc required'>
                              <label class='form-label custom-label text-white'>CVC</label> 
                              <input autocomplete='off' class='form-control custom-field card-cvc' placeholder='ex. 311' size='4' type='text'>
                           </div>
                           <div class='col-xs-12 col-md-4 form-group expiration required'>
                              <label class='form-label custom-label text-white'>Expiration Month</label> 
                              <input class='form-control custom-field card-expiry-month' placeholder='MM' size='2' type='text'>
                           </div>
                           <div class='col-xs-12 col-md-4 form-group expiration required'>
                              <label class='form-label custom-label text-white'>Expiration Year</label> 
                              <input class='form-control custom-field card-expiry-year' placeholder='YYYY' size='4' type='text'>
                           </div>
                        </div>
                     </div>
                  </div>   
               </form>
            </div>
         </div>
      </div>
   </body>   
</html>
<style>
   *
   {
      font-family: 'Poppins';
   }
   .checkout-form
   {
      min-height: 100vh;
   }
   .shipping-col
   {
      background: #009688;
      padding: 60px 30px;
      color: #ffff;
   }
   .highlight-row
   {
      background: #ffffff2b;
      padding: 13px 16px;
      border-radius: 12px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
   }
   .total-row
   {
      border: 1px solid #ffffff;
      padding: 13px 0 0;
      border-radius: 12px;
   }
   .custom-field
   {
      background: #fff;
      padding: 20px 15px;
      box-shadow: 0 3px 2px rgba(0,0,0,.1);
   }
   .total_price
   {
      font-size: 20px;
      font-weight: 700;
   }
   .total_price small
   {
      font-size: 14px;
      margin-right: 5px;
   }
   .product_price
   { 
      font-size: 20px;
      font-weight: 600;
   }
   .section-head
   {
      font-size: 22px;
      font-weight: 300; 
      color: #555;
      margin-bottom: 15px;
   }
   .custom-label
   {
      color: #777777;
   }
   .payment-btn
   {
      width: 100%;
      padding: 12px 20px;
      background: #009688;
      font-size: 17px;
      color: #fff;
   }
   .title-name
   {
      font-size: 30px;
      text-transform: capitalize;
   }
   .inner
   {
      background: #fff;
      box-shadow: 0 0 10px rgba(0,0,0,.2);
      border-radius: 20px;
      overflow: hidden;
   }
   .card-title
   {
      font-size: 20px;
      font-weight: 300;
      margin-top: 20px;
   }
</style>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
$(function() {
    var $form = $(".require-validation");

    $('form.require-validation').bind('submit', function(e) {
      console.log('=============>')

        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]', 'input[type=text]', 'input[type=file]', 'textarea'].join(', '),
        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');
        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
            var $input = $(el);
            if ($input.val() === '') {
                $input.parent().addClass('has-error');
                $errorMessage.removeClass('hide');
                e.preventDefault();
            }
        });
        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
              number: $('.card-number').val(),
              cvc: $('.card-cvc').val(),
              exp_month: $('.card-expiry-month').val(),
              exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }
    });
    var product_price = $('.product_price').attr('data-price');
    $('.subtotal_price').text(product_price+'€');
    $('.total_product_price_1').val(product_price);

    $('.total_product_price').text(product_price);
    function stripeResponseHandler(status, response) {
      console.log('test');
        if(response.error) {
            $('.error')
            .removeClass('hide')
            .find('.alert')
            .text(response.error.message);
        }else {
          /* token contains id, last4, and card type */
          var token = response['id'];
          $form.find('input[type=text]').empty();
          $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
          $form.get(0).submit();
        }
    }
});
</script>