<?php include "./parts/head.php" ?>
<?php include "./parts/navbar.php" ?>


<section id="login-page" class="container d-flex align-items-center justify-content-center">
    
    <div class="form-container container-fluid">
        <form>
            <div class="form-group mb-5">
                <input type="email" class="form-control form-input" placeholder="Nama Pemilik atau e-mail">
            </div>
            <div class="form-group mb-5">
                <input type="password" class="form-control form-input" placeholder="Kata Sandi">
            </div>
            <div class="btn-action-group d-flex w-100 justify-content-center">
                <a href="./forgot-password.php" class="btn btn-outline-warning btn-forgot-action mx-2 btn-action">Lupa Kata Sandi</a>
                <button type="submit" class="btn btn-warning btn-login-action mx-2 btn-action">Masuk</button>
            </div>
        </form>
    
    </div>
</section>

<?php include "./parts/footer.php" ?>


<style>
    #login-page{
        min-height:87.5vh;
    }

    .form-container{
        min-width:70%;
        max-width:70%;
    }

    .btn-login-action{
        background:#FD9519;
        color:#FFF;
    }
    .btn-forgot-action{
        color:#000;
    }

    .btn-forgot-action:hover{
        background:#FD9519;
    }


    .form-input{
        background: #FFF !important;
        border: 1px solid #FD9519;
        border-radius: 10px;
        padding: 20px;
    }

    .btn-action{
        min-width:48.5%;
        border-radius: 10px;
    }
</style>