<?php
    include "../config/connection.php";
    $currentId = $_GET['id'];
    $i = $_POST;

    if(isset($i['submit'])){
        $eventName = $i["eventName"];
        $eventDescription = $i["eventDescription"];
        
        // Flow Memasukan Foto
        // $eventPhoto = $i["eventPhoto"];

        $extension =  array('png','jpg','jpeg','gif');
        $filename  = $_FILES['eventPhoto']['name'];
        $ext = pathinfo($filename, PATHINFO_EXTENSION);

        if(!in_array($ext,$extension) ) {
            header("location:index.php?alert=gagal_upload");
        }else{
            move_uploaded_file($_FILES['eventPhoto']['tmp_name'], '../images/'.$filename);
        }

        $eventCategory = $i["eventCategory"];
        $eventDate = $i["eventDate"];
        $eventStart = $i["eventStart"];
        $eventEnd = $i["eventEnd"];
        $eventLocation = $i["eventLocation"];
        $eventPrice = $i["eventPrice"];
        $eventBenefit = implode(',', $i["eventBenefit"]);

        $updateEvent = "UPDATE events SET nama='$eventName', deskripsi='$eventDescription', gambar='$filename', kategori='$eventCategory', tanggal='$eventDate', mulai='$eventStart', berakhir='$eventEnd', tempat='$eventLocation', harga='$eventPrice', benefit='$eventBenefit' WHERE id='$currentId' ";
        $result = $mysqli->query($updateEvent);

        if($result):
            echo '<script type="text/javascript"> alert("Berhasil Update Event");</script> ';
            header("Location: ../index.php");
        else:
            die($result);
        endif;

        }