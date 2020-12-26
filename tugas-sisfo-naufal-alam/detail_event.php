<?php
    include "layout/navbar.php";
    include "config/connection.php";

    $currentId = $_GET['id'];
    $getDetailEvent = "SELECT * FROM events WHERE id='$currentId' ";
    $result = $mysqli->query($getDetailEvent);
?>


<section id="detail-event">
    <div class="container">
        <div class="d-flex flex-column align-items-center">
            <h1 class="h3 welcome-text">Detail Events!</h1>
        </div>
        
        <div class="detail-event-wrapper d-flex justify-content-center">
            <div class="card" style="width: 800px;">
                <?php 
                    if($result->num_rows > 0): 
                        while($row = $result->fetch_assoc()):
                ?>
                <img src="./images/<?= $row['gambar'];?>" class="card-img-top" height="250px" >
                <div class="card-body">
                    <p class="card-text mb-4"><?= $row['nama'];?></p>

                    <div class="description mb-4">
                        <h1 class="h5">Deskripsi</h1>
                        <p><?= $row['deskripsi'];?></p>
                    </div>

                    <div class="information mb-4">
                        <h1 class="h5">Infromasi Event</h1>
                        <div class="row ">
                            <div class="col-6">
                                <div class="event-category">
                                    Tanggal : <span class="card-text">Event <?= $row["tanggal"] ?></span>
                                </div>
                                <div class="event-category">
                                    Lokasi : <span class="card-text">Event <?= $row["tempat"] ?></span>
                                </div>
                                <div class="event-time">
                                    Jam : <span class="card-text"> <?= $row["mulai"] .' - '. $row["berakhir"]?></span>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="event-benefit">
                                    <?php print_r($row["benefit"]) ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="category mb-4">
                        Kategori : <span> <?= $row["kategori"] ?></span>
                    </div>
                    <div class="price mb-4">
                        HTM <span>Rp <?= $row["harga"] ?></span>
                    </div>
                </div>
                <div class="card-footer d-flex justify-content-center">
                    
                    <button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#editEvent">
                        Edit
                    </button>
                    
                    <a href="./actions/deleteEvent.php?id=<?= $row["id"] ?>" class="btn btn-danger" >
                        Hapus
                    </a>

                    <!-- Modal -->
                    <div class="modal fade" id="editEvent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="./actions/updateEvent.php?id=<?= $row["id"] ?>" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <?php include "edit_event.php" ?>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                                <button class="btn btn-submit mr-3" name="submit"> Save Change </button>
                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>

                
            </div>

                <?php
                        endwhile;
                    endif;
                ?>
        </div>


    </div>
</section>

<style>

    .eventModalWidth{
        width: 1000px !important;
    }
</style>

<?php include "./layout/footer.php" ?>