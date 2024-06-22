<?php

const EARTH_RADIUS = 6371;

/**
 * Calculate the distance between two locations, given the latitude and longitude of both locations, and 
 * returns the distance in kilometers
 * 
 * @param float $lat1  latitude value of location 1 in degrees
 * @param float $lat2  latitude value of location 2 in degrees
 * @param float $lng1  longitude value of location 1 in degrees
 * @param float $lng2  longitude value of location 2 in degrees
 * 
 * @return float distance in Kilometers
 */

function haversineDistance(float $lat1, float $lat2, float $lng1, float $lng2) : float
{
    $distance = 2* EARTH_RADIUS *asin(sqrt((1-cos(deg2rad($lat2-$lat1))+cos(deg2rad($lat1))*cos(deg2rad($lat2))*(1-cos(deg2rad($lng2-$lng1))))/2));
    return $distance;
}



