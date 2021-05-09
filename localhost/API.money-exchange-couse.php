<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

//                              Курс валют


// set API Endpoint and API key
$endpoint = 'latest';
$access_key = '753c5c5521820caf6d7965ae0e925f3b';

// Initialize CURL:
$ch = curl_init('http://api.exchangeratesapi.io/v1/'.$endpoint.'?access_key='.$access_key.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$exchangeRates = json_decode($json, true);

// Access the exchange rate values, e.g. GBP:
echo $exchangeRates['rates']['GBP'].'<hr>';

echo '<pre>';
print_r( $exchangeRates['rates']['RUB'].' '. $exchangeRates['rates']['USD']); // вывожу рубль и доллар
echo '</pre>';

