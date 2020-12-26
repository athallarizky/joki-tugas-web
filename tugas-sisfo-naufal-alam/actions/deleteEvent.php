<?php
    include "../config/connection.php";

    $currentId = $_GET['id'];

    $deleteEvent = "DELETE FROM events WHERE id='$currentId'";
    $result = $mysqli->query($deleteEvent);

    if($result):
        echo '<script type="text/javascript"> alert("Berhasil Hapus Event");</script> ';
        header("Location: ../index.php");
    else:
        die($result);
    endif;