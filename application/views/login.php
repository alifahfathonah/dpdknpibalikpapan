<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= TITLE_BAR ?></title>

    <link rel="shortcut icon" href="<?= base_url('favicon.png') ?>" type="image/x-icon">

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('asset/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('asset/css/sb-admin-2.css') ?>" rel="stylesheet">

</head>

<body class="bg-gradient-info">
    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center mt-5">
            <div class="col-sm-5">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <img src="<?= base_url('favicon.png') ?>" alt="DPD KNPI Balikpapan" width="75"><br><br>
                                        <h1 class="h4 text-gray-900 mb-4"><?= TITLE_BAR ?></h1>
                                    </div>
                                    <form class="user" action="<?= site_url('auth/login') ?>" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" name="txt_user" id="txt_user" placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="txt_pass" id="txt_pass" placeholder="Password">
                                        </div>
                                        <button type="submit" id="btn_log" class="btn btn-block btn-warning btn-user"><i class="fa fa-unlock-alt"></i> &nbsp; M A S U K</button>
                                        <br>
                                    </form>
                                    <!-- <hr> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('asset/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('asset/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('asset/js/sb-admin-2.js') ?>"></script>

    <!-- custom script dev -->
    <script src="<?= base_url('asset/script/validasi_login.js') ?>"></script>
</body>

</html>