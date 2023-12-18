<?php include_once('../_header.php'); ?>
<?php include_once('../dashboard/countDokter.php'); ?>
<?php include_once('../dashboard/countPasien.php'); ?>
<?php include_once('../dashboard/countPoli.php'); ?>



<div class="row">
    <div class="col-lg-12">
        <h1>Dashboard</h1>
        <p>Selamat datang <mark> <?= $_SESSION['user']; ?> </mark> di website Rumah Sakit (Rekam Medis)</p>
        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
    </div>
    <!-- Card HTML -->
    <div class="card m-5 bg-white shadow rounded" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title h4">Pasien</h5>
            <div class="row d-flex justify-content-center">
                <i class="col fas fa-users fa-3x mt-3"></i>
                <p class="col card-text h2" style="margin-left: -40px;"><?php echo $jumlahPasien; ?></p>
            </div>
        </div>
    </div>

    <div class="card m-5 bg-white shadow rounded" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title h4">Dokter</h5>
            <div class="row d-flex justify-content-center">
                <i class="col fas fa-user-md fa-3x mt-3"></i>
                <p class="col card-text h2" style="margin-left: -60px;"><?php echo $jumlahDokter; ?></p>
            </div>
        </div>
    </div>
    <div class="card m-5 bg-white shadow rounded" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title h4">Poliklinik</h5>
            <div class="row d-flex justify-content-center">
                <i class="col fas fa-hospital-alt fa-3x mt-3"></i>
                <p class="col card-text h2" style="margin-left: -60px;"><?php echo $jumlahPoli; ?></p>
            </div>
        </div>
    </div>

</div>


<?php include_once('../_footer.php'); ?>