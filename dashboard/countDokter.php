<?php
require_once "../_config/config.php";
// Query untuk menghitung jumlah dokter
$query = "SELECT COUNT(*) AS jumlah_dokter FROM tb_dokter";
$result = $con->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $jumlahDokter = $row['jumlah_dokter'];
} else {
    $jumlahDokter = 0;
}
