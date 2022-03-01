<?php

// function getQuote($link)
// {
//     $url = $link;
//     $data = file_get_contents($url);
//     $json = json_decode($data, true);
//     return $json;
// }

// CURL function for API call to get quote with try catch
function getQuote($link)
{
    $url = $link;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    $result = curl_exec($ch);
    curl_close($ch);
    $json = json_decode($result, true);
    return $json;
}
