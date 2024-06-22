<?php
$latitude1 = 40.770623;
$latitude2 = 40.758224;
$longitude1 = -73.964367;
$longitude2 = -73.917404;
$distance = haversineDistance($latitude1, $latitude2, $longitude1, $longitude2);
echo "$distance";

/**
 * Output: 
 * 4.188590914498
 */