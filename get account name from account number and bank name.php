<?php

$request = [

    'account_number' => "2115376418",
    'account_bank' => "033"
];

$curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.flutterwave.com/v3/accounts/resolve',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => json_encode($request),
    CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer SECRET KEY',
        'Content-Type: application/json'
    ),
    ));

   echo $response = curl_exec($curl);

    curl_close($curl);
    
    $res = json_decode($response);
    echo $res->data->account_name;
   
?>
