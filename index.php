<?php
    $IPUrl = "http://ip-api.com/json/"; //API url

    $ch = curl_init(); //Initialising curl connection

    curl_setopt($ch,CURLOPT_URL,$IPUrl); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
    $resp = curl_exec($ch);

    curl_close($ch); //Closing curl connection

    $resp = json_decode($resp);
    
    $city = $resp->city;

    echo 'You are in the city of '. $city
?>