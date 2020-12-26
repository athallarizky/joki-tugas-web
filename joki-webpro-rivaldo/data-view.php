<?php include "./parts/head.php" ?>
<?php include "./parts/navbar-dashboard.php" ?>

<section id="data-list-page" class="container d-flex justify-content-center align-items-center">

    <div class="form-container container-fluid">
        <form>
            <div class="form-group mb-4">
                <label for="labelForNoKTP"><b>No. KTP</b></label>
                <input type="text" id="labelForNoKTP" class="form-control form-input" placeholder="No. KTP (contoh : 02023221)">
            </div>
            <div class="form-group mb-4">
                <label for="labelForNamaLengkap"><b>Nama Lengkap</b></label>
                <input type="text" id="labelForNamaLengkap" class="form-control form-input" placeholder="Nama Lengkap (contoh : Husein Al Quds)">
            </div>
            <div class="form-group mb-4">
                <label for="labelForProgram"><b>Program</b></label>
                <input type="text" id="labelForProgram" class="form-control form-input" placeholder="Program (contoh : NLP)">
            </div>
            <div class="btn-action-group d-flex justify-content-center">
                <button type="button" class="btn w-100 btn-warning btn-action">Kembali ke Daftar Peserta </button>
            </div>
        </form>
    </div>

</section>

<?php include "./parts/footer.php" ?>

<style>
    #data-list-page{
        min-height:87.5vh;
    }

    .form-container{
        min-width:70%;
        max-width:70%;
    }

    .form-input{
        border: 1px solid #FD9519;
        border-radius: 10px;
    }
    .btn-action{
        border:none;
        border-radius:10px;
        background:#FD9519;
        font-weight:bold;
        letter-spacing:2px;
    }

    .btn-action:hover{
        background:#d98016;
    }
</style>