<?php
require_once "../_config/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Generate ID secara acak (contoh: menggunakan fungsi uniqid)
    $id_user = uniqid();

    $nama_user = mysqli_real_escape_string($con, $_POST['nama_user']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = sha1(mysqli_real_escape_string($con, $_POST['password']));

    // Cek apakah id_user sudah digunakan
    $cek_id_user = mysqli_query($con, "SELECT * FROM tb_user WHERE id_user = '$id_user'");
    if (mysqli_num_rows($cek_id_user) > 0) {
        echo "<script>alert('ID User sudah digunakan. Silakan pilih ID User lain.');</script>";
    } else {
        // Insert data baru ke dalam tabel
        $query = "INSERT INTO tb_user (id_user, nama_user, username, password, level) VALUES ('$id_user', '$nama_user', '$username', '$password', '1')";
        if (mysqli_query($con, $query)) {
            echo "<script>alert('Pendaftaran berhasil. Silakan login.'); window.location.href = 'login.php';</script>";
        } else {
            echo "<script>alert('Error: " . $query . "\\n" . mysqli_error($con) . "');</script>";
        }
    }
}
?>

<?php include_once('../_header.php'); ?>
<h2>Silahkan daftarkan akun anda</h2>
<a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
<form action="" method="post" class="form-horizontal mt-5" style="margin-left: -65px;">
    <div class="form-group">
        <label for="nama_user" class="col-sm-2 control-label">Nama</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="nama_user" name="nama_user" placeholder="Nama" required>
        </div>
    </div>
    <div class="form-group">
        <label for="username" class="col-sm-2 control-label">Username</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-4">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary">Daftar</button>
        </div>
    </div>
</form>

<?php include_once('../_footer.php'); ?>