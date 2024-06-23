<?php

const EARTH_RADIUS = 6371;
const KM_MILES = 0.62137119;
const KM_METERS = 1000;
const KM_YARDS = 1093.6132983377;

/**
 * Calculate the distance between two locations, given the latitude and longitude of both locations, and 
 * returns the distance in kilometers
 * 
 * @param float $lat1  latitude value of location 1 in degrees
 * @param float $lat2  latitude value of location 2 in degrees
 * @param float $lng1  longitude value of location 1 in degrees
 * @param float $lng2  longitude value of location 2 in degrees
 * 
 * @return array distance in Kilometers, miles, meters, yards
 */

function haversineDistance(float $lat1, float $lat2, float $lng1, float $lng2) : array
{
    $distance = 2* EARTH_RADIUS *asin(sqrt((1-cos(deg2rad($lat2-$lat1))+cos(deg2rad($lat1))*cos(deg2rad($lat2))*(1-cos(deg2rad($lng2-$lng1))))/2));

    $distance_kms = $distance;
    $distance_miles = $distance_kms* KM_MILES;
    $distance_meters = $distance_kms*KM_METERS;
    $distance_yards = $distance_kms*KM_YARDS;

    //$distance_units = compact('distance_kms','distance_miles','distance_meters','distance_yards');

    $distance_units = [
        'distanceKms'=> $distance_kms,
        'distanceMiles'=> $distance_miles,
        'distanceMeters'=> $distance_meters,
        'distanceYards'=> $distance_yards
    ];
    return $distance_units;
}



