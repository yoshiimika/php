<?php

function searchCityTime($city_name)
{
require('config/cities.php');
foreach ($cities as $city) {
    if ($city_name === $city['name']) {
    $date_time = new DateTime('', new DateTimeZone($city['time_zone']));
    $time = $date_time->format('H:i');
    $city['time'] = $time;
    return $city;
    }
    }
}