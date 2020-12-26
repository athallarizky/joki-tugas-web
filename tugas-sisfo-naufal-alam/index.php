<?php
    include "layout/navbar.php";
    include "config/connection.php";

    $getEvents = "SELECT * FROM events";
    $result = $mysqli->query($getEvents);
?>


<section id="home">
    <div class="container">
    <div class="d-flex flex-column align-items-center">
        <h1 class="h3 welcome-text">Welcome to EAD Events!</h1>
    </div>

        <div class="event-wrapper">
            <div class="row">
                <?php 
                    if($result->num_rows > 0): 
                        while($row = $result -> fetch_assoc()):
                ?>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="./images/<?= $row["gambar"] ?>" class="card-img-top" alt="..." height="250px">
                        <div class="card-body">
                            <h5 class="card-title"><?= $row["nama"] ?></h5>
                            <div class="event-category">
                                Tanggal : <span class="card-text">Event <?= $row["tanggal"] ?></span>
                            </div>

                            <div class="event-category">
                                Lokasi : <span class="card-text">Event <?= $row["tempat"] ?></span>
                            </div>

                            <div class="event-category">
                                Kategori : <span class="card-text">Event <?= $row["kategori"] ?></span>
                            </div>
                            
                        </div>
                        <div class="card-footer d-flex justify-content-end">
                            <a type="button" class="btn btn-primary" href="detail_event.php?id=<?=$row["id"] ?>">
                                Detail
                            </a>
                        </div>
                    </div>
                </div>

                <?php
                        endwhile;
                    else: ?>
                        <!-- Kondisi ketika tidak ada event di database -->
                        <div class="no-event">
                            <p>No Events Found!</p>
                        </div>
                    <?php endif; ?>
            </div>
            
            
        </div>
        
    </div>
</section>

<style>
    #home{
        /* background:red; */
    }
</style>

<?php include "./layout/footer.php" ?>