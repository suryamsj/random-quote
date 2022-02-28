<?php

function getQuote()
{
    $url = 'https://api.akuari.my.id/randomtext/sindiran';
    $data = file_get_contents($url);
    $json = json_decode($data, true);
    return $json;
}
