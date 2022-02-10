<?php

$city = filter_input(INPUT_POST, "city", FILTER_SANITIZE_SPECIAL_CHARS);
$api_key = "fd2b411102032416d92ceac21b00d7ef";
$curl = curl_init();

curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.openweathermap.org/data/2.5/weather?q={$city}&appid=$api_key",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
        "cache-control: no-cache"
    ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$response = json_decode($response, true);

$temperature = ($response['main']['temp']) - 273.15;
$forecasts = ($response['weather'][0]['description']);
$humidity = ($response['main']['humidity']);
$wind_speed = ($respense['wind']['speed']);



