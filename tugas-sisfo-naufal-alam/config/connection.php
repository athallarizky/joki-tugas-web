<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "eadevents";

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

   
if (!$mysqli) {
    die("Koneksi gagal: " . mysqli_connect_error());
}