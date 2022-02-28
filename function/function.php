<?php

function getQuote($link)
{
    $url = $link;
    $data = file_get_contents($url);
    $json = json_decode($data, true);
    return $json;
}
