<?php

//API Url
$url = 'http://localhost:8000/api/tutorials';

//Initiate cURL.
$ch = curl_init($url);

//The JSON data.
$jsonData = array(
    'id' => '03',
    'title' => 'Mais um Livro novo',
    'description' => 'Enviando json via POST',
    'published' => 'true'
);

//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);

//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

//Execute the request
$result = curl_exec($ch);