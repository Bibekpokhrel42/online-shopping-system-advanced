<?php

$servername = "zerone-addon-39-6-mariadb.zerone-5-39.svc.cluster.local";
$username = "root";
$password = "Bibek@1234";
$db = "onlineshop";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
