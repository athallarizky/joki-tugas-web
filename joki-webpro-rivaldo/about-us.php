<?php include "./parts/head.php" ?>
<?php include "./parts/navbar.php" ?>

<section id="about-us-page" class="d-flex justify-content-between">
    <div class="left-side d-flex flex-column ">
        <h1 class="about-us-heading mb-5"> Tentang </br> Kami</h1>
        <p class="about-us-contact">+62 99 8888 2222</p>
        <p class="about-us-contact">admin@procode.com</p>
    </div>
    <div class="right-side d-flex">
        <!-- <div class="member-card-wrapper bg-danger"> -->
            <div class="row">
                <div class="col-md-6 d-flex user-card mb-4">                  
                    <img src="./src/images/user-1.png" class="user-img">
                    <div class="d-flex flex-column justify-content-between p-3">
                        <h3 class="card-name">Mark Slovaski</h3>
                        <div class="mb-0">
                            <p class="mb-0 card-as-a">Sebagai</p>
                            <h4 class="card-job">CEO</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex user-card mb-4">                  
                    <img src="./src/images/user-2.png" class="user-img">
                    <div class="d-flex flex-column justify-content-between p-3">
                        <h3 class="card-name">Fatimah Nuristya</h3>
                        <div class="mb-0">
                            <p class="mb-0 card-as-a">Sebagai</p>
                            <h4 class="card-job">CFO</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex user-card mb-4">                  
                    <img src="./src/images/user-3.png" class="user-img">
                    <div class="d-flex flex-column justify-content-between p-3">
                        <h3 class="card-name">Gerard Junior</h3>
                        <div class="mb-0">
                            <p class="mb-0 card-as-a">Sebagai</p>
                            <h4 class="card-job">CMO</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex user-card mb-4">                  
                    <img src="./src/images/user-4.png" class="user-img">
                    <div class="d-flex flex-column justify-content-between p-3">
                        <h3 class="card-name">Jonathan Army</h3>
                        <div class="mb-0">
                            <p class="mb-0 card-as-a">Sebagai</p>
                            <h4 class="card-job">CTO</h4>
                        </div>
                    </div>
                </div>

                
            </div>

            



        <!-- </div> -->
    </div>
</section>

<?php include "./parts/footer.php" ?>


<style>
    #about-us-page{
        min-height:100vh;
    }

    .card-name, 
    .card-as-a,
    .card-job
    {
        font-weight:bold;
        font-size:24px;
        letter-spacing:2px;
    }
    .card-name{
        max-width:30%;
    }
    .card-as-a{
        font-weight:normal;
    }
    .user-card{
        max-height:200px;
    }

    .user-img{
        width:150px;
    }
    
    .right-side{
        /* overflow:hidden; */
        padding:5%;
        width:60%;
        padding-top:8%;
    }
    .member-card-wrapper{
        padding:8%;
        height:100%;
        /* margin-left:5%; */
        min-width:100%;
    }
    
    .about-us-heading{
        font-size:50px;
        margin-top:50px;
        color:#FFF;
    }

    .about-us-contact{
        font-weight:bold;
        letter-spacing:2px;
        color:#FFF;
    }

    .left-side{
        padding:120px;
        position:relative;
        /* margin-top:10%; */
        background:linear-gradient(180deg, rgba(86, 150, 244, 0) 0%, rgba(86, 150, 244, 0.994792) 40.63%);
        width:40%;
        border-radius: 0 45px 45px 0;
        padding-top:15%;
    }


</style>