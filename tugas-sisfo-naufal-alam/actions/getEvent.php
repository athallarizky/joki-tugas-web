<?php
    include "../config/connection.php";
    $getEvents = "SELECT * FROM events";
    $result = $mysqli->query($getEvents);


