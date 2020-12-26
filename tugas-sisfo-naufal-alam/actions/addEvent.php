<?php
    include "../config/connection.php";


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

        $insertEvent = "INSERT INTO events(nama, deskripsi, gambar, kategori, tanggal, mulai, berakhir, tempat, harga, benefit) VALUES('$eventName', '$eventDescription', '$filename', '$eventCategory', ' $eventDate', '$eventStart', '$eventEnd', '$eventLocation', '$eventPrice', '$eventBenefit')";
        $result = $mysqli->query($insertEvent);

        if($result):
            echo '<script type="text/javascript"> ';
            echo '  alert("Berhasil Tambah Event");';
            echo ' window.location.href = "../index.php";';
            echo '</script>';
        endif;
        var_dump($insertEvent);
    }


