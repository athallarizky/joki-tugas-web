<?php include "./parts/head.php" ?>
<?php include "./parts/navbar-dashboard.php" ?>


<section id="data-list-page" class=" container d-flex flex-column">
    <div class="heading mt-5 mb-3">
        <h1 class="h4 heading-text ">Daftar Data</h1>
    </div>

    <div class="search-area mb-3">
        <form class="d-flex">
            <div class="form-group input-search-box pr-1">
                <input type="email" class="form-control form-input" placeholder="Nama Pemilik atau e-mail">
            </div>
            <div class="form-group button-search-box pl-1">
                <button type="button" class="btn btn-add-data btn-text w-100">Tambah Data</button>
            </div>
        </form>
    </div>

    <div class="table-area">
        <table class="table text-center">
            <thead class="bg-sucess">
                <tr>
                    <th scope="col" >No. KTP</th>
                    <th scope="col" >Nama Lengkap</th>
                    <th scope="col" >Program</th>
                    <th scope="col" >Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>02029121</th>
                    <td>Roberto Naula</td>
                    <td>NLP</td>
                    <td>
                        <button type="button" class="btn btn-data-action btn-success">
                            <img src="./src/images/eye-icon.svg" width="15"/>
                        </button>
                        <button type="button" class="btn btn-data-action btn-warning">
                            <img src="./src/images/pencil-icon.svg" width="15"/>
                        </button>
                        <button type="button" class="btn btn-data-action btn-danger">
                            <img src="./src/images/trash-icon.svg" width="15"/>
                        </button>
                    </td>
                </tr>
                <tr>
                    <th>02029121</th>
                    <td>Roberto Naula</td>
                    <td>NLP</td>
                    <td>
                        <button type="button" class="btn btn-data-action btn-success">
                            <img src="./src/images/eye-icon.svg" width="15"/>
                        </button>
                        <button type="button" class="btn btn-data-action btn-warning">
                            <img src="./src/images/pencil-icon.svg" width="15"/>
                        </button>
                        <button type="button" class="btn btn-data-action btn-danger">
                            <img src="./src/images/trash-icon.svg" width="15"/>
                        </button>
                    </td>
                </tr>
                <tr>
                    <th>02029121</th>
                    <td>Roberto Naula</td>
                    <td>NLP</td>
                    <td>
                        <button type="button" class="btn btn-data-action btn-success">
                            <img src="./src/images/eye-icon.svg" width="15"/>
                        </button>
                        <button type="button" class="btn btn-data-action btn-warning">
                            <img src="./src/images/pencil-icon.svg" width="15"/>
                        </button>
                        <button type="button" class="btn btn-data-action btn-danger">
                            <img src="./src/images/trash-icon.svg" width="15"/>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="pagination-area w-100 d-flex justify-content-end">
            <ul class="d-flex w-25 justify-content-around align-items-center">
                <li class="d-block mr-4"><a href="#">Previous</a></li>
                <li class="d-block mr-3"><a href="#">1</a></li>
                <li class="d-block mr-3"><a href="#">2</a></li>
                <li class="d-block mr-3"><a href="#">3</a></li>
                <li class="d-block mr-3"><a href="#">4</a></li>
                <li class="d-block mr-3"><a href="#">5</a></li>
                <li class="d-block ml-3"><a href="#">Next</a></li>
            </ul>
        </div>

    </div>


</section>


<?php include "./parts/footer.php" ?>


<style>
    #data-list-page{
        min-height:87.5vh;
    }
    .heading-text{
        font-weight:bold;
        letter-spacing:2px;
    }
    .input-search-box{
        min-width:70%;
        max-width:70%;
    }
    .form-input{
        border: 1px solid #FD9519;
        border-radius: 10px;
    }
    .button-search-box{
        min-width:30%;
        max-width:30%;
    }

    .btn-text{
        background: #FD9519;
        border-radius: 10px;
    }

    .table-area{
        border: 1px solid #FD9519;
        border-radius: 10px;
        padding:15px;
        min-width:70%;
        display:flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
    }

    .table thead th {
        vertical-align: bottom;
        border:none;
    }

    .table td, .table th {
        border: none;
    }

    .btn-data-action{
        margin-right:10px;
    }
    
    .btn-warning{
        background:#FD9519;
    }

    .pagination-area{
        /* background:red; */
        padding-right:15%;
    }

    .pagination-area ul li a{
        color:#000;
    }

    .btn-add-data{
        font-weight:bold;
        letter-spacing:2px;
    }

    .btn-add-data:hover{
        background:#d98016;
    }

</style>