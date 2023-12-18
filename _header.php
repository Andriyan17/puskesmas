<?php
require_once "_config/config.php";
require "_assets/libs/vendor/autoload.php";

if (!isset($_SESSION['user'])) {
    echo "<script>window.location='" . base_url('auth/login.php') . "'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Puskesmas</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?= base_url(); ?>/_assets/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/_assets/css/simple-sidebar.css" rel="stylesheet">
    <!-- load DataTables -->
    <link href="<?= base_url(); ?>/_assets/libs/DataTables/datatables.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/_assets/fontawesome/css/all.min.css" rel="stylesheet">


    <!-- load jquery online -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>

    <!-- load ckeditor -->
    <script src="<?= base_url(); ?>/_assets/libs/vendor/ckeditor/ckeditor/ckeditor.js"></script>
    <!-- <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script> -->

</head>

<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="bg-dark">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href=""><span class="text-white font-weight-bold">Puskesmas</span></a>
                </li>
                <li>
                    <a href="<?= base_url('dashboard'); ?>" class="text-white">Dashboard</a>
                </li>
                <li>
                    <a href="<?= base_url('pasien/data.php') ?>" class="text-white">Data Pasien</a>
                </li>
                <li>
                    <a href="<?= base_url('dokter/data.php') ?>" class="text-white">Data Dokter</a>
                </li>
                <li>
                    <a href="<?= base_url('poliklinik/data.php') ?>" class="text-white">Data Poliklinik</a>
                </li>
                <li>
                    <a href="<?= base_url('obat/data.php') ?>" class="text-white">Data Obat</a>
                </li>
                <li>
                    <a href="<?= base_url('rekammedis/data.php') ?>" class="text-white">Rekam Medis</a>
                </li>
                <li>
                    <a href="<?= base_url('auth/register.php') ?>" class="text-white">Daftar Akun</a>
                </li>
                <li>
                    <a href="<?= base_url('auth/logout.php') ?>" class="text-white"><span class="text-danger">Logout</span></a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">