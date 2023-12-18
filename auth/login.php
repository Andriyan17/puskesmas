<?php
require_once "../_config/config.php";

if (isset($_SESSION['user'])) {
    echo "<script>window.location='" . base_url() . "'</script>";
} else {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Login - Rumah Sakit</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?= base_url(); ?>/_assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
        <!-- Custom styles -->
        <style>
            body {
                background-color: #f8f9fa;
            }

            #wrapper {
                display: flex;
                align-items: center;
                justify-content: center;
                height: 100vh;
            }

            .login-container {
                background-color: #fff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .login-container .input-group {
                margin-bottom: 15px;
            }

            .input-group-addon {
                padding: 0.375rem 0.75rem;
                margin-bottom: 0;
                font-size: 1rem;
                font-weight: 400;
                line-height: 1.5;
                color: #495057;
                text-align: center;
                background-color: #e9ecef;
                border: 1px solid #ced4da;
                border-radius: 0.25rem;
            }

            .input-group-addon i {
                margin-right: 5px;
            }
        </style>
    </head>

    <body>
        <div id="wrapper">
            <div class="login-container">
                <?php
                if (isset($_POST['login'])) {
                    $user = trim(mysqli_real_escape_string($con, $_POST['user']));
                    $pass = sha1(trim(mysqli_real_escape_string($con, $_POST['pass'])));

                    $sql_login = mysqli_query($con, "SELECT * FROM tb_user WHERE username = '$user' AND password = '$pass'") or die(mysqli_error($con));
                    if (mysqli_num_rows($sql_login) > 0) {
                        $_SESSION['user'] = $user;
                        echo "<script>window.location='" . base_url() . "'</script>";
                    } else { ?>
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <div class="alert alert-danger alert-dismissable" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    <strong>Login gagal!</strong> Username / Password salah
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
                <form action="" method="post" class="p-3">
                    <h4 class="pb-2">Login</h4>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fas fa-user"></i></span>
                        <input type="text" name="user" class="form-control" placeholder="Username" required="" autofocus="">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fas fa-lock"></i></span>
                        <input type="password" name="pass" class="form-control" placeholder="Password" required="">
                    </div>
                    <div class="input-group">
                        <button type="submit" name="login" class="btn btn-primary btn-block">Login</button>
                    </div>
                </form>
            </div>
        </div>

        <script src="<?= base_url('_assets/js/jquery.js'); ?>"></script>
        <script src="<?= base_url('_assets/js/bootstrap.min.js'); ?>"></script>

    </body>

    </html>

<?php } ?>