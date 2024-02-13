
<?php include_once("header.php"); ?>
<?php include_once("sidebar.php"); ?>
<style type="text/css">
    #psa div.card,
    #psb div.card,
    #psc div.card{
        width: 290px;
        height: 535px;
    }
</style>
<div class="content" id="load">
   <?php include_once("top-nav.php"); ?>
   <div class="p-3 m-0 row">
        <div class="col-12 col-md-9 mt-5">
                <div class="shadow py-5 rounded-3 bg-white">
                    <div id="psa">
                        <h5 class="text-center pb-4">PARKING SLOT A</h5>
                        <div class="row gap-2 justify-content-center m-0">
                            <div class="card p-3 col-auto border-3 border-danger">
                              <img src="../upload/car.png" height="500">
                            </div>

                            <div class="card p-3 col-auto border-3 border-danger">
                                <img src="../upload/car.png" height="500">
                            </div>

                            <div class="card p-3 col-auto border-3 border-success">
                                <h1 class="text-center m-auto">Empty</h1>
                            </div>
                        </div>
                    </div>

                    <div id="psb" class="d-none">
                        <h5 class="text-center pb-4">PARKING SLOT B</h5>
                        <div class="row gap-2 justify-content-center m-0">
                            <div class="card p-3 col-auto border-3 border-danger">
                              <img src="../upload/car.png" height="500">
                            </div>

                            <div class="card p-3 col-auto border-3 border-danger">
                                <img src="../upload/car.png" height="500">
                            </div>

                            <div class="card p-3 col-auto border-3 border-danger">
                                <img src="../upload/car.png" height="500">
                            </div>
                        </div>
                    </div>

                    <div id="psc" class="d-none">
                        <h5 class="text-center pb-4">PARKING SLOT C</h5>
                        <div class="row gap-2 justify-content-center m-0">
                            <div class="card p-3 col-auto border-3 border-success">
                                <h1 class="text-center m-auto">Empty</h1>
                            </div>

                            <div class="card p-3 col-auto border-3 border-success">
                                <h1 class="text-center m-auto">Empty</h1>
                            </div>

                            <div class="card p-3 col-auto border-3 border-success">
                                <h1 class="text-center m-auto">Empty</h1>
                            </div>
                        </div>
                    </div>

                </div>
        </div>

        <div class="col-12 col-md-3 mt-5">
                <div class="shadow d-flex flex-column row-gap-3 align-items-center py-5 rounded-3 bg-white">
                    <h5 class="text-center pb-4">PARKING AREA</h5>
                    <div class="card" style="width: 18rem;">
                      <div class="card-body d-flex">
                        <div>
                            <h5 class="card-title fs-3 fw-bold">2/3</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Parking Slot A</h6>
                        </div>
                        <div class="ms-auto">
                            <div id="psaBtn" role="button">
                                <i class="fa-regular fa-eye fs-2" ></i>
                            </div>

                        </div>
                      </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                      <div class="card-body d-flex">
                        <div>
                            <h5 class="card-title fs-3 fw-bold">3/3</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Parking Slot B</h6>
                        </div>
                        <div class="ms-auto">
                            <div id="psbBtn" role="button">
                                <i class="fa-regular fa-eye fs-2" ></i>
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="card" style="width: 18rem;">
                      <div class="card-body d-flex">
                        <div>
                            <h5 class="card-title fs-3 fw-bold">0/3</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">Parking Slot C</h6>
                        </div>
                        <div class="ms-auto">
                            <div id="pscBtn" role="button">
                                <i class="fa-regular fa-eye fs-2" ></i>
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
        </div>

   </div>
</div>

<?php include_once("footer.php"); ?>
<script type="text/javascript">
    $('#psaBtn').on('click', function() {
        $('#psa').removeClass('d-none');
        $('#psc, #psb').addClass('d-none');
    })
    $('#psbBtn').on('click', function() {
        $('#psb').removeClass('d-none');
        $('#psa, #psc').addClass('d-none');
    })
    $('#pscBtn').on('click', function() {
        $('#psc').removeClass('d-none');
        $('#psa, #psb').addClass('d-none');
    })

</script>