<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.mr-3{margin-right:1em;}.flex-wrap{flex-wrap:wrap;}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.border{border:1px solid #0984e3;}.welcome-text{color:#0984e3;}.primary-card{padding: 50px 60px;display: inline-block;background: #3b5998;color: #fff;border-radius: 5px;font-size: 19px;text-align: center;font-weight: 700;}.primary-card i{font-size:60px;display:block;}.stripe-bg{background: #635bff;}.tiktok-bg{background: #000;}.aqua-color{color: #00f2ea;}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.py-8{padding-top:2em;padding-bottom:2em;}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.mt-0{margin-top: 0px;}.shadow{box-shadow:0 1px 13px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
            .form-control
            {
                display: block;
                width: 100%;
                padding: 0.375rem 0.75rem;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #212529;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #ced4da;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                font-family: 'Nunito';
                border-radius: 0.25rem;
                transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            }
            .px-4
            {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }
            .form-textarea
            {
                display: block;
                width: 100%;
                min-height: 80px;
                resize: none;
                padding: 0.375rem 0.75rem;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #212529;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #ced4da;
                -webkit-appearance: none;
                -moz-appearance: none;
                appearance: none;
                font-family: 'Nunito';
                border-radius: 0.25rem;
                transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
            }
            .primary-btn
            {
                min-width: 150px; 
                padding: 12px 10px;
                color: #fff;
                background: #635bff;
                border: 1px solid #635bff;
                font-family: 'Nunito';
                border-radius: 6px;
                font-size: 18px;

            }
            .cursor-pointer
            {
                cursor: pointer;
            }
            .stripe-color
            {
                color: #635bff;
            }
            .border-stripe
            {
                border: 1px solid #635bff;
            }
            .w-100
            {
                width: 100%;
            }
            .flex-none
            {
                flex: none;
            }
            .rounded-xl
            {
                border-radius: 1rem;
            }
            .border-fb
            {
                border: 1px solid #3b5998;
            }
            .color-fb
            {
                color: #3b5998;
            }
            .facebook-btn
            {
                background: #3b5998;
                color: #fff;
            }
            .border-black
            {
                border: 1px solid #000;
            }
            .color-black
            {
                color: #000;
            }
            .tiktok-btn
            {
                background: #000;
                color: #fff;
            }
            .pb-10
            {
                padding-bottom: 8em;
            }
            .tab-link,
            .tab-link:hover,
            .tab-link.active,
            .tab-link.active:hover
            {
                border: none !important;
            }
            .tab-link
            {
                color: #000;
            }
            .tab-link.strip_link.active
            {
                background-color: #635bff !important;
                color: #fff;
            }
            .tab-link.fb_link.active
            {
                background-color: #3b5998 !important;
                color: #fff;
            }
            .tab-link.tiktok_link.active
            {
                background-color: #000 !important;
                color: #fff;
            }
            .max-w-4xl
            {
                max-width: 42rem;
            }
            .notice-section
            {
                margin-top: 20px;
                padding: 20px;
                background: #e0f5f5;
                border-top: 2px solid #00d5d5;
                border-radius: 0px;
                color: #000;
            }
            .custom-checkout
            {
                margin-left: 10px !important;
                margin-right: 10px;
                width: 3.5em !important;
                padding: 13px;
                float: none !important;
                margin-top: 0px !important;
                box-shadow: none !important;
            }
            .custom-checkout:checked {
                background-color: #635bff;
                border-color: #635bff;
            }
            .table-fixed
            {
                table-layout: fixed;
            }
            .bg-light-blue
            {
                background: #f1f9ff;
            }
            .payment_method.table-striped>tbody>tr:nth-of-type(odd)>*
            {
                background: rgb(242 242 255);
            }
            .responsive_payment
            {
                border-radius: 20px;
                border: 1px solid #635bff;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative min-h-screen bg-gray-100 dark:bg-gray-900 sm:pt-0 bg-light-blue">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif

            <div class="sm:px-6 lg:px-8">
                <div class="bg-white lg:px-8 py-4 shadow border px-4">
                    <h2 class="mt-0 welcome-text mb-0">Welcome to Stripe Integrator</h2>
                </div>
                <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link tab-link strip_link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Stripe Settings</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link tab-link strip_link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Stripe Payment</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link fb_link tab-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Setup Facebook Pixel</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link tab-link tiktok_link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false">Setup Tiktok Pixel</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        
                    <div class="d-flex notice-section">
                        <i class="fa-solid fa-flag me-2"></i>
                        <div class="">
                            <h3>Notice</h3>
                            <ul class="ps-3 mb-0">
                                <li>Connect your Stripe account</li>
                                <li>Tick 'Enable Stripe Checkout'</li>
                                <li>Switch to Live mode</li>
                                <li>Set Currency Countries</li>
                                <li>Enable payment methods and make sure they are enabled  in Stripe dashboard as well.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="sm:px-6 lg:px-8 max-w-4xl mx-auto w-100 flex-none">
                        <div class="bg-white lg:px-8 py-8 mt-4 shadow border-stripe rounded-xl px-4">
                            <h2 class="mt-0 welcome-text text-center mb-4 fw-bold stripe-color">Add Stripe Details</h2>
                            <form action="{{ route('stripe.add') }}" method="POST">
                                @csrf
                                <label>Stripe Api Key</label>
                                <input type="text" class="form-control mb-2" name="stripe_api_key" value={{$stripe_api_key}} required>
                                <label>Stripe Secret Key</label>
                                <input type="text" class="form-control mb-2" name="stripe_sceret_key" value={{$stripe_secert_key}} required>
                                <input type="hidden" name="current_shop" value="{{$shopDomain ?? Auth::user()->name}}">
                                <select data-placeholder="Choose a Language..." name="stripe_language" class="form-control mb-2" required>
                                    <option value="AF" @if($stripe_language === 'AF') selected @endif>Afrikaans</option>
                                    <option value="SQ" @if($stripe_language === 'SQ') selected @endif>Albanian</option>
                                    <option value="AR" @if($stripe_language === 'AR') selected @endif>Arabic</option>
                                    <option value="HY" @if($stripe_language === 'HY') selected @endif>Armenian</option>
                                    <option value="EU" @if($stripe_language === 'EU') selected @endif>Basque</option>
                                    <option value="BN" @if($stripe_language === 'BN') selected @endif>Bengali</option>
                                    <option value="BG" @if($stripe_language === 'BG') selected @endif>Bulgarian</option>
                                    <option value="CA" @if($stripe_language === 'CA') selected @endif>Catalan</option>
                                    <option value="KM" @if($stripe_language === 'KM') selected @endif>Cambodian</option>
                                    <option value="ZH" @if($stripe_language === 'ZH') selected @endif>Chinese (Mandarin)</option>
                                    <option value="HR" @if($stripe_language === 'HR') selected @endif>Croatian</option>
                                    <option value="CS" @if($stripe_language === 'CS') selected @endif>Czech</option>
                                    <option value="DA" @if($stripe_language === 'DA') selected @endif>Danish</option>
                                    <option value="NL" @if($stripe_language === 'NL') selected @endif>Dutch</option>
                                    <option value="EN" @if($stripe_language === 'EN') selected @endif>English</option>
                                    <option value="ET" @if($stripe_language === 'ET') selected @endif>Estonian</option>
                                    <option value="FJ" @if($stripe_language === 'FJ') selected @endif>Fiji</option>
                                    <option value="FI" @if($stripe_language === 'FI') selected @endif>Finnish</option>
                                    <option value="FR" @if($stripe_language === 'FR') selected @endif>French</option>
                                    <option value="KA" @if($stripe_language === 'KA') selected @endif>Georgian</option>
                                    <option value="DE" @if($stripe_language === 'DE') selected @endif>German</option>
                                    <option value="EL" @if($stripe_language === 'EL') selected @endif>Greek</option>
                                    <option value="GU" @if($stripe_language === 'GU') selected @endif>Gujarati</option>
                                    <option value="HE" @if($stripe_language === 'HE') selected @endif>Hebrew</option>
                                    <option value="HI" @if($stripe_language === 'HI') selected @endif>Hindi</option>
                                    <option value="HU" @if($stripe_language === 'HU') selected @endif>Hungarian</option>
                                    <option value="IS" @if($stripe_language === 'IS') selected @endif>Icelandic</option>
                                    <option value="ID" @if($stripe_language === 'ID') selected @endif>Indonesian</option>
                                    <option value="GA" @if($stripe_language === 'GA') selected @endif>Irish</option>
                                    <option value="IT" @if($stripe_language === 'IT') selected @endif>Italian</option>
                                    <option value="JA" @if($stripe_language === 'JA') selected @endif>Japanese</option>
                                    <option value="JW" @if($stripe_language === 'JW') selected @endif>Javanese</option>
                                    <option value="KO" @if($stripe_language === 'KO') selected @endif>Korean</option>
                                    <option value="LA" @if($stripe_language === 'LA') selected @endif>Latin</option>
                                    <option value="LV" @if($stripe_language === 'LV') selected @endif>Latvian</option>
                                    <option value="LT" @if($stripe_language === 'LT') selected @endif>Lithuanian</option>
                                    <option value="MK" @if($stripe_language === 'MK') selected @endif>Macedonian</option>
                                    <option value="MS" @if($stripe_language === 'MS') selected @endif>Malay</option>
                                    <option value="ML" @if($stripe_language === 'ML') selected @endif>Malayalam</option>
                                    <option value="MT" @if($stripe_language === 'MT') selected @endif>Maltese</option>
                                    <option value="MI" @if($stripe_language === 'MI') selected @endif>Maori</option>
                                    <option value="MR" @if($stripe_language === 'MR') selected @endif>Marathi</option>
                                    <option value="MN" @if($stripe_language === 'MN') selected @endif>Mongolian</option>
                                    <option value="NE" @if($stripe_language === 'NE') selected @endif>Nepali</option>
                                    <option value="NO" @if($stripe_language === 'NO') selected @endif>Norwegian</option>
                                    <option value="FA" @if($stripe_language === 'FA') selected @endif>Persian</option>
                                    <option value="PL" @if($stripe_language === 'PL') selected @endif>Polish</option>
                                    <option value="PT" @if($stripe_language === 'PT') selected @endif>Portuguese</option>
                                    <option value="PA" @if($stripe_language === 'PA') selected @endif>Punjabi</option>
                                    <option value="QU" @if($stripe_language === 'QU') selected @endif>Quechua</option>
                                    <option value="RO" @if($stripe_language === 'RO') selected @endif>Romanian</option>
                                    <option value="RU" @if($stripe_language === 'RU') selected @endif>Russian</option>
                                    <option value="SM" @if($stripe_language === 'SM') selected @endif>Samoan</option>
                                    <option value="SR" @if($stripe_language === 'SR') selected @endif>Serbian</option>
                                    <option value="SK" @if($stripe_language === 'SK') selected @endif>Slovak</option>
                                    <option value="SL" @if($stripe_language === 'SL') selected @endif>Slovenian</option>
                                    <option value="ES" @if($stripe_language === 'ES') selected @endif>Spanish</option>
                                    <option value="SW" @if($stripe_language === 'SW') selected @endif>Swahili</option>
                                    <option value="SV" @if($stripe_language === 'SV') selected @endif>Swedish </option>
                                    <option value="TA" @if($stripe_language === 'TA') selected @endif>Tamil</option>
                                    <option value="TT" @if($stripe_language === 'TT') selected @endif>Tatar</option>
                                    <option value="TE" @if($stripe_language === 'TE') selected @endif>Telugu</option>
                                    <option value="TH" @if($stripe_language === 'TH') selected @endif>Thai</option>
                                    <option value="BO" @if($stripe_language === 'BO') selected @endif>Tibetan</option>
                                    <option value="TO" @if($stripe_language === 'TO') selected @endif>Tonga</option>
                                    <option value="TR" @if($stripe_language === 'TR') selected @endif>Turkish</option>
                                    <option value="UK" @if($stripe_language === 'UK') selected @endif>Ukrainian</option>
                                    <option value="UR" @if($stripe_language === 'UR') selected @endif>Urdu</option>
                                    <option value="UZ" @if($stripe_language === 'UZ') selected @endif>Uzbek</option>
                                    <option value="VI" @if($stripe_language === 'VI') selected @endif>Vietnamese</option>
                                    <option value="CY" @if($stripe_language === 'CY') selected @endif>Welsh</option>
                                    <option value="XH" @if($stripe_language === 'XH') selected @endif>Xhosa</option>
                                </select>
                                <select class="form-select" id="currency" name="stripe_currency"  name="stripe_currency" class="form-control mb-2" required>
                                    <option>select currency  {{$stripe_currency}}</option>
                                    <option value="AFN"  @if($stripe_currency === 'AFN') selected @endif>AFN</option>
                                    <option value="ALL"  @if($stripe_currency === 'ALL') selected @endif>ALL</option>
                                    <option value="DZD"  @if($stripe_currency === 'DZD') selected @endif>DZD</option>
                                    <option value="AOA"  @if($stripe_currency === 'AOA') selected @endif>AOA</option>
                                    <option value="ARS"  @if($stripe_currency === 'ARS') selected @endif>ARS</option>
                                    <option value="AMD"  @if($stripe_currency === 'AMD') selected @endif>AMD</option>
                                    <option value="AWG"  @if($stripe_currency === 'AWG') selected @endif>AWG</option>
                                    <option value="AUD"  @if($stripe_currency === 'AUD') selected @endif>AUD</option>
                                    <option value="AZN"  @if($stripe_currency === 'AZN') selected @endif>AZN</option>
                                    <option value="BSD"  @if($stripe_currency === 'BSD') selected @endif>BSD</option>
                                    <option value="BHD"  @if($stripe_currency === 'BHD') selected @endif>BHD</option>
                                    <option value="BDT"  @if($stripe_currency === 'BDT') selected @endif>BDT</option>
                                    <option value="BBD"  @if($stripe_currency === 'BBD') selected @endif>BBD</option>
                                    <option value="BYR"  @if($stripe_currency === 'BYR') selected @endif>BYR</option>
                                    <option value="BEF"  @if($stripe_currency === 'BEF') selected @endif>BEF</option>
                                    <option value="BZD"  @if($stripe_currency === 'BZD') selected @endif>BZD</option>
                                    <option value="BMD"  @if($stripe_currency === 'BMD') selected @endif>BMD</option>
                                    <option value="BTN"  @if($stripe_currency === 'BTN') selected @endif>BTN</option>
                                    <option value="BTC"  @if($stripe_currency === 'BTC') selected @endif>BTC</option>
                                    <option value="BOB"  @if($stripe_currency === 'BOB') selected @endif>BOB</option>
                                    <option value="BAM"  @if($stripe_currency === 'BAM') selected @endif>BAM</option>
                                    <option value="BWP"  @if($stripe_currency === 'BWP') selected @endif>BWP</option>
                                    <option value="BRL"  @if($stripe_currency === 'BRL') selected @endif>BRL</option>
                                    <option value="GBP"  @if($stripe_currency === 'GBP') selected @endif>GBP</option>
                                    <option value="BND"  @if($stripe_currency === 'BND') selected @endif>BND</option>
                                    <option value="BGN"  @if($stripe_currency === 'BGN') selected @endif>BGN</option>
                                    <option value="BIF"  @if($stripe_currency === 'BIF') selected @endif>BIF</option>
                                    <option value="KHR"  @if($stripe_currency === 'KHR') selected @endif>KHR</option>
                                    <option value="CAD"  @if($stripe_currency === 'CAD') selected @endif>CAD</option>
                                    <option value="CVE"  @if($stripe_currency === 'CVE') selected @endif>CVE</option>
                                    <option value="KYD"  @if($stripe_currency === 'KYD') selected @endif>KYD</option>
                                    <option value="XOF"  @if($stripe_currency === 'XOF') selected @endif>XOF</option>
                                    <option value="XAF"  @if($stripe_currency === 'XAF') selected @endif>XAF</option>
                                    <option value="XPF"  @if($stripe_currency === 'XPF') selected @endif>XPF</option>
                                    <option value="CLP"  @if($stripe_currency === 'CLP') selected @endif>CLP</option>
                                    <option value="CNY"  @if($stripe_currency === 'CNY') selected @endif>CNY</option>
                                    <option value="COP"  @if($stripe_currency === 'COP') selected @endif>COP</option>
                                    <option value="KMF"  @if($stripe_currency === 'KMF') selected @endif>KMF</option>
                                    <option value="CDF"  @if($stripe_currency === 'CDF') selected @endif>CDF</option>
                                    <option value="CRC"  @if($stripe_currency === 'CRC') selected @endif>CRC</option>
                                    <option value="HRK"  @if($stripe_currency === 'HRK') selected @endif>HRK</option>
                                    <option value="CUC"  @if($stripe_currency === 'CUC') selected @endif>CUC</option>
                                    <option value="CZK"  @if($stripe_currency === 'CZK') selected @endif>CZK</option>
                                    <option value="DKK"  @if($stripe_currency === 'DKK') selected @endif>DKK</option>
                                    <option value="DJF"  @if($stripe_currency === 'DJF') selected @endif>DJF</option>
                                    <option value="DOP"  @if($stripe_currency === 'DOP') selected @endif>DOP</option>
                                    <option value="XCD"  @if($stripe_currency === 'XCD') selected @endif>XCD</option>
                                    <option value="EGP"  @if($stripe_currency === 'EGP') selected @endif>EGP</option>
                                    <option value="ERN"  @if($stripe_currency === 'ERN') selected @endif>ERN</option>
                                    <option value="EEK"  @if($stripe_currency === 'EEK') selected @endif>EEK</option>
                                    <option value="ETB"  @if($stripe_currency === 'ETB') selected @endif>ETB</option>
                                    <option value="EUR"  @if($stripe_currency === 'EUR') selected @endif>EUR</option>
                                    <option value="FKP"  @if($stripe_currency === 'FKP') selected @endif>FKP</option>
                                    <option value="FJD"  @if($stripe_currency === 'FJD') selected @endif>FJD</option>
                                    <option value="GMD"  @if($stripe_currency === 'GMD') selected @endif>GMD</option>
                                    <option value="GEL"  @if($stripe_currency === 'GEL') selected @endif>GEL</option>
                                    <option value="DEM"  @if($stripe_currency === 'DEM') selected @endif>DEM</option>
                                    <option value="GHS"  @if($stripe_currency === 'GHS') selected @endif>GHS</option>
                                    <option value="GIP"  @if($stripe_currency === 'GIP') selected @endif>GIP</option>
                                    <option value="GRD"  @if($stripe_currency === 'GRD') selected @endif>GRD</option>
                                    <option value="GTQ"  @if($stripe_currency === 'GTQ') selected @endif>GTQ</option>
                                    <option value="GNF"  @if($stripe_currency === 'GNF') selected @endif>GNF</option>
                                    <option value="GYD"  @if($stripe_currency === 'GYD') selected @endif>GYD</option>
                                    <option value="HTG"  @if($stripe_currency === 'HTG') selected @endif>HTG</option>
                                    <option value="HNL"  @if($stripe_currency === 'HNL') selected @endif>HNL</option>
                                    <option value="HKD"  @if($stripe_currency === 'HKD') selected @endif>HKD</option>
                                    <option value="HUF"  @if($stripe_currency === 'HUF') selected @endif>HUF</option>
                                    <option value="ISK"  @if($stripe_currency === 'ISK') selected @endif>ISK</option>
                                    <option value="INR"  @if($stripe_currency === 'INR') selected @endif>INR</option>
                                    <option value="IDR"  @if($stripe_currency === 'IDR') selected @endif>IDR</option>
                                    <option value="IRR"  @if($stripe_currency === 'IRR') selected @endif>IRR</option>
                                    <option value="IQD"  @if($stripe_currency === 'IQD') selected @endif>IQD</option>
                                    <option value="ILS"  @if($stripe_currency === 'ILS') selected @endif>ILS</option>
                                    <option value="ITL"  @if($stripe_currency === 'ITL') selected @endif>ITL</option>
                                    <option value="JMD"  @if($stripe_currency === 'JMD') selected @endif>JMD</option>
                                    <option value="JPY"  @if($stripe_currency === 'JPY') selected @endif>JPY</option>
                                    <option value="JOD"  @if($stripe_currency === 'JOD') selected @endif>JOD</option>
                                    <option value="KZT"  @if($stripe_currency === 'KZT') selected @endif>KZT</option>
                                    <option value="KES"  @if($stripe_currency === 'KES') selected @endif>KES</option>
                                    <option value="KWD"  @if($stripe_currency === 'KWD') selected @endif>KWD</option>
                                    <option value="KGS"  @if($stripe_currency === 'KGS') selected @endif>KGS</option>
                                    <option value="LAK"  @if($stripe_currency === 'LAK') selected @endif>LAK</option>
                                    <option value="LVL"  @if($stripe_currency === 'LVL') selected @endif>LVL</option>
                                    <option value="LBP"  @if($stripe_currency === 'LBP') selected @endif>LBP</option>
                                    <option value="LSL"  @if($stripe_currency === 'LSL') selected @endif>LSL</option>
                                    <option value="LRD"  @if($stripe_currency === 'LRD') selected @endif>LRD</option>
                                    <option value="LYD"  @if($stripe_currency === 'LYD') selected @endif>LYD</option>
                                    <option value="LTL"  @if($stripe_currency === 'LTL') selected @endif>LTL</option>
                                    <option value="MOP"  @if($stripe_currency === 'MOP') selected @endif>MOP</option>
                                    <option value="MKD"  @if($stripe_currency === 'MKD') selected @endif>MKD</option>
                                    <option value="MGA"  @if($stripe_currency === 'MGA') selected @endif>MGA</option>
                                    <option value="MWK"  @if($stripe_currency === 'MWK') selected @endif>MWK</option>
                                    <option value="MYR"  @if($stripe_currency === 'MYR') selected @endif>MYR</option>
                                    <option value="MVR"  @if($stripe_currency === 'MVR') selected @endif>MVR</option>
                                    <option value="MRO"  @if($stripe_currency === 'MRO') selected @endif>MRO</option>
                                    <option value="MUR"  @if($stripe_currency === 'MUR') selected @endif>MUR</option>
                                    <option value="MXN"  @if($stripe_currency === 'MXN') selected @endif>MXN</option>
                                    <option value="MDL"  @if($stripe_currency === 'MDL') selected @endif>MDL</option>
                                    <option value="MNT"  @if($stripe_currency === 'MNT') selected @endif>MNT</option>
                                    <option value="MAD"  @if($stripe_currency === 'MAD') selected @endif>MAD</option>
                                    <option value="MZM"  @if($stripe_currency === 'MZM') selected @endif>MZM</option>
                                    <option value="MMK"  @if($stripe_currency === 'MMK') selected @endif>MMK</option>
                                    <option value="NAD"  @if($stripe_currency === 'NAD') selected @endif>NAD</option>
                                    <option value="NPR"  @if($stripe_currency === 'NPR') selected @endif>NPR</option>
                                    <option value="ANG"  @if($stripe_currency === 'ANG') selected @endif>ANG</option>
                                    <option value="TWD"  @if($stripe_currency === 'TWD') selected @endif>TWD</option>
                                    <option value="NZD"  @if($stripe_currency === 'NZD') selected @endif>NZD</option>
                                    <option value="NIO"  @if($stripe_currency === 'NIO') selected @endif>NIO</option>
                                    <option value="NGN"  @if($stripe_currency === 'NGN') selected @endif>NGN</option>
                                    <option value="KPW"  @if($stripe_currency === 'KPW') selected @endif>KPW</option>
                                    <option value="NOK"  @if($stripe_currency === 'NOK') selected @endif>NOK</option>
                                    <option value="OMR"  @if($stripe_currency === 'OMR') selected @endif>OMR</option>
                                    <option value="PKR"  @if($stripe_currency === 'PKR') selected @endif>PKR</option>
                                    <option value="PAB"  @if($stripe_currency === 'PAB') selected @endif>PAB</option>
                                    <option value="PGK"  @if($stripe_currency === 'PGK') selected @endif>PGK</option>
                                    <option value="PYG"  @if($stripe_currency === 'PYG') selected @endif>PYG</option>
                                    <option value="PEN"  @if($stripe_currency === 'PEN') selected @endif>PEN</option>
                                    <option value="PHP"  @if($stripe_currency === 'PHP') selected @endif>PHP</option>
                                    <option value="PLN"  @if($stripe_currency === 'PLN') selected @endif>PLN</option>
                                    <option value="QAR"  @if($stripe_currency === 'QAR') selected @endif>QAR</option>
                                    <option value="RON"  @if($stripe_currency === 'RON') selected @endif>RON</option>
                                    <option value="RUB"  @if($stripe_currency === 'RUB') selected @endif>RUB</option>
                                    <option value="RWF"  @if($stripe_currency === 'RWF') selected @endif>RWF</option>
                                    <option value="SVC"  @if($stripe_currency === 'SVC') selected @endif>SVC</option>
                                    <option value="WST"  @if($stripe_currency === 'WST') selected @endif>WST</option>
                                    <option value="SAR"  @if($stripe_currency === 'SAR') selected @endif>SAR</option>
                                    <option value="RSD"  @if($stripe_currency === 'RSD') selected @endif>RSD</option>
                                    <option value="SCR"  @if($stripe_currency === 'SCR') selected @endif>SCR</option>
                                    <option value="SLL"  @if($stripe_currency === 'SLL') selected @endif>SLL</option>
                                    <option value="SGD"  @if($stripe_currency === 'SGD') selected @endif>SGD</option>
                                    <option value="SKK"  @if($stripe_currency === 'SKK') selected @endif>SKK</option>
                                    <option value="SBD"  @if($stripe_currency === 'SBD') selected @endif>SBD</option>
                                    <option value="SOS"  @if($stripe_currency === 'SOS') selected @endif>SOS</option>
                                    <option value="ZAR"  @if($stripe_currency === 'ZAR') selected @endif>ZAR</option>
                                    <option value="KRW"  @if($stripe_currency === 'KRW') selected @endif>KRW</option>
                                    <option value="XDR"  @if($stripe_currency === 'XDR') selected @endif>XDR</option>
                                    <option value="LKR"  @if($stripe_currency === 'LKR') selected @endif>LKR</option>
                                    <option value="SHP"  @if($stripe_currency === 'SHP') selected @endif>SHP</option>
                                    <option value="SDG"  @if($stripe_currency === 'SDG') selected @endif>SDG</option>
                                    <option value="SRD"  @if($stripe_currency === 'SRD') selected @endif>SRD</option>
                                    <option value="SZL"  @if($stripe_currency === 'SZL') selected @endif>SZL</option>
                                    <option value="SEK"  @if($stripe_currency === 'SEK') selected @endif>SEK</option>
                                    <option value="CHF"  @if($stripe_currency === 'CHF') selected @endif>CHF</option>
                                    <option value="SYP"  @if($stripe_currency === 'SYP') selected @endif>SYP</option>
                                    <option value="STD"  @if($stripe_currency === 'STD') selected @endif>STD</option>
                                    <option value="TJS"  @if($stripe_currency === 'TJS') selected @endif>TJS</option>
                                    <option value="TZS"  @if($stripe_currency === 'TZS') selected @endif>TZS</option>
                                    <option value="THB"  @if($stripe_currency === 'THB') selected @endif>THB</option>
                                    <option value="TOP"  @if($stripe_currency === 'TOP') selected @endif>TOP</option>
                                    <option value="TTD"  @if($stripe_currency === 'TTD') selected @endif>TTD</option>
                                    <option value="TND"  @if($stripe_currency === 'TND') selected @endif>TND</option>
                                    <option value="TRY"  @if($stripe_currency === 'TRY') selected @endif>TRY</option>
                                    <option value="TMT"  @if($stripe_currency === 'TMT') selected @endif>TMT</option>
                                    <option value="UGX"  @if($stripe_currency === 'UGX') selected @endif>UGX</option>
                                    <option value="UAH"  @if($stripe_currency === 'UAH') selected @endif>UAH</option>
                                    <option value="AED"  @if($stripe_currency === 'AED') selected @endif>AED</option>
                                    <option value="UYU"  @if($stripe_currency === 'UYU') selected @endif>UYU</option>
                                    <option value="USD"  @if($stripe_currency === 'USD') selected @endif>USD</option>
                                    <option value="UZS"  @if($stripe_currency === 'UZS') selected @endif>UZS</option>
                                    <option value="VUV"  @if($stripe_currency === 'VUV') selected @endif>VUV</option>
                                    <option value="VEF"  @if($stripe_currency === 'VEF') selected @endif>VEF</option>
                                    <option value="VND"  @if($stripe_currency === 'VND') selected @endif>VND</option>
                                    <option value="YER"  @if($stripe_currency === 'YER') selected @endif>YER</option>
                                    <option value="ZMK"  @if($stripe_currency === 'ZMK') selected @endif>ZMK</option>
                                </select>
                                <div class="text-center">
                                    <button class="primary-btn cursor-pointer mt-4" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <div class="sm:px-6 lg:px-8 mx-auto w-100 flex-none">
                            <div class="lg:px-8 py-8 mt-4 px-4">
                                <h2 class="mt-0 welcome-text text-center mb-4 fw-bold stripe-color">Payment Method</h2>
                                <form action="{{ route('paymentgateway.add') }}" method="POST">
                                    <div class="table-responsive w-75 mx-auto bg-white responsive_payment">
                                        <table class="table payment_method table-striped table-fixed mb-0">
                                            <tbody>
                                                <tr>
                                                    <td class="p-3">
                                                    Card
                                                    </td>
                                                    <td class="p-3">
                                                        <div class="form-check form-switch d-flex">
                                                            <label class="form-check-label fw-bold">Deactivate</label>
                                                            <input class="form-check-input custom-checkout" value="card" type="checkbox" id="company1" name="card">
                                                            <label class="form-check-label fw-bold">Activate</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-3">
                                                        Ideal
                                                    </td>
                                                    <td class="p-3">
                                                        <div class="form-check form-switch d-flex">
                                                            <label class="form-check-label fw-bold">Deactivate</label>
                                                            <input class="form-check-input custom-checkout" value="ideal" name="ideal" type="checkbox" id="company2">
                                                            <label class="form-check-label fw-bold">Activate</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-3">
                                                    Sofort
                                                    </td>
                                                    <td class="p-3">
                                                        <div class="form-check form-switch d-flex">
                                                            <label class="form-check-label fw-bold">Deactivate</label>
                                                            <input class="form-check-input custom-checkout" value="sofort" name="sofort" type="checkbox" id="company3">
                                                            <label class="form-check-label fw-bold">Activate</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-3">
                                                    Sepa Debit
                                                    </td>
                                                    <td class="p-3">
                                                        <div class="form-check form-switch d-flex">
                                                            <label class="form-check-label fw-bold">Deactivate</label>
                                                            <input class="form-check-input custom-checkout" value="sepa_debit" name="sepa_debit" type="checkbox" id="company4">
                                                            <label class="form-check-label fw-bold">Activate</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-3">
                                                        Giropay
                                                    </td>
                                                    <td class="p-3">
                                                        <div class="form-check form-switch d-flex">
                                                            <label class="form-check-label fw-bold">Deactivate</label>
                                                            <input class="form-check-input custom-checkout" value="giropay"  name="giropay" type="checkbox" id="company5">
                                                            <label class="form-check-label fw-bold">Activate</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-3">
                                                        EPS
                                                    </td>
                                                    <td class="p-3">
                                                        <div class="form-check form-switch d-flex">
                                                            <label class="form-check-label fw-bold">Deactivate</label>
                                                            <input class="form-check-input custom-checkout" type="checkbox" value="eps"   name="eps"  id="company6">
                                                            <label class="form-check-label fw-bold">Activate</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-3">
                                                    Bancontact
                                                    </td>
                                                    <td class="p-3">
                                                        <div class="form-check form-switch d-flex">
                                                            <label class="form-check-label fw-bold">Deactivate</label>
                                                            <input class="form-check-input custom-checkout" type="checkbox" value="bancontact"  name="bancontact"  id="company7">
                                                            <label class="form-check-label fw-bold">Activate</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-3">
                                                    P24
                                                    </td>
                                                    <td class="p-3">
                                                        <div class="form-check form-switch d-flex">
                                                            <label class="form-check-label fw-bold">Deactivate</label>
                                                            <input class="form-check-input custom-checkout" type="checkbox" value="p24"  name="p24"  id="company8">
                                                            <label class="form-check-label fw-bold">Activate</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-3">
                                                        Alipay
                                                    </td>
                                                    <td class="p-3">
                                                        <div class="form-check form-switch d-flex">
                                                            <label class="form-check-label fw-bold">Deactivate</label>
                                                            <input class="form-check-input custom-checkout" type="checkbox" value="alipay"  name="alipay"  id="company9">
                                                            <label class="form-check-label fw-bold">Activate</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-3">
                                                    Wechat Pay
                                                    </td>
                                                    <td class="p-3">
                                                        <div class="form-check form-switch d-flex">
                                                            <label class="form-check-label fw-bold">Deactivate</label>
                                                            <input class="form-check-input custom-checkout" type="checkbox"  value="wechat_pay"   name="wechat_pay"  id="company10">
                                                            <label class="form-check-label fw-bold">Activate</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="p-3">
                                                    Klarna
                                                    </td>
                                                    <td class="p-3">
                                                        <div class="form-check form-switch d-flex">
                                                            <label class="form-check-label fw-bold">Deactivate</label>
                                                            <input class="form-check-input custom-checkout" type="checkbox"  value="klarna"   name="klarna"  id="company10">
                                                            <label class="form-check-label fw-bold">Activate</label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <input type="hidden" name="current_shop" value="{{$shopDomain ?? Auth::user()->name}}">
                                    <div class="text-center">
                                        <button class="primary-btn cursor-pointer mt-4" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                        <div class="sm:px-6 lg:px-8 max-w-4xl mx-auto w-100 flex-none mt-4">
                            <div class="bg-white lg:px-8 py-8 shadow border-fb rounded-xl px-4">
                                <h2 class="mt-0 welcome-text text-center mb-4 fw-bold color-fb">Add Your Facebook Pixel</h2>
                                <form action="{{ route('fb.add') }}" method="POST">
                                    <label>Add Facebook Pixel Script</label>
                                    {{$fb_pixel}}
                                    <textarea type="text" class="form-textarea mb-2" name="fb_pixel" required>{{$fb_pixel}}</textarea>
                                    <input type="hidden" name="current_shop" value="{{$shopDomain ?? Auth::user()->name}}">
                                    <div class="text-center">
                                        <button class="primary-btn facebook-btn cursor-pointer mt-4">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
                        <div class="sm:px-6 lg:px-8 max-w-4xl mx-auto w-100 flex-none">
                            <div class="bg-white lg:px-8 py-8 mt-4 shadow border-black rounded-xl px-4">
                                <h2 class="mt-0 welcome-text text-center mb-4 fw-bold color-black">Add Your Tiktok Pixel</h2>
                                <form action="{{ route('tiktok.add') }}" method="POST">
                                    <label>Add Titktok Pixel Script</label>
                                    <textarea type="text" class="form-textarea mb-2" name="tiktok_pixel" required>{{$tiktok_pixel}}</textarea>
                                    <input type="hidden" name="current_shop" value="{{$shopDomain ?? Auth::user()->name}}">
                                    <div class="text-center">
                                        <button class="primary-btn tiktok-btn cursor-pointer mt-4">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</html>

