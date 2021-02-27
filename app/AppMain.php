<?php

namespace App;

class AppMain
{
    private $storeId;
    private $apiAccessToken;
    private $userLang;

    public function __construct($storeId, $apiAccessToken, $userLang)
    {
        $this->storeId = $storeId;
        $this->apiAccessToken = $apiAccessToken;
        $this->userLang = $userLang;
    }

    /*
     * Here goes your application business logic
     */
    public function doSomething() {
      //...
        $url = 'https://app.ecwid.com/api/v3/'.$this->storeId.'/orders/C8QNV?token='.$this->apiAccessToken;
      //$url = 'https://app.ecwid.com/api/v3/'.$this->storeId.'/orders?paymentStatus=INCOMPLETE&token='.$this->apiAccessToken;

        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json;charset=utf-8"
          ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
      return $response;
    }
}