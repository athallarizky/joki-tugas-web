<?php include "./parts/head.php" ?>
<?php include "./parts/navbar.php" ?>

<section id="check-email-page" class="container d-flex align-items-center justify-content-center">
    
    <div class="container-fluid w-100 d-flex justify-content-between align-items-center">
        <div class="illustration-area">
            <img src="./src/images/message-send-img.png" class="illustration-img">
        </div>
        <div class="message-area">
            <h1>
                Silahkan cek email kamu, 
                kami sudah kirim tautan untuk 
                loginnya yaa...
            </h1>
        </div>
    </div>
</section>


<?php include "./parts/footer.php" ?>


<style>
    #check-email-page{
        min-height:87.5vh;
    }

    .message-area{
        /* min-width:60%; */
        max-width:50%;
    }

    .illustration-img{
        max-width:450px;
    }


    .form-input{
        background: #FFF !important;
        border: 1px solid #FD9519;
        border-radius: 10px;
        padding: 20px;
    }

    .btn-action{
        min-width:100%;
        border-radius: 10px;
    }
</style>