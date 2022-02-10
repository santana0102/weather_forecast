<?php

    $city = "imbituba";
    $api_key = "fd2b411102032416d92ceac21b00d7ef";
    $url = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$api_key"
    
    $api_data = json_decode(file_get_contents($url));

    echo $api_data;



?>