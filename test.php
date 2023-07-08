<?php

    // Add Shortcode
    function triplea_signup_form_func() {

        ob_start();
        ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.16/js/intlTelInput.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.16/css/intlTelInput.css">
        <script src='https://www.google.com/recaptcha/api.js' async defer></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js" integrity="sha512-rMGGF4wg1R73ehtnxXBt5mbUfN9JUJwbk21KMlnLZDJh7BkPmeovBuddZCENJddHYYMkCh9hPFnPmS9sspki8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css" integrity="sha512-yVvxUQV0QESBt1SyZbNJMAwyKvFTLMyXSyBHDO4BG5t7k/Lw34tyqlSDlKIrIENIzCl+RVUNjmCPG+V/GMesRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <style>
            /* for intl-tel-input */
            .iti__flag {background-image: url("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.16/img/flags.png");}

            @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
                .iti__flag {background-image: url("https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.16/img/flags@2x.png");}
            }
        </style>

        <style>
            html, body {
                height: 100%;
            }
            /*body {
             background-image: linear-gradient(to right, #f3f9fd3d 0%, #dceaf45e 49%, white 49%, white 100%);
            }*/
            .chosen-container{
                margin-top: 8px !important;
            }
            .chosen-container-multi .chosen-choices li.search-field {
                height: auto !important;
            }
            .chosen-container-multi .chosen-choices li.search-field input[type=text]{
                min-height: 30px !important;
                font-family: "Montserrat";
                color:#999 !important;
                font-size: 13px !important;
            }
            .chosen-container-multi .chosen-choices {

                height: auto;
                border: 1px solid #767676 !important;
                background-color: #fff;
                background-image: none !important;
                cursor: text;
            }
           input.chosen-search-input {
                font-family: "Montserrat";
                color:#999 !important;
                font-size: 13px !important;
            }
            #turnover-name{
                font-size: 13px;
                padding: 7px 0px 5px;
                color: #999;
            }
            #entity-name{
                font-size: 13px;
                padding: 7px 0px 5px;
                color: #999;
            }

            .fa-angle-down{
                position: absolute !important;
                right: 1% !important;
                top: 25% !important;
            }
            .signup-left-column {
                padding: 0 30px 0 40px;
            }
            .signup-logo {
                display:block;
                margin-bottom: 30px;
                overflow: hidden;
            }
            .signup-header {
                margin: 40px 0 40px 0;
            }
            .form-title {
                font-size: 24px;
                font-weight: 400 !important;
                margin-bottom: 20px;
            }
            .signup-checklist-title {
                line-height: 24px !important;
                font-weight: 500 !important;
                font-size: 22px;
            }
            .signup-checklist-text {
                font-size: 19px;
                color: #666;
            }
            .signup-label {
                max-width: 100% !important;
            }
            .signup-input {
                font-size: 17px;
                margin-top: 8px;
                padding: 4px 4px 2px;
                max-width: 100%;
                width: 360px;
            }
            /* option:disabled {
  color: red;
} */
            /* option:disabled {
                font-size: 13px !important;
                padding: 4px 4px 2px;
                width: 100%;
                color: #999 !important;
            }
            option[value="Please Select"][disabled] {
                color: #999 !important;
            }
            option[value="PleaseSelect"][disabled] {
                color: #999 !important;
            } */
            .signup-button {
                color: white;
                background: #095693;
                border-radius: 6px;
                border: 0;
                padding: 5px 20px;
                margin: 10px 0 30px;
            }
            .bullet-list-blue-dot-2::before {
                top: 5px;
            }

            @media only screen and (max-width: 780px) {
                body {
                    background-image: none;
                }
                .form-title {
                    margin-top: 0;
                }
                .bullet-list-blue-dot-2::before {
                    display: none;
                }
            }
        </style>
        <h1 class="form-title">Create your TripleA account</h1>
        <script>
            // // enable button after recaptha
            // function enableSubmitBtn(){
            // //console.log("enabling submit button");
            // document.querySelectorAll('.submit-btn-area').forEach(function(el) {
            // el.style.display = 'block';
            // });
            // }
        </script>
        <form>
            <div style="margin-bottom: 25px;">
                <label class="signup-label">First name<br>
                    <input id="first-name" type="text" maxlength="100" class="signup-input">
                </label>
                <small id="first-name-validation" style="display:none;color:red;">
                    Please provide a first name
                </small>
            </div>
            <div style="margin-bottom: 25px;">
                <label class="signup-label">Last name<br>
                    <input id="last-name" type="text"  maxlength="100" class="signup-input">
                </label>
                <small id="last-name-validation" style="display:none;color:red;">
                    Please provide a last name
                </small>
            </div>
            <div style="margin-bottom: 25px;">
                <label class="signup-label">Industry<br>
                    <!-- <input id="industry-name" type="text" class="signup-input"> -->
                    <select class="signup-input industry-name-select" data-placeholder="Please Select" name="industry-name[]" id="industry-name" multiple>
                        <!-- <option value="" disabled selected>Please Select</option> -->
                        <option value="ECOMMERCE_MARKETPLACE">E-Commerce / Marketplace</option>
                        <option value="EMI_DIGITAL_WALLET_TELECOM">EMI / Digital Wallet / Telecom</option>
                        <option value="EVENTS_TICKETING">Events and Ticketing</option>
                        <option value="FINANCIAL_INSTITUTION_EXCHANGES">Financial Institution / Exchanges</option>
                        <option value="GAMBLING">Gambling</option>
                        <option value="GAMING_ENTERTAINMENT">Gaming / Entertainment</option>
                        <option value="GIFT_CARDS">Gift Cards</option>
                        <option value="LUXURY">Luxury (Fashion, Cars, Furniture...)</option>
                        <option value="PAYMENT_SERVICE_PROVIDER">Payment Service Provider</option>
                        <option value="PROFESSIONAL_SERVICES">Professional Services</option>
                        <option value="REAL_ESTATE">Real Estate</option>
                        <option value="STREAMING_SOCIAL_MEDIA">Streaming / Social Media</option>
                        <option value="TECHNOLOGY">Technology</option>
                        <option value="TRAVEL_TOURISM">Travel & Tourism</option>
                        <option value="OTHERS">Others</option>
                    </select>
                </label>
                <small id="industry-validation" style="display:none;color:red;">
                    Please provide a industry
                </small>
            </div>

            <div style="margin-bottom: 25px;">
                <label class="signup-label">Annual turnover<br>
                    <!-- <input id="turnover-name" type="text" class="signup-input"> -->
                    <select class="signup-input turnover-name-select" name="turnover-name" id="turnover-name" >
                    <option value="" disabled selected>Please Select</option>
                        <option value="LESS_THAN_ONE_MILLION">< 1M USD </option>
                        <option value="ONE_TO_HUNDRED_MILLION"> 1-100M USD </option>
                        <option value="MORE_THAN_100_MILLION">> 100M USD </option>
                        <option value="NOT_APPLICABLE">Not Applicable</option>
                    </select>
                </label>
                <small id="turnover-validation" style="display:none;color:red;">
                    Please provide a annual turnover
                </small>
            </div>
            <div style="margin-bottom: 25px;">
                <label class="signup-label">Legal entity type<br>
                    <!-- <input id="entity-name" type="text" class="signup-input"> -->
                    <select class="signup-input entity-select" name="entity-name"  id="entity-name">
                        <option value="" disabled selected>Please Select</option>
                        <option value="CORPORATE">Corporate</option>
                        <option value="SOLE_PROPRIETOR">Sole proprietor</option>
                        <option value="NOT_APPLICABLE">Not Applicable</option>
                    </select>
                </label>
                <small id="entity-validation" style="display:none;color:red;">
                    Please provide a legal entity type
                </small>
            </div>
            <div style="margin-bottom: 25px;">
                <label class="signup-label">Website url<br>
                    <input id="website-name" type="text" maxlength="100" class="signup-input">
                </label>
                <small id="website-validation" style="display:none;color:red;">
                    Please provide a website url
                </small>
            </div>


            <div style="margin-bottom: 25px;">
                <label class="signup-label">Company name<br>
                    <input id="signup-name" type="text"  maxlength="100" class="signup-input">
                </label>
                <small id="signup-name-validation" style="display:none;color:red;">
                    Please provide a name
                </small>
            </div>
            <div style="margin-bottom: 25px;">
                <label class="signup-label">Email address<br>
                    <input id="signup-email" type="email"  maxlength="100" class="signup-input">
                </label>
                <small id="signup-email-validation" style="display:none;color:red;">
                    Please provide a valid email address
                </small>
            </div>
            <div style="margin-bottom: 25px;">
                <label class="signup-label">Contact number<br>
                    <input id="signup-phone" type="tel" class="signup-input">
                </label>
                <small id="signup-phone-validation" style="display:none;color:red;">
                    Please provide a phone number with valid format
                </small>
            </div>
            <div style="margin-bottom: 25px;">
                <label class="signup-country" for="signup-country">Country of Incorporation<br>
                    <select id="signup-country" name="signup-country" class="signup-input">
                        <option value="-" disabled=""> - select -</option>
                        <?php $countries = get_country_names(); ?>
                        <?php foreach( $countries as $key => $value ) : ?>
                            <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
            </div>
            <div style="margin-bottom: 25px;">
                <label class="signup-label" for="">Preferred currency<br>
                    <select name="preferred-currency" id="preferred-currency" class="signup-input">
                        <option value="-" disabled=""> - select -</option>
                        <?php $currencies = get_currency_names(); ?>
                        <?php foreach( $currencies as $key => $value ) : ?>
                            <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
            </div>
            <div style="margin-bottom: 25px;display:none;" id="partnerid-wrapper">
                <label>Partner ID<br>
                    <input id="signup-partnerid" type="text" class="signup-input" readonly="readonly" disabled="disabled" value="">
                </label>
            </div>
            <div>
                <label style="font-size: 17px">
                    <input type="checkbox" id="signup-conscent" name="signup-conscent-input" value="Yes" required>
                    By clicking the button below, I confirm I have read and accept
                    <!-- <a href="https://triple-a.io/privacy-and-terms-policy/" target="_blank" rel="noopener noreferrer" class="whitespace-nowrap">the terms and conditions</a>. -->
                    <a href="https://triple-a.io/wp-content/uploads/2022/11/Terms-of-Use-Crypto-Payment-.pdf" target="_blank" rel="noopener noreferrer" class="whitespace-nowrap">the terms and conditions</a>.
                </label>
                <small id="signup-conscent-validation" style="display:none;color:red;">
                    Please provide conscent that you've read our terms & conditions
                </small>
            </div>
            <!-- <div style="margin-top: 10px;margin-bottom: 10px;" class="g-recaptcha" data-sitekey="6Le_s50lAAAAAKQJsVwj0o4TVU0eAVtHEimd6zSL" data-callback="enableSubmitBtn"></div> -->
            <div class="submit-btn-area">
                <input type="button" id="signup-submit" class="signup-button" onclick="startCreateMerchantAccount()" value="Create account">
                <small id="signup-error" style="display:none;color:red;margin-top:-20px; margin-bottom:25px;">
                Please contact support at <a href="mailto:support@triple-a.io">support@triple-a.io</a>.
                </small>
            </div>
            <div style="display:none;" id="signup-confirmation">
                <p style="padding: 9px 20px;border-radius: 5px;background: #b0ecb3;">
                    Your account has been created!
                    <br>
                    Your credentials have been <strong>sent to your email address</strong>.
                    <br>
                    <br>
                    Redirecting you in 2 seconds to the Get Started page...
                </p>
            </div>
        </form>

        <!-- needs intl-tel-input js file, imported above -->
        <script>

            // In your Javascript (external .js resource or <script> tag)
            // jQuery(document).ready(function() {
            //     jQuery('.entity-select').select2();

            // });
            // jQuery(document).ready(function() {

            //     jQuery('.turnover-name-select').select2();

            // });
            jQuery(document).ready(function() {
                let selectElement = document.getElementById('turnover-name');

                selectElement.addEventListener('change', function() {
                    let selectedOption = this.options[this.selectedIndex];
                    selectElement.style.color = "#3F4244";
                    selectElement.style.fontSize = "17px";
                    selectElement.style.padding = "5px 4px 3px";
                });

                let selectElement2 = document.getElementById('entity-name');

                selectElement2.addEventListener('change', function() {
                    let selectedOption2 = this.options[this.selectedIndex];
                    selectElement2.style.color = "#3F4244";
                    selectElement2.style.fontSize = "17px";
                    selectElement2.style.padding = "5px 4px 3px";
                });


                // jQuery('.industry-name-select').select2({
                //     placeholder: " Select a industry",
                // });
                jQuery(".industry-name-select").chosen({
                    disable_search: true,
                });
                jQuery('<li><i class="fa fa-angle-down" /></li>').appendTo('ul.chosen-choices');

            });

            var input = document.querySelector("#signup-phone");
            window.intlTelInput(input, {
                // any initialisation options go here
                customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
                    return "e.g. " + selectedCountryPlaceholder;
                },
                preferredCountries: ['us','ca','fr','sg'],
                utilsScript: 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.16/js/utils.min.js',
                nationalMode: false,
                separateDialCode: true,
                formatOnDisplay: false,
            });
            //var iti = intlTelInput(input);

            /**  triplea-merchant-signup.js  **/
            let name = null;
            let email = null;
            let phone = null;
            let local_currency = null;
            let country = null;
            let partnerid = null;
            let publickey = null;

            let first_name = null;
            let last_name = null;
            let website_url = null;
            let industry = null;
            let legal_entity_type = null;
            let annual_turnover = null;


            let merchantKey = null;
            let clientId = null;
            let clientSecret = null;
            let otpKey = null;

            let params = new URLSearchParams(window.location.search);
            let partnerId = params.get('partnerid');
            if (partnerId) {
                let partnerIdElem = document.getElementById('signup-partnerid');
                partnerIdElem.value = partnerId;
                let wrapperElem = document.getElementById('partnerid-wrapper');
                wrapperElem.style.display = 'block';
            }

            function startCreateMerchantAccount() {
                let validation1Elem = document.getElementById('signup-name-validation');
                validation1Elem.style.display = 'none';
                let validation2Elem = document.getElementById('signup-email-validation');
                validation2Elem.style.display = 'none';
                let validation3Elem = document.getElementById('signup-phone-validation');
                validation3Elem.style.display = 'none';
                let validation4Elem = document.getElementById('signup-conscent-validation');
                validation4Elem.style.display = 'none';

                let validation5Elem = document.getElementById('first-name-validation');
                validation5Elem.style.display = 'none';
                let validation6Elem = document.getElementById('last-name-validation');
                validation6Elem.style.display = 'none';
                let validation7Elem = document.getElementById('industry-validation');
                validation7Elem.style.display = 'none';
                let validation8Elem = document.getElementById('turnover-validation');
                validation8Elem.style.display = 'none';
                let validation9Elem = document.getElementById('entity-validation');
                validation9Elem.style.display = 'none';
                let validation10Elem = document.getElementById('website-validation');
                validation10Elem.style.display = 'none';



                let confirmationElem = document.getElementById('signup-confirmation');
                confirmationElem.style.display = 'none';

                let error = false;

                let firstName = document.getElementById('first-name');
                if (!firstName || firstName.value === '')
                {
                    error = true;
                    let validationElem = document.getElementById('first-name-validation');
                    validationElem.style.display = 'inline-block';
                    console.warn(' Please provide a first name');
                }
                first_name = firstName.value || null;

                let lastName = document.getElementById('last-name');
                if (!lastName || lastName.value === '')
                {
                    error = true;
                    let validationElem = document.getElementById('last-name-validation');
                    validationElem.style.display = 'inline-block';
                    console.warn('Please provide a last name');
                }
                last_name = lastName.value || null;

                let websiteName = document.getElementById('website-name');
                if (!websiteName || websiteName.value === '')
                {
                    error = true;
                    let validationElem = document.getElementById('website-validation');
                    validationElem.style.display = 'inline-block';
                    console.warn('Please provide a website url');
                }
                website_url = websiteName.value || null;

                let turnOver = document.getElementById('turnover-name');
                if (!turnOver || turnOver.value === '')
                {
                    error = true;
                    let validationElem = document.getElementById('turnover-validation');
                    validationElem.style.display = 'inline-block';
                    console.warn('Please provide a annual turnover');
                }
                annual_turnover = turnOver.value || null;

                let legalEntity = document.getElementById('entity-name');
                if (!legalEntity || legalEntity.value === '')
                {
                    error = true;
                    let validationElem = document.getElementById('entity-validation');
                    validationElem.style.display = 'inline-block';
                    console.warn('Please provide a legal entity type');
                }
                legal_entity_type = legalEntity.value || null;

                let industryName = document.getElementById('industry-name');
                if (!industryName || industryName.value === '')
                {
                    error = true;
                    let validationElem = document.getElementById('industry-validation');
                    validationElem.style.display = 'inline-block';
                    console.warn(' Please provide a industry');
                }
                industry = industryName.value || null;

                let nameElem = document.getElementById('signup-name');
                if (!nameElem || nameElem.value === '')
                {
                    error = true;
                    let validationElem = document.getElementById('signup-name-validation');
                    validationElem.style.display = 'inline-block';
                    console.warn('Provide valid merchant name please.');
                }
                name = nameElem.value || null;

                let emailElem = document.getElementById('signup-email');
                if (!emailElem || emailElem.value === '' || emailElem.value.indexOf('@') < 3 )
                {
                    error = true;
                    let validationElem = document.getElementById('signup-email-validation');
                    validationElem.style.display = 'inline-block';
                    console.warn('Provide valid merchant email please.');
                }
                email = emailElem.value || null;

                let phoneElem = document.getElementById('signup-phone');
                let iti = window.intlTelInputGlobals.getInstance(phoneElem);
                if (!phoneElem || phoneElem.value.trim() === '' || !iti.isValidNumber() )
                {
                    error = true;
                    let validationElem = document.getElementById('signup-phone-validation');
                    validationElem.style.display = 'inline-block';
                    console.warn('Provide valid merchant phone please.');
                }
                //console.debug('Found phone number: ', iti.getNumber(intlTelInputUtils.numberFormat.E164) );
                phone = iti.getNumber(intlTelInputUtils.numberFormat.E164);

                let currencyElem = document.getElementById('preferred-currency');
                if (!currencyElem || currencyElem.value === '')
                {
                    error = true;
                    console.warn('Select a settlement local_currency please.');
                }
                local_currency = currencyElem.value || null;

                let countryElem = document.getElementById('signup-country');
                if (!countryElem || countryElem.value === '')
                {
                    error = true;
                    console.warn('Select a country please.');
                }
                country = countryElem.value || null;

                let conscentElem = document.getElementById('signup-conscent');

                if (!conscentElem.checked)
                {
                    error = true;
                    let validationElem = document.getElementById('signup-conscent-validation');
                    validationElem.style.display = 'inline-block';
                    console.warn('Provide give conscent to our terms & conditions please.');
                }
                // } else {
                //     error = false;
                // }

                if (error) return;

                let params = new URLSearchParams(window.location.search);
                let partnerId = params.get('partnerid');

                publickey = null;
                if(!error) {
                    createMerchantAccount(name, email, phone, local_currency, country, partnerId, publickey
                    ,first_name, last_name, industry, legal_entity_type, annual_turnover, website_url
                    ,createMerchantAccountCallback
                );
                }

            }

            function createMerchantAccount(name, email, phone, local_currency, country, partnerid, publickey,first_name, last_name, industry, legal_entity_type, annual_turnover, website_url, callback) {

                let industry_val = jQuery('#industry-name').chosen().val();

                console.debug('name: ', name);
                console.debug('email: ', email);
                console.debug('phone: ', phone);
                console.debug('local_currency: ', local_currency);

                console.debug('Country: ', country);
                console.debug('partnerid: ', partnerid);
                console.debug('pubkey: ', publickey);

                console.log("firstname: ", first_name);
                console.log("last_name: ", last_name);
                console.log("industry: ", industry_val);
                console.log("legal_entity_type: ", legal_entity_type);
                console.log("annual_turnover: ", annual_turnover);
                console.log("website_url: ", website_url);

                let params = JSON.stringify({



                    name,
                    'first_name': first_name,
                    'last_name': last_name,
                    'website_url': website_url,
                    'legal_entity_type': legal_entity_type,
                    'annual_turnover': annual_turnover,
                    'industry': industry_val,
                    email,
                    phone,
                    local_currency: local_currency.toUpperCase(),
                    country: country,
                    master_pubkey: publickey,
                    source: 'triplea-website',
                    direct: true,
                    pid: partnerid
                });
                //console.log(params);
                let url    = "https://api.triple-a.io/api/v1/merchant";

                httpRequest(url, callback, params);
            }

            function createMerchantAccountCallback(response) {
                //console.log('createMerchantAccountCallback starting');
                if (!response) {
                    console.warn('A problem occurred trying to create your account');
                    // error, display message
                    return;
                }

                let confirmationElem = document.getElementById('signup-confirmation');
                confirmationElem.style.display = 'inline-block';

                let submitElem = document.getElementById('signup-submit');
                submitElem.setAttribute('disabled','disabled');
                submitElem.style.opacity = '0.5';

                setTimeout(function(){
                    let emailElem = document.getElementById('signup-email');
                    // similar behavior as clicking on a link
                    window.location.href = "https://dashboard.triple-a.io/login?signup_email=" + emailElem.value;
                }, 2000);
            }

            /**  triplea-merchant-api.js  **/

            function httpRequest(url, callback, params, method = "POST")
            {
                document.getElementById("signup-error").style.display = "none";
                let http = new XMLHttpRequest();
                http.open(method, url, true);
                // Send the proper header information along with the request
                http.setRequestHeader("Content-type", "application/json");
                // http.setRequestHeader("Content-length", params.length);
                //http.setRequestHeader("Connection", "close");
                http.onreadystatechange = function () {
                    // Call a function when the state changes.
                    if (http.readyState == 4 && http.status == 200)
                    {
                        //console.log('http response received');
                        callback(http.response);
                        //alert(http.responseText);
                    }
                    else
                    {
                        if(http.status == 400){
                            document.getElementById("signup-error").innerText = "An account with this email address already exists. Please log in or reset your password.";
                            document.getElementById("signup-error").style.display = "block";
                        }
                        else{
                            document.getElementById("signup-error").style.display = "block";

                        }
                        //console.warn('Error contacting TripleA API.', http.readyState, http.status, http);
                        //callback(null);
                        //document.getElementById("signup-error").style.display = "block";
                        //   let res = JSON.parse(http.responseText);
                        //   //document.getElementById("signup-error").innerText = res.message;
                        //   //document.getElementById("signup-error").innerText = res.message;
                    }
                }
                http.send(params);
            }
            document.getElementById("signup-name").onclick  = hide_signup_error;
            document.getElementById("signup-email").onclick  = hide_signup_error;
            document.getElementById("signup-phone").onclick  = hide_signup_error;
            document.getElementById("preferred-currency").onclick  = hide_signup_error;
            document.getElementById("signup-country").onclick  = hide_signup_error;
            document.getElementById("signup-conscent").onclick  = hide_signup_error;
            document.getElementById("first-name").onclick  = hide_signup_error;
            document.getElementById("last-name").onclick  = hide_signup_error;
            document.getElementById("industry-name").onclick  = hide_signup_error;
            document.getElementById("turnover-name").onclick  = hide_signup_error;
            document.getElementById("signup-conscent").onclick  = hide_signup_error;
            document.getElementById("website-name").onclick  = hide_signup_error;
            //document.getElementById("signup-submit").onclick  = hide_signup_error;

            function hide_signup_error(){
                if(document.getElementById("signup-error").style.display == "block"){
                    // hide if any input clicked on
                    //console.log("hide_this_error");
                    document.getElementById("signup-error").style.display = "none";
                    }
                else{
                    //console.log("show_this_error");

                }

            }
        </script>
        <?php
        return ob_get_clean();

    }
    add_shortcode( 'triplea_signup_form', 'triplea_signup_form_func' );
