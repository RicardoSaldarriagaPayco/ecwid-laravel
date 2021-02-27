<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="height=device-height, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <script src="https://d35z3p2poghz10.cloudfront.net/ecwid-sdk/js/1.2.5/ecwid-app.js"></script>
    <link rel="stylesheet" href="https://d35z3p2poghz10.cloudfront.net/ecwid-sdk/css/1.3.7/ecwid-app-ui.css" />

    <style>
        /* Custom styles to remove a-card box shadow and border */
        .a-card {
            border: none;
            border-radius: 0px;
            box-shadow: none;
        }
    </style>

</head>

<body>
    <div>
        <div>
            <div class="named-area">
                <div class="named-area__body">
                    <!-- Check input element for example of how to set data attributes to save to storage later -->
                    <div class="a-card a-card--normal">
                        <div class="a-card__paddings">
                            <div class="payment-method">
                                <div class="payment-method__header">
                                    <div class="payment-method__logo">
                                        <img src="https://369969691f476073508a-60bf0867add971908d4f26a64519c2aa.ssl.cf5.rackcdn.com/logos/logo_epayco_400px.png" width="336" height="144" alt="">
                                    </div>
                                </div>
                                <div class="payment-method__title">Accept payments on your website</div>
                                <div class="payment-method__content">
                                    <div class="form-area">
                                        <div class="form-area__content">
                                            <p>
											ePayco is a company that specializes in processing online payments allowing people or businesses to make payments, collections and recharges in an easy and secure way </p>
                                            <p>Your customers' data is completely safe and with a system of anti-fraud options
                                			to suit your business.
                                            </p>
                                        </div>

                                        <div class="columned tap-settings">
                                            <div class="columned__item">

                                                <div class="form-area__content">
                                                    <div class="fieldsets-batch">
      <div class="form-area__title">Configure Account</div>

                                                        <div class="fieldset fieldset-itransact">
                                                            <div class="fieldset__field-wrapper">
                                                                <div class="field field--medium">
                                                                    <span class="fieldset__svg-icon"></span>
                                                                    <label class="field__label">P_CUST_ID_CLIENTE</label>

                                                            
                                                                    <input data-name="p_cust_id_cliente"
                                                                        data-visibility="private" type="text"
                                                                        class="field__input">

                                                                    <div class="field__placeholder">P_CUST_ID_CLIENTE
                                                                    </div>
                                                                    <span class="field-state--success"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="26px" height="26px"
                                                                            viewBox="0 0 26 26" focusable="false">
                                                                            <path
                                                                                d="M5 12l5.02 4.9L21.15 4c.65-.66 1.71-.66 2.36 0 .65.67.65 1.74 0 2.4l-12.3 14.1c-.33.33-.76.5-1.18.5-.43 0-.86-.17-1.18-.5l-6.21-6.1c-.65-.66-.65-1.74 0-2.41.65-.65 1.71-.65 2.36.01z">
                                                                            </path>
                                                                        </svg></span><span
                                                                        class="field-state--close"><svg version="1.1"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            x="0px" y="0px" viewBox="0 0 16 16"
                                                                            enable-background="new 0 0 16 16"
                                                                            xml:space="preserve" focusable="false">
                                                                            <path
                                                                                d="M15.6,15.5c-0.53,0.53-1.38,0.53-1.91,0L8.05,9.87L2.31,15.6c-0.53,0.53-1.38,0.53-1.91,0 c-0.53-0.53-0.53-1.38,0-1.9l5.65-5.64L0.4,2.4c-0.53-0.53-0.53-1.38,0-1.91c0.53-0.53,1.38-0.53,1.91,0l5.64,5.63l5.74-5.73 c0.53-0.53,1.38-0.53,1.91,0c0.53,0.53,0.53,1.38,0,1.91L9.94,7.94l5.66,5.65C16.12,14.12,16.12,14.97,15.6,15.5z">
                                                                            </path>
                                                                        </svg></span>
                                                                </div>
                                                                <div class="fieldset__field-prefix"></div>
                                                                <div class="fieldset__field-suffix"></div>

                                                            </div>
                                                            <div class="field__error" aria-hidden="true"
                                                                style="display: none;"></div>

                                                            <div class="fieldset__note" aria-hidden="true"
                                                                style="display: none;"></div>
                                                        </div>
                                                        <div class="fieldset fieldset-itransact">
                                                            <div class="fieldset__field-wrapper">
                                                                <div class="field field--medium">
                                                                    <span class="fieldset__svg-icon"></span>
                                                                    <label class="field__label">PUBLIC_KEY</label>

                                                                    <input data-name="public_key"
                                                                        data-visibility="private" type="password"
                                                                        class="field__input">

                                                                    <div class="field__placeholder">PUBLIC_KEY
                                                                    </div>
                                                                    <span class="field-state--success"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="26px" height="26px"
                                                                            viewBox="0 0 26 26" focusable="false">
                                                                            <path
                                                                                d="M5 12l5.02 4.9L21.15 4c.65-.66 1.71-.66 2.36 0 .65.67.65 1.74 0 2.4l-12.3 14.1c-.33.33-.76.5-1.18.5-.43 0-.86-.17-1.18-.5l-6.21-6.1c-.65-.66-.65-1.74 0-2.41.65-.65 1.71-.65 2.36.01z">
                                                                            </path>
                                                                        </svg></span><span
                                                                        class="field-state--close"><svg version="1.1"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            x="0px" y="0px" viewBox="0 0 16 16"
                                                                            enable-background="new 0 0 16 16"
                                                                            xml:space="preserve" focusable="false">
                                                                            <path
                                                                                d="M15.6,15.5c-0.53,0.53-1.38,0.53-1.91,0L8.05,9.87L2.31,15.6c-0.53,0.53-1.38,0.53-1.91,0 c-0.53-0.53-0.53-1.38,0-1.9l5.65-5.64L0.4,2.4c-0.53-0.53-0.53-1.38,0-1.91c0.53-0.53,1.38-0.53,1.91,0l5.64,5.63l5.74-5.73 c0.53-0.53,1.38-0.53,1.91,0c0.53,0.53,0.53,1.38,0,1.91L9.94,7.94l5.66,5.65C16.12,14.12,16.12,14.97,15.6,15.5z">
                                                                            </path>
                                                                        </svg></span>
                                                                </div>
                                                                <div class="fieldset__field-prefix"></div>
                                                                <div class="fieldset__field-suffix"></div>

                                                            </div>
                                                            <div class="field__error" aria-hidden="true"
                                                                style="display: none;"></div>

                                                            <div class="fieldset__note" aria-hidden="true"
                                                                style="display: none;"></div>
                                                        </div>
                                                        <div class="fieldset fieldset-itransact">
                                                            <div class="fieldset__field-wrapper">
                                                                <div class="field field--medium">
                                                                    <span class="fieldset__svg-icon"></span>
                                                                    <label class="field__label">P_KEY</label>

                                                                    <input data-name="p_key"
                                                                        data-visibility="private" type="password"
                                                                        class="field__input">

                                                                    <div class="field__placeholder">P_KEY
                                                                    </div>
                                                                    <span class="field-state--success"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="26px" height="26px"
                                                                            viewBox="0 0 26 26" focusable="false">
                                                                            <path
                                                                                d="M5 12l5.02 4.9L21.15 4c.65-.66 1.71-.66 2.36 0 .65.67.65 1.74 0 2.4l-12.3 14.1c-.33.33-.76.5-1.18.5-.43 0-.86-.17-1.18-.5l-6.21-6.1c-.65-.66-.65-1.74 0-2.41.65-.65 1.71-.65 2.36.01z">
                                                                            </path>
                                                                        </svg></span><span
                                                                        class="field-state--close"><svg version="1.1"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            x="0px" y="0px" viewBox="0 0 16 16"
                                                                            enable-background="new 0 0 16 16"
                                                                            xml:space="preserve" focusable="false">
                                                                            <path
                                                                                d="M15.6,15.5c-0.53,0.53-1.38,0.53-1.91,0L8.05,9.87L2.31,15.6c-0.53,0.53-1.38,0.53-1.91,0 c-0.53-0.53-0.53-1.38,0-1.9l5.65-5.64L0.4,2.4c-0.53-0.53-0.53-1.38,0-1.91c0.53-0.53,1.38-0.53,1.91,0l5.64,5.63l5.74-5.73 c0.53-0.53,1.38-0.53,1.91,0c0.53,0.53,0.53,1.38,0,1.91L9.94,7.94l5.66,5.65C16.12,14.12,16.12,14.97,15.6,15.5z">
                                                                            </path>
                                                                        </svg></span>
                                                                </div>
                                                                <div class="fieldset__field-prefix"></div>
                                                                <div class="fieldset__field-suffix"></div>

                                                            </div>
                                                            <div class="field__error" aria-hidden="true"
                                                                style="display: none;"></div>

                                                            <div class="fieldset__note" aria-hidden="true"
                                                                style="display: none;"></div>
                                                        </div>
                                                       <!-- <div class="fieldset">
                                                            <div class="fieldset__field-wrapper">
                                                                <div class="field field--medium">
                                                                    <span class="fieldset__svg-icon"></span>
                                                                    <label class="field__label">Company name</label>

                                                                    <input data-name="companyName"
                                                                        data-visibility="private" type="text"
                                                                        class="field__input">

                                                                    <div class="field__placeholder">Company name
                                                                    </div>
                                                                    <span class="field-state--success"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="26px" height="26px"
                                                                            viewBox="0 0 26 26" focusable="false">
                                                                            <path
                                                                                d="M5 12l5.02 4.9L21.15 4c.65-.66 1.71-.66 2.36 0 .65.67.65 1.74 0 2.4l-12.3 14.1c-.33.33-.76.5-1.18.5-.43 0-.86-.17-1.18-.5l-6.21-6.1c-.65-.66-.65-1.74 0-2.41.65-.65 1.71-.65 2.36.01z">
                                                                            </path>
                                                                        </svg></span><span
                                                                        class="field-state--close"><svg version="1.1"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            x="0px" y="0px" viewBox="0 0 16 16"
                                                                            enable-background="new 0 0 16 16"
                                                                            xml:space="preserve" focusable="false">
                                                                            <path
                                                                                d="M15.6,15.5c-0.53,0.53-1.38,0.53-1.91,0L8.05,9.87L2.31,15.6c-0.53,0.53-1.38,0.53-1.91,0 c-0.53-0.53-0.53-1.38,0-1.9l5.65-5.64L0.4,2.4c-0.53-0.53-0.53-1.38,0-1.91c0.53-0.53,1.38-0.53,1.91,0l5.64,5.63l5.74-5.73 c0.53-0.53,1.38-0.53,1.91,0c0.53,0.53,0.53,1.38,0,1.91L9.94,7.94l5.66,5.65C16.12,14.12,16.12,14.97,15.6,15.5z">
                                                                            </path>
                                                                        </svg></span>
                                                                </div>
                                                                <div class="fieldset__field-prefix"></div>
                                                                <div class="fieldset__field-suffix"></div>

                                                            </div>
                                                            <div class="field__error" aria-hidden="true"
                                                                style="display: none;"></div>

                                                            <div class="fieldset__note" aria-hidden="true"
                                                                style="display: none;"></div>
                                                        </div>
                                                        <div class="fieldset">
                                                            <div class="fieldset__field-wrapper">
                                                                <div class="field field--medium">
                                                                    <span class="fieldset__svg-icon"></span>
                                                                    <label class="field__label">Order
                                                                        description</label>

                                                                    <input data-name="description"
                                                                        data-visibility="private" type="text"
                                                                        class="field__input">

                                                                    <div class="field__placeholder">Order description
                                                                    </div>
                                                                    <span class="field-state--success"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="26px" height="26px"
                                                                            viewBox="0 0 26 26" focusable="false">
                                                                            <path
                                                                                d="M5 12l5.02 4.9L21.15 4c.65-.66 1.71-.66 2.36 0 .65.67.65 1.74 0 2.4l-12.3 14.1c-.33.33-.76.5-1.18.5-.43 0-.86-.17-1.18-.5l-6.21-6.1c-.65-.66-.65-1.74 0-2.41.65-.65 1.71-.65 2.36.01z">
                                                                            </path>
                                                                        </svg></span><span
                                                                        class="field-state--close"><svg version="1.1"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            x="0px" y="0px" viewBox="0 0 16 16"
                                                                            enable-background="new 0 0 16 16"
                                                                            xml:space="preserve" focusable="false">
                                                                            <path
                                                                                d="M15.6,15.5c-0.53,0.53-1.38,0.53-1.91,0L8.05,9.87L2.31,15.6c-0.53,0.53-1.38,0.53-1.91,0 c-0.53-0.53-0.53-1.38,0-1.9l5.65-5.64L0.4,2.4c-0.53-0.53-0.53-1.38,0-1.91c0.53-0.53,1.38-0.53,1.91,0l5.64,5.63l5.74-5.73 c0.53-0.53,1.38-0.53,1.91,0c0.53,0.53,0.53,1.38,0,1.91L9.94,7.94l5.66,5.65C16.12,14.12,16.12,14.97,15.6,15.5z">
                                                                            </path>
                                                                        </svg></span>
                                                                </div>
                                                                <div class="fieldset__field-prefix"></div>
                                                                <div class="fieldset__field-suffix"></div>

                                                            </div>
                                                            <div class="field__error" aria-hidden="true"
                                                                style="display: none;"></div>

                                                            <div class="fieldset__note" aria-hidden="true"
                                                                style="display: none;"></div>
                                                        </div>
                                                        <div class="fieldset">
                                                            <div class="fieldset__field-wrapper">
                                                                <div class="field field--medium">
                                                                    <span class="fieldset__svg-icon"></span>
                                                                    <label class="field__label">Pay button background
                                                                        color (hexadecimal color)</label>

                                                                    <input data-name="theme" data-visibility="private"
                                                                        type="text" class="field__input">

                                                                    <div class="field__placeholder">Pay button
                                                                        background color (hexadecimal color)
                                                                    </div>
                                                                    <span class="field-state--success"><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="26px" height="26px"
                                                                            viewBox="0 0 26 26" focusable="false">
                                                                            <path
                                                                                d="M5 12l5.02 4.9L21.15 4c.65-.66 1.71-.66 2.36 0 .65.67.65 1.74 0 2.4l-12.3 14.1c-.33.33-.76.5-1.18.5-.43 0-.86-.17-1.18-.5l-6.21-6.1c-.65-.66-.65-1.74 0-2.41.65-.65 1.71-.65 2.36.01z">
                                                                            </path>
                                                                        </svg></span><span
                                                                        class="field-state--close"><svg version="1.1"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            x="0px" y="0px" viewBox="0 0 16 16"
                                                                            enable-background="new 0 0 16 16"
                                                                            xml:space="preserve" focusable="false">
                                                                            <path
                                                                                d="M15.6,15.5c-0.53,0.53-1.38,0.53-1.91,0L8.05,9.87L2.31,15.6c-0.53,0.53-1.38,0.53-1.91,0 c-0.53-0.53-0.53-1.38,0-1.9l5.65-5.64L0.4,2.4c-0.53-0.53-0.53-1.38,0-1.91c0.53-0.53,1.38-0.53,1.91,0l5.64,5.63l5.74-5.73 c0.53-0.53,1.38-0.53,1.91,0c0.53,0.53,0.53,1.38,0,1.91L9.94,7.94l5.66,5.65C16.12,14.12,16.12,14.97,15.6,15.5z">
                                                                            </path>
                                                                        </svg></span>
                                                                </div>
                                                                <div class="fieldset__field-prefix"></div>
                                                                <div class="fieldset__field-suffix"></div>

                                                            </div>
                                                            <div class="field__error" aria-hidden="true"
                                                                style="display: none;"></div>

                                                            <div class="fieldset__note" aria-hidden="true"
                                                                style="display: none;"></div>
                                                        </div>-->
                                                    </div>

                                                </div>

                                                <!-- Advanced settings START-->
                                                <div class="collapsible collapsible--opened">
                                                    <div class="collapsible__header">Advanced settings</div>
                                                    <div class="collapsible__body" style='max-height: 2000vh;'>
           
                                                        <div class="form-area__content">
                                                            <div class="custom-checkbox">
                                                                <label>
                                                                    <input data-name="testMode"
                                                                        data-visibility="private" type="checkbox"
                                                                        checked="true" value="on"
                                                                        class="custom-checkbox__input">
                                                                    <span class="custom-checkbox__label"></span>
                                                                    <span class="custom-checkbox__text">Enable test mode
                                                                        (no charges)</span>
                                                                </label>
                                                                <div class="custom-checkbox__note muted text-small">
                                                                    Place here an instruction how to work in dev/test
                                                                    mode (if available)</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Advanced settings END -->

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://d35z3p2poghz10.cloudfront.net/ecwid-sdk/css/1.3.7/ecwid-app-ui.min.js"></script>
    <script>
        // Initialize the application

EcwidApp.init({
    app_id: "{{ $app_id }}", // use your application namespace
    autoloadedflag: true,
    autoheight: true
});

var storeData = EcwidApp.getPayload();

var storeId = storeData.store_id;
var accessToken = storeData.access_token;
var language = storeData.lang;
var viewMode = storeData.view_mode;

if (storeData.public_token !== undefined) {
    var publicToken = storeData.public_token;
}

if (storeData.app_state !== undefined) {
    var appState = storeData.app_state;
}

function showEditPage(elementClass) {
    document.querySelector('.main').style.display = 'none';
    document.querySelector(elementClass).style.display = 'block';
    document.querySelector('.content-control-menu-nav').style.display = 'flex';
}


// Function to retutn back to main app page after editing product label page

function goBack() {
    document.querySelector('.content-control-menu-nav').style.display = 'none';
    document.querySelector('.main').style.display = 'block';

    // hide all separate pages for editing
    for (i = 0; i < document.querySelectorAll('.separate-editing-page').length; i++) {
        document.querySelectorAll('.separate-editing-page')[i].style.display = 'none';
    }
}


// Reads values from HTML page and sends them to application config
// To fill values successfully, the input, select or textarea elements on a page must have 'data-name' and 'data-visibility' attributes set. See appProto.html for examples

function readValuesFromPage() {

    var applicationConfig = {
        public: {},
        private: {}
    }

    var allInputs = document.querySelectorAll('input, select, textarea');

    for (i = 0; i < allInputs.length; i++) {
        var fieldVisibility = allInputs[i].dataset.visibility;

        if (fieldVisibility !== undefined) {
            if (allInputs[i].tagName == "INPUT") {

                if (allInputs[i].type == 'checkbox' || allInputs[i].type == 'radio') {
                    applicationConfig[fieldVisibility][allInputs[i].dataset.name] = String(allInputs[i].checked);
                }
                if (allInputs[i].type == 'password' || allInputs[i].type == 'text' || allInputs[i].type == 'number' || allInputs[i].type == 'date') {
                    applicationConfig[fieldVisibility][allInputs[i].dataset.name] = allInputs[i].value;
                }
            }
            if (allInputs[i].tagName == "SELECT" || allInputs[i].tagName == "TEXTAREA") {
                applicationConfig[fieldVisibility][allInputs[i].dataset.name] = allInputs[i].value;
            }
        }
    }

    applicationConfig.public = JSON.stringify(applicationConfig.public);

    return applicationConfig;
}

// Reads values from provided config and sets them for inputs on the page. 
// To fill values successfully, the input, select or textarea elements must have 'data-name' and 'data-visibility' attributes set. See appProto.html for examples

function setValuesForPage(applicationConfig) {

    var applicationConfigTemp = {
        public: {},
        private: {}
    };

    // for cases when we get existing users' data

    if (applicationConfig.constructor === Array) {
        for (i = 0; i < applicationConfig.length; i++) {
            if (applicationConfig[i].key !== 'public') {
                applicationConfigTemp.private[applicationConfig[i].key] = applicationConfig[i].value;
            } else {
                applicationConfigTemp[applicationConfig[i].key] = applicationConfig[i].value;
            }
        }
        applicationConfig = applicationConfigTemp;
    }

    applicationConfig.public = JSON.parse(applicationConfig.public);
    var allInputs = document.querySelectorAll('input, select, textarea');

    // Set values from config for input, select, textarea elements

    for (i = 0; i < allInputs.length; i++) {
        var fieldVisibility = allInputs[i].dataset.visibility;

        if (fieldVisibility !== undefined && applicationConfig[fieldVisibility][allInputs[i].dataset.name] !== undefined) {
            if (allInputs[i].tagName == "INPUT") {

                if (allInputs[i].type == 'checkbox' || allInputs[i].type == 'radio') {
                    allInputs[i].checked = (applicationConfig[fieldVisibility][allInputs[i].dataset.name] == "true");
                    checkFieldChange(allInputs[i]);
                }
                if (allInputs[i].type == 'password' || allInputs[i].type == 'text' || allInputs[i].type == 'number' || allInputs[i].type == 'date') {
                    allInputs[i].value = applicationConfig[fieldVisibility][allInputs[i].dataset.name];
                    checkFieldChange(allInputs[i]);
                }
            }
            if (allInputs[i].tagName == "SELECT" || allInputs[i].tagName == "TEXTAREA") {
                allInputs[i].value = applicationConfig[fieldVisibility][allInputs[i].dataset.name];
                checkFieldChange(allInputs[i]);
            }
        }
    }
}

// Default settings for new accounts

var initialConfig = {
    private: {
        iTransactUsername: "",
        iTransactAPIKey: "",
        description: "Online order in Store Name",
        theme: "#CF4520",
        companyName: "Your store name",
        testMode: "true",
        installed: "yes"
    },
    public: {


    }
};

initialConfig.public = JSON.stringify(initialConfig.public);

// Executes when we have a new user install the app. It creates and sets the default data using Ecwid JS SDK and Application storage

function createUserData() {

    // Saves data for application storage 
    EcwidApp.setAppStorage(initialConfig.private, function (value) {
        console.log('Initial private user preferences saved!');
    });

    // Saves data for public app config
    EcwidApp.setAppPublicConfig(initialConfig.public, function (value) {
        console.log('Initial public user preferences saved!');
    });

    // Function to prepopulate values of select, input and textarea elements based on default settings for new accounts
    setValuesForPage(initialConfig);
}


// Executes if we have a user who logs in to the app not the first time. We load their preferences from Application storage with Ecwid JS SDK and display them in the app interface

function getUserData() {

    // Retrieve all keys and values from application storage, including public app config. Set the values for select, input and textarea elements on a page in a callback

    EcwidApp.getAppStorage(function (allValues) {
        setValuesForPage(allValues);
    });

}

// Executes when we need to save data. Gets all elements' values and saves them to Application storage and public app config via Ecwid JS SDK

function saveUserData() {

    var saveData = readValuesFromPage();

    EcwidApp.setAppStorage(saveData.private, function (savedData) {
        console.log('Private preferences saved!');
    });

    EcwidApp.setAppPublicConfig(saveData.public, function (savedData) {
        console.log('Public preferences saved!');
    })

}

function resetUserData(initialConfig) {
    setValuesForPage(initialConfig);
    saveUserData();
}


// Main app function to determine if the user is new or just logs into the app

EcwidApp.getAppStorage('installed', function (value) {
    if (value !== null) {
        getUserData();
    }
    else {
        createUserData();
    }
})

    </script>
    <script>
        // Autosave feature for fields. Complimentary JS for the one from SDK above
        (function initFieldset() {
            var elms = document.querySelectorAll('.field__input, .field__select, .field__textarea, .radio, .custom-checkbox__input');
            for (var i = 0; i < elms.length; i++) {
                elms[i].addEventListener('blur', function (e) {
                    checkFieldChange(this);
                    if (this.classList.contains('field__input') || this.classList.contains('field__textarea')) {
                        saveUserData();
                    }
                }, false);
                elms[i].addEventListener('change', function () {
                    if (this.value) {
                        saveUserData();
                    }
                    else {
                        saveUserData();
                    }
                    if (this.id == "mode_selector") {

                        if (this.value == "IBX") {
                            var elms = document.querySelectorAll('.fieldset-ibx');
                            for (var i = 0; i < elms.length; i++) {
                                elms[i].style.display = "block";
                            }
                            var elms = document.querySelectorAll('.fieldset-itransact');
                            for (var i = 0; i < elms.length; i++) {
                                elms[i].style.display = "none";
                            }
                        } else {
                            var elms = document.querySelectorAll('.fieldset-itransact');
                            for (var i = 0; i < elms.length; i++) {
                                elms[i].style.display = "block";
                            }
                            var elms = document.querySelectorAll('.fieldset-ibx');
                            for (var i = 0; i < elms.length; i++) {
                                elms[i].style.display = "none";
                            }

                        }

                    }

                }, false);
                elms[i].addEventListener('click', function () {
                    if (this.value) {
                        saveUserData();
                    }
                    else {
                        saveUserData();
                    }
                }, false);
            }
            setTimeout(function () { document.querySelector("#mode_selector").dispatchEvent(new Event("change")) }, 1500)
        }
        )();
    </script>
</body>

</html>