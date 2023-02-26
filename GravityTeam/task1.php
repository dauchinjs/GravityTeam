<?php //45min

$startingLat = 0;
$startingLon = 0;

$distance = 1000;
$radius = 6371;

$endingLat = rad2deg(asin(sin(deg2rad($startingLat)) * cos($distance / $radius) + cos(deg2rad($startingLat)) * sin($distance / $radius) * cos(deg2rad(90))));
$endingLon = rad2deg(deg2rad($startingLon) + atan2(sin(deg2rad(90)) * sin($distance / 6371) * cos(deg2rad($startingLat)), cos($distance / $radius) - sin(deg2rad($startingLat)) * sin(deg2rad($endingLat))));

$distance = $radius * acos(sin(deg2rad($startingLat)) * sin(deg2rad($endingLat)) + cos(deg2rad($startingLat)) * cos(deg2rad($endingLat)) * cos(deg2rad($endingLon - $startingLon)));

echo "Distance from original location: $distance km\n"; //result is 1000km
