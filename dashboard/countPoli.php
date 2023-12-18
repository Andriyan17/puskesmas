<?php
require_once "../_config/config.php";

$queryPoli = "SELECT COUNT(*) AS jumlah_poli FROM tb_poliklinik";
$polies = $con->query($queryPoli);

if ($polies->num_rows > 0) {
    $row2 = $polies->fetch_assoc();
    $jumlahPoli = $row2['jumlah_poli'];
} else {
    $jumlahPoli = 0;
}

$con->close();
