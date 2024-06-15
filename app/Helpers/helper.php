<?php

function cURLPost($url, $params, $headers = []) {
    // $postData = '';
    // //create name value pairs separated by &
    // foreach($params as $k => $v) {
    //     $postData .= $k . '='.$v.'&';
    // }
    // rtrim($postData, '&');

    $defaultHeaders = [
        "Content-Type: application/json",
        "Accept: application/json",
    ];
    $headers = array_merge($defaultHeaders, $headers);

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
    curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

    if(count($headers) > 0) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    }

    $output = curl_exec($ch);

    curl_close($ch);
    return $output;
}