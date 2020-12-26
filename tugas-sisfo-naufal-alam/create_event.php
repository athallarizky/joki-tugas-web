<?php
    include "layout/navbar.php"
?>


<section id="create-event">
    <div id="wrapper">
        <h1 class="h3">Buat Event</h1>
        <form action="./actions/addEvent.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col left-panel">
                <div class="red-line"></div>
                <div class="form-wrapper">
                    <div class="form-group">
                        <label for="text">Nama Event</label>
                        <input type="text" class="form-control" name="eventName" placeholder="Nama Event">
                    </div>
                    <div class="form-group">
                        <label for="text">Deskripsi</label>
                        <textarea name="eventDescription" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="text">Upload Gambar</label>
                        <div class="custom-file mb-3">
                            <input type="file" name="eventPhoto" class="custom-file-input" id="validatedCustomFile" required>
                            <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                            <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                    </div>

                    <label for="text">Kategori</label>
                    <div class="form-group">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="eventCategory" checked value="online" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">Online</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="eventCategory" value="offline" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">Offline</label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col right-panel">
                <div class="blue-line"></div>
                <div class="form-wrapper">
                    <div class="form-group">
				 		<label>Tanggal</label>
				 		<input type="date" name="eventDate" class="form-control">
				 	</div>

                    <div class="row">
                        <div class="form-group col-6"><br>
                            <label><b>Jam Mulai</b></label>
                            <select name="eventStart" class="form-control">
                                <option selected>00:00</option>
                                <option>19:00</option>
                            </select>
                        </div>

                        <div class="form-group col-6"><br>
                            <label><b>Jam Berakhir</b></label>
                            <select name="eventEnd" class="form-control">
                                <option selected>00:00</option>
                                <option>19:00</option>
                                <option>20:00</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
				 		<label>Tempat</label>
				 		<input type="text" name="eventLocation" class="form-control">
				 	</div>

                     <div class="form-group">
				 		<label>Harga</label>
				 		<input type="number" name="eventPrice" class="form-control"  placeholder="10000">
				 	</div>

                     <div class="form-group">Benefit<br>
						<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" name="eventBenefit[]" value="Snacks">
							  <label class="form-check-label">Snacks</label>
						</div>
						<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" name="eventBenefit[]" value="Sertifikat">
							  <label class="form-check-label">Sertifikat</label>
						</div>
						<div class="form-check form-check-inline">
							  <input class="form-check-input" type="checkbox" name="eventBenefit[]" value="Souvenir">
							  <label class="form-check-label">Souvenir</label>
						</div>
					</div>
                    
                    <div class="button-area d-flex justify-content-end">
                        <button class="btn btn-submit mr-3" name="submit"> Submit </button>
                        <a class="btn btn-cancel" href="./index.php"> Cancel </a>
                    </div>
                </div>
            </div>
        </div>
        </form>
    
    </div>

</section>

<style>
    #wrapper{
        padding: 5px 25px;
        height:95vh;
    }
    .left-panel, .right-panel{
        width: 50%;
        margin: 5px 25px;
        padding: 0;
        border-radius: 5px;
        border: 1px solid #B3BAC2;
        background:#FFF;
    }
    .red-line, .blue-line{
        width:100%;
        height:30px;
        border-radius: 5px 5px 0 0;
    }

    .btn-submit, .btn-cancel{
        color: #FFF;
    }
    .red-line, .btn-cancel{
        background:#DC3545;
    }
    .blue-line, .btn-submit{
        background:#007BFF;
    }
    .form-wrapper{
        padding: 10px 15px;
    }
</style>