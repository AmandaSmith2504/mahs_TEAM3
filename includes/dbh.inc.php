<?php

$servername = "localhost:3306";
$dBUsername = "mahs_TEAM3";
$dBPassword = "mustangs";
$dBName = "mahs_TEAM3";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}