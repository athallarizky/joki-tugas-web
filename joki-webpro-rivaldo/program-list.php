<?php include "./parts/head.php" ?>
<?php include "./parts/navbar.php" ?>

<section id="program-list-page" class="d-flex justify-content-between">
    <div class="left-side">
        <div class="program-list-card-wrapper d-flex justify-content-center">
            <div class="row">
                <div class="col-md-6 d-flex flex-column align-items-center mb-5">
                    <img src="./src/images/program-1.png" class="mb-3">
                    <h3 class="h4">Pembinaan Bisnis</h3>
                </div>
                <div class="col-md-6 d-flex flex-column align-items-center mb-5">
                    <img src="./src/images/program-2.png" class="mb-3">
                    <h3 class="h4">Program Sosial</h3>
                </div>
                <div class="col-md-6 d-flex flex-column align-items-center mb-5">
                    <img src="./src/images/program-3.png" class="mb-3">
                    <h3 class="h4">Pembinaan Investasi</h3>
                </div>
                <div class="col-md-6 d-flex flex-column align-items-center mb-5">
                    <img src="./src/images/program-4.png" class="mb-3">
                    <h3 class="h4">Pembinaan NLP</h3>
                </div>
            </div>
        </div>
        <div class="circle circle-img"></div>
        <div class="circle circle-img-2"></div>
        <div class="circle circle-img-3"></div>
    </div>
    <div class="right-side d-flex flex-column">
        <h1 class="program-list-heading mb-5"> Banyak </br> Program Seru <br> Yang <br> Dilaksanakan</h1>
        <button class="btn btn-program-login btn-warning w-75"> Masuk Admin </button>
    </div>

</section>

<?php include "./parts/footer.php" ?>


<style>
    #program-list-page{
        min-height:100vh;
    }

    .left-side{
        position:relative;
        width:60%;
        overflow:hidden;
        margin-top:5%;
        /* background:pink; */
    }

    .program-list-card-wrapper{
        padding:5% 10%;
        height:100%;
        margin-left:5%;
    }

    .right-side{
        padding:50px;
        position:relative;
        /* margin-top:10%; */
        background:linear-gradient(180deg, rgba(86, 150, 244, 0) 0%, rgba(86, 150, 244, 0.994792) 40.63%);
        width:40%;
        border-radius: 45px 0 0 45px;
        padding-top:8%;
    }

    .btn-program-login{
        background:#FD9519;
        height:50px;
        color: #FFF;
        letter-spacing:2px;
        font-weight:bold;
    }

    .btn-program-login:hover{
        background:#d98016;
    }

    .program-list-heading{
        /* max-width:80%; */
        font-size:50px;
        margin-top:100px;
        color:#FFF;
    }

    

    .circle{
        border-radius:50%;
        position:absolute;
    }
    .circle-img{
        background:red;
        width:750px;
        height:750px;
        margin-left:-320px;
        margin-bottom:-300px;
        bottom:0;
        z-index:-1;
        /* left:-20; */
        background:linear-gradient(180deg, #B4D7FE 0%, #5696F4 100%);
        background-size: cover;
    }

    .circle-img-2{
        width:200px;
        height:200px;
        z-index:-1;
        background:linear-gradient(180deg, rgba(86, 150, 244, 0) 0%, #5696F4 100%);
        top:0;
        right:0;
        margin-right:250px;
        margin-top:120px;
    }

    .circle-img-3{
        width:150px;
        height:150px;
        z-index:-1;
        background:linear-gradient(180deg, rgba(86, 150, 244, 0) 0%, #B4D7FE 100%);
        top:0;
        right:0;
        margin-right:50px;

    }

    
    .heading-text{
        max-width:65%;
        letter-spacing: 2px;
        font-weight:bold;
    }

    .caption-text{
        max-width:85%;
        letter-spacing: 2px;

    }

    .btn-home-login{
        background:#FD9519;
        height:50px;
        color: #FFF;
        letter-spacing:2px;
        font-weight:bold;
    }

    .flag-img{
        max-width:250px;
    }
</style>