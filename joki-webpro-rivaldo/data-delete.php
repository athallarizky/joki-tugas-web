<?php include "./parts/head.php" ?>
<?php include "./parts/navbar-dashboard.php" ?>

<section id="data-list-page" class="container d-flex justify-content-center align-items-center">

    <div class="form-container container-fluid">
        <div>
            <h1 class="h3 mb-5 delete-heading text-center">Bener Nih?? Yakin Mau Hapus Data???</h1>
        </div>
        <form action="" method="POST">
            <div class="form-group mb-4">
                <label for="labelForNoKTP"><b>No. KTP</b></label>
                <input type="text" id="labelForNoKTP" class="form-control form-input" value="sample data" placeholder="No. KTP (contoh : 02023221)">
            </div>
            <div class="form-group mb-4">
                <label for="labelForNamaLengkap"><b>Nama Lengkap</b></label>
                <input type="text" id="labelForNamaLengkap" class="form-control form-input" value="sample data" placeholder="Nama Lengkap (contoh : Husein Al Quds)">
            </div>
            <div class="form-group mb-4">
                <label for="labelForProgram"><b>Program</b></label>
                <input type="text" id="labelForProgram" class="form-control form-input" value="sample data" placeholder="Program (contoh : NLP)">
            </div>
            <div class="btn-action-group d-flex justify-content-center">
                <button type="button" class="btn w-100 btn-warning mx-2 btn-custom btn-back">Kembali ke Daftar Peserta</button>
                <button type="button" class="btn w-100 btn-success mx-2 btn-custom btn-danger">Yakin! Hapus Data Sekarang</button>
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

    .delete-heading{
        letter-spacing:2px;
    }

    .form-input{
        border: 1px solid #FD9519;
        border-radius: 10px;
    }
    .btn-custom{
        border:none;
        border-radius:10px;
        color:#000;
        font-weight:bold;
    }
    .btn-back{
        background:#FD9519;
    }

    .btn-back:hover{
        background:#d98016;
    }
</style>