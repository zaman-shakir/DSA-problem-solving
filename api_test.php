<?php

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://api.triple-a.io/api/v2/oauth/token",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "client_id=oacid-cltx5joew01stb2is3l9ofnjk&client_secret=90d268dcaf4f45d687f47fb3483daab7f5bb9c79b305abc38b655e18a108db5e&grant_type=client_credentials",
    CURLOPT_HTTPHEADER => [
        "Accept: application/json",
        "Authorization: Bearer 123",
        "Content-Type: application/x-www-form-urlencoded"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
