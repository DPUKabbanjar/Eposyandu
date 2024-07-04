<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?= base_url('build/img/icon-posyandu.png'); ?>">

    <title><?= $title; ?></title>

    <!-- Bootstrap -->
    <link href="<?= base_url('vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= base_url('vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="<?= base_url('vendors/google-code-prettify/bin/prettify.min.css') ?>" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?= base_url('vendors/select2/dist/css/select2.min.css') ?>" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?= base_url('vendors/switchery/dist/switchery.min.css') ?>" rel="stylesheet">
    <!-- starrr -->
    <link href="<?= base_url('vendors/starrr/dist/starrr.css') ?>" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url('vendors/bootstrap-daterangepicker/daterangepicker.css') ?>" rel="stylesheet">
    <!-- Toastr alert -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('build/css/toastr.min.css') ?>">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('build/css/custom.min.css') ?>" rel="stylesheet">
    <!-- Added additional styles for top navigation -->
    <style>
        .top_nav {
            background-color: #3498db;
            color: #ffffff;
        }

        .top_nav .nav_toggle {
            color: #ffffff;
        }

        .top_nav .nav-profile {
            color: #ffffff;
        }

        .top_nav .dropdown-menu {
            background-color: #ffffff;
            color: #333333;
        }

        .top_nav .dropdown-menu a {
            color: #333333;
        }

        .top_nav .dropdown-menu a:hover {
            background-color: #f5f5f5;
            color: #333333;
        }
    </style>
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="<?= base_url('build/img/profile/') . $user['image']; ?>" alt="Profile Image">
                                    <?= $user['name']; ?>
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?= base_url('user/profile') ?>">Profile</a>
                                    <a class="dropdown-item tbl-logout" href="<?= base_url('login/logout') ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->

            <!-- Your content goes here -->

        </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url('vendors/jquery/dist/jquery.min.js') ?>"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('vendors/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- FastClick -->
    <script src="<?= base_url('vendors/fastclick/lib/fastclick.js') ?>"></script>
    <!-- NProgress -->
    <script src="<?= base_url('vendors/nprogress/nprogress.js') ?>"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="<?= base_url('vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js') ?>"></script>
    <script src="<?= base_url('vendors/jquery.hotkeys/jquery.hotkeys.js') ?>"></script>
    <!-- jQuery Tags Input -->
    <script src="<?= base_url('vendors/jquery.tagsinput/src/jquery.tagsinput.js') ?>"></script>
    <!-- Switchery -->
    <script src="<?= base_url('vendors/switchery/dist/switchery.min.js') ?>"></script>
    <!-- Select2 -->
    <script src="<?= base_url('vendors/select2/dist/js/select2.full.min.js') ?>"></script>
    <!-- jQuery autocomplete -->
    <script src="<?= base_url('vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js') ?>"></script>
    <!-- starrr -->
    <script src="<?= base_url('vendors/starrr/dist/starrr.js') ?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?= base_url('vendors/moment/min/moment.min.js') ?>"></script>
    <script src="<?= base_url('vendors/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?= base_url('build/js/custom.min.js') ?>"></script>
    <!-- Toastr alert -->
    <script src="<?= base_url('build/js/toastr.min.js') ?>"></script>
</body>

</html>
