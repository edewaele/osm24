<?php
// This file performs a reverse geocoding request with nominatim API
header('Content-Type: application/json');
$_GET["format"] = "json";
echo file_get_contents('http://nominatim.openstreetmap.org/reverse?'.http_build_query($_GET));
?>