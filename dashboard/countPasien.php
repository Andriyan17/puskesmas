<?php
require_once "../_config/config.php";

$queryPasien = "SELECT COUNT(*) AS jumlah_pasien FROM tb_pasien";
$pasiens = $con->query($queryPasien);

if ($pasiens->num_rows > 0) {
    $row1 = $pasiens->fetch_assoc();
    $jumlahPasien = $row1['jumlah_pasien'];
} else {
    $jumlahPasien = 0;
}
