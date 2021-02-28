<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\EcwidApi\EcwidPayload;
use App\AppMain;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function home()
    {
        return view(
            'payco.home', 
            [
                'app_id' => \Config::get('app.ecwid_app_id')
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('payment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Decrypt embedded app payload
        $ecwidPayload = new EcwidPayload();
        $payloadDecrypted = $ecwidPayload->getEcwidPayload($request->input('payload'));
        // Get the payload data
         // Account info from merchant app settings in app interface in Ecwid CP
        $p_cust_id_cliente = $payloadDecrypted['merchantAppSettings']['p_cust_id_cliente'];
        $public_key = $payloadDecrypted['merchantAppSettings']['public_key'];
        $p_key = $payloadDecrypted['merchantAppSettings']['p_key'];

        // OPTIONAL: Split name field into two fields: first name and last name
        $fullName = explode(" ", $payloadDecrypted["cart"]["order"]["billingPerson"]["name"]);
        $firstName = $fullName[0]; $lastName = $fullName[1];

        // Encode access token and prepare calltack URL template
        $ciphertext_raw = openssl_encrypt($payloadDecrypted['token'],$cipher, $client_secret,$options=0,$iv,$tag);
        $callbackPayload = base64_encode( $ciphertext_raw);
        $callbackUrl = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."?storeId=".$payloadDecrypted['storeId']."&orderNumber=".$payloadDecrypted['cart']['order']['orderNumber']."&callbackPayload=".$callbackPayload;
        // Request parameters to pass into payment gateway
        $x_amount= $payloadDecrypted["cart"]["order"]["total"];
        $x_currency = $payloadDecrypted["cart"]["currency"];
        $x_description ="Order number".$payloadDecrypted['cart']['order']['referenceTransactionId'];
        $ref_payco = $payloadDecrypted['cart']['order']['referenceTransactionId'];
        $x_county = $payloadDecrypted["cart"]["order"]["shippingPerson"]["countryCode"];
        $x_email_billing = $payloadDecrypted["cart"]["order"]["email"];
        $x_customer_billing_address1 = str_replace(PHP_EOL, ' ' , $payloadDecrypted["cart"]["order"]["billingPerson"]["street"]);
        $phone_billing = $payloadDecrypted["cart"]["order"]["billingPerson"]["phone"];
        $payco_test = $payloadDecrypted['merchantAppSettings']['testMode'];
        $url_response_acepted = $callbackUrl."&status=PAID";
        $url_response_rejected = $callbackUrl."&status=CANCELLED";
        $url_response_pending = $callbackUrl."&status=PENDING";
          if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
        $uri = 'https://';
        } else {
        $uri = 'http://';
        }
        $uri .= $_SERVER['HTTP_HOST'];

        $storeId = $payloadDecrypted['store_id'];
        $apiAccessToken = $payloadDecrypted['access_token'];
        $userLang = $payloadDecrypted['lang'];
        // Perform app business logic
        $appMain = new AppMain($storeId, $apiAccessToken, $userLang);
        //$payloadDecryptedData = $appMain->doSomething();

        // Display the app home screen
        // return view(
        //     'payco.response', 
        //     [
        //         'public_key' => $public_key,
        //         'x_amount' => $x_amount,
        //         'x_description' => $x_description,
        //         'x_currency' => $x_currency,
        //         'ref_payco' => $ref_payco,
        //         'x_county' => $x_county,
        //         'payco_test' => $payco_test,
        //         'url_response_acepted' => $url_response_acepted,
        //         'url_response_rejected' => $url_response_rejected,
        //         'url_response_pending' => $url_response_pending,
        //         'uri2' => $uri2,
        //         'x_email_billing' => $x_email_billing,
        //         'name_billing' => $name_billing,
        //         'x_customer_billing_address1' => $x_customer_billing_address1,
        //         'phone_billing' => $phone_billing,
        //         'extra2' => $extra2,
        //         'extra3' => $extra3,
        //         'extra4' => $extra4,
        //         'appNamespace' => \Config::get('app.ecwid_app_id')
        //     ]
        // );
        return view(
            'payment.response', 
            [
                'public_key' => 'c84ad754c728bfb10af2c1c3d1594106',
                'x_amount' => '10000',
                'x_description' => 'Ecwid-laravel-epayco',
                'x_currency' => 'cop',
                'ref_payco' => 'acl123op',
                'x_county' => 'co',
                'payco_test' => 'true',
                'url_response_acepted' => 'https://dashboard.epayco.co/acepted',
                'url_response_rejected' => 'https://dashboard.epayco.co/rejected',
                'url_response_pending' => 'https://dashboard.epayco.co/pending',
                'uri2' => 'uri2',
                'x_email_billing' => $request['email'],
                'name_billing' => $request['name'],
                'x_customer_billing_address1' => '',
                'phone_billing' => '',
                'extra2' => 'ecwid-laravel',
                'extra3' => '',
                'extra4' => '',
                'appNamespace' => \Config::get('app.ecwid_app_id')
            ]
        );
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
