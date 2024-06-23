<?php
$latitude1 = 40.770623;
$latitude2 = 40.758224;
$longitude1 = -73.964367;
$longitude2 = -73.917404;
$distance = haversineDistance($latitude1, $latitude2, $longitude1, $longitude2);

echo "<pre>";
print_r($distance);
echo "</pre>";


/**
 * Output:
 * 
 * Array
 *(
 *  [distanceKms] => 4.188590914498
 *  [distanceMiles] => 2.6026697209648
 *  [distanceMeters] => 4188.590914498
 *  [distanceYards] => 4580.6987253915
 *)
 */

$distance_in_miles = $distance['distanceMiles']; 

echo "<pre>";
echo "$distance_in_miles miles";
echo "</pre>";

/**
 * Output: 
 * 2.6026697209648 miles
 */

$distance_in_kilometers = $distance['distanceKms'];

echo "<pre>";
echo "$distance_in_kilometers kilometers";
echo "</pre>";

/**
 * Output: 
 * 4.188590914498 kilometers
 */