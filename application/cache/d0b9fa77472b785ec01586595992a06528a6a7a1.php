<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <link rel="icon" href="<?php echo e(assets_url('images/favicon.ico')); ?>" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Chevalier Admin</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo e(assets_url('vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?php echo e(assets_url('css/sb-admin-2.min.css')); ?>" rel="stylesheet">
    <style>
        .gradient-custom-2 {
            background: white;
            color:#F8A400 ;
            border: #F8A400 solid 1px;
        }
        .gradient-custom-2:hover {
            color: white;
            background: linear-gradient(to right, #F8A400, #F8A400, #F8A400, #C39D27);
        }

        .bg-login-image {
            background: none;
            background-position: center;
            background-size: cover;
        }
    </style>

</head>

<body class="bg-gradient-primary">

    <div class="container" style="height: 100vh;">

        <!-- Outer Row -->
        <div class="row justify-content-center align-items-center h-100">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image">
                                <img src="<?php echo e(assets_url('images/logo_chevalier.png')); ?>" class=" p-5 img-fluid" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Admin Chevalier</h1>
                                    </div>
                                    <form class="user" action="<?php echo e(base_url('auth/aksi_login')); ?>" method="post">
                                        <div class="form-group">
                                            <input type="username" class="form-control form-control-user" name="username" id="username" class="form-control" placeholder="Phone number or email address" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" name="password" id="password" class="form-control" placeholder="password" />
                                        </div>
                                        <?php if($login_error): ?>
                                        <div class="error-message">
                                            <p class="text-danger"><?php echo e($login_error); ?></p>
                                        </div>
                                        <?php endif; ?>
                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-block fa-lg gradient-custom-2 mb-3" type="submit">Log in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.all.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo e(assets_url('vendor/jquery/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(assets_url('vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo e(assets_url('vendor/jquery-easing/jquery.easing.min.js')); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo e(assets_url('js/sb-admin-2.min.js')); ?>"></script>

    <!-- Page level plugins -->
    <script src="<?php echo e(assets_url('vendor/chart.js/Chart.min.js')); ?>"></script>


</body>

</html><?php /**PATH C:\xampp7.3\htdocs\chevalier\application\views/admin/login.blade.php ENDPATH**/ ?>