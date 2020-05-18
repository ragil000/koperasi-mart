<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Responsive Admin Dashboard Template">
        <meta name="keywords" content="admin,dashboard">
        <meta name="author" content="skcats">
        <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Title -->
        <title>Primer Koperasi</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="<?=base_url('adminT/')?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?=base_url('adminT/')?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?=base_url('adminT/')?>assets/plugins/icomoon/style.css" rel="stylesheet">
        <link href="<?=base_url('adminT/')?>assets/plugins/uniform/css/default.css" rel="stylesheet"/>
        <link href="<?=base_url('adminT/')?>assets/plugins/switchery/switchery.min.css" rel="stylesheet"/>
        <link href="<?=base_url('adminT/')?>assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet">
        <link href="<?=base_url('adminT/')?>assets/plugins/summernote-master/summernote.css" rel="stylesheet" type="text/css"/>
        <link href="<?=base_url('adminT/')?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>
        <link href="<?=base_url('adminT/')?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css"/>
        <link href="<?=base_url('adminT/')?>assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
        <link href="<?=base_url('adminT/')?>assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="<?=base_url('adminT/')?>assets/css/ecaps.min.css" rel="stylesheet">
        <link href="<?=base_url('adminT/')?>assets/css/custom.css" rel="stylesheet">

        <!-- jquery -->
        <script src="<?=base_url('adminT/')?>assets/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="<?=base_url('adminT/')?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>

        <!-- sweet alert -->
        <!-- <link href="<?=base_url('adminT/')?>assets/plugins/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet" type="text/css"/> -->
        <script src="<?=base_url('adminT/')?>assets/plugins/sweetalert2/dist/sweetalert2.all.min.js"></script>

    </head>
    <body class="page-header-fixed">
        
        <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar">
                <a class="logo-box" href="<?base_url('admin/dashboard/')?>">
                    <span>Primer</span>
                    <!-- <i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i> -->
                    <i class="icon-close" id="sidebar-toggle-button-close"></i>
                </a>
                <div class="page-sidebar-inner">
                    <div class="page-sidebar-menu">
                        <ul class="accordion-menu">
                            <li id="base1" class="base-menu active-page">
                                <a id="sub11" href="<?=base_url('admin/dashboard')?>">
                                    <i class="menu-icon icon-home4"></i><span>Dashboard</span>
                                </a>
                            </li>
                            <li id="base2" class="base-menu ">
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-cubes"></i><span>Produk</span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a id="sub21" href="<?=base_url('admin/produk/daftar-kategori')?>" class="base-sub-menu ">Daftar Kategori</a></li>
                                    <li><a id="sub22" href="<?=base_url('admin/produk/daftar-produk')?>" class="base-sub-menu ">Daftar Produk</a></li>
                                    <!-- <li><a id="sub23" href="<?=base_url('admin/produk/riwayat-produk-terjual')?>" class="base-sub-menu ">Riwayat Produk Terjual</a></li> -->
                                </ul>
                            </li>
                            <li id="base3" class="base-menu ">
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-balance-scale"></i><span>Transaksi</span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a id="sub31" href="<?=base_url('admin/transaksi/daftar-transaksi')?>" class="base-sub-menu ">Transaksi Masuk</a></li>
                                    <!-- <li><a id="sub32" href="<?=base_url('admin/produk/daftar-produk')?>" class="base-sub-menu ">Daftar Kredit</a></li> -->
                                    <!-- <li><a id="sub33" href="<?=base_url('admin/produk/riwayat-produk-terjual')?>" class="base-sub-menu ">Riwayat Transaksi</a></li> -->
                                </ul>
                            </li>
                            <li id="base4" class="base-menu ">
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-users"></i><span>Anggota</span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a id="sub41" href="<?=base_url('admin/anggota/daftar-anggota')?>" class="base-sub-menu ">Daftar Anggota</a></li>
                                    <li><a id="sub42" href="<?=base_url('admin/anggota/daftar-simpanan-wajib')?>" class="base-sub-menu ">Simpanan Wajib</a></li>
                                    <li><a id="sub43" href="<?=base_url('admin/anggota/daftar-simpanan-pokok')?>" class="base-sub-menu ">Simpanan Pokok</a></li>
                                </ul>
                            </li>
                            
                            <li class="menu-divider"></li>
                            <li>
                                <a href="<?=base_url('admin/logout')?>">
                                    <i class="menu-icon fa fa-sign-out"></i><span>Keluar</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- /Page Sidebar -->
            
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="search-form">
                        <form action="#" method="GET">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control search-input" placeholder="cari produk">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" id="close-search" type="button"><i class="icon-close"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <div class="logo-sm">
                                    <a href="javascript:void(0)" id="sidebar-toggle-button"><i class="fa fa-bars"></i></a>
                                    <a class="logo-box" href="<?base_url('admin/dashboard/')?>"><span>Primer</span></a>
                                </div>
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <i class="fa fa-angle-down"></i>
                                </button>
                            </div>
                        
                            <!-- Collect the nav links, forms, and other content for toggling -->
                        
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i class="fa fa-bars"></i></a></li>
                                    <li><a href="javascript:void(0)" id="toggle-fullscreen"><i class="fa fa-expand"></i></a></li>
                                    <li><a href="javascript:void(0)" id="search-button"><i class="fa fa-search"></i></a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <!-- <li><a href="javascript:void(0)" class="right-sidebar-toggle" data-sidebar-id="main-right-sidebar"><i class="fa fa-envelope"></i></a></li> -->
                                    <li class="dropdown">
                                        <!-- <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a> -->
                                        <!-- <ul class="dropdown-menu dropdown-lg dropdown-content">
                                            <li class="drop-title">Notifications<a href="#" class="drop-title-link"><i class="fa fa-angle-right"></i></a></li>
                                            <li class="slimscroll dropdown-notifications">
                                                <ul class="list-unstyled dropdown-oc">
                                                    <li>
                                                        <a href="#"><span class="notification-badge bg-primary"><i class="fa fa-photo"></i></span>
                                                            <span class="notification-info">Finished uploading photos to gallery <b>"South Africa"</b>.
                                                                <small class="notification-date">20:00</small>
                                                            </span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><span class="notification-badge bg-primary"><i class="fa fa-at"></i></span>
                                                            <span class="notification-info"><b>John Doe</b> mentioned you in a post "Update v1.5".
                                                                <small class="notification-date">06:07</small>
                                                            </span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><span class="notification-badge bg-danger"><i class="fa fa-bolt"></i></span>
                                                            <span class="notification-info">4 new special offers from the apps you follow!
                                                                <small class="notification-date">Yesterday</small>
                                                            </span></a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><span class="notification-badge bg-success"><i class="fa fa-bullhorn"></i></span>
                                                            <span class="notification-info">There is a meeting with <b>Ethan</b> in 15 minutes!
                                                                <small class="notification-date">Yesterday</small>
                                                            </span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul> -->
                                    </li>
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?=base_url('assets/img/profil/default.png')?>" alt="" class="img-circle"></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="<?=base_url('admin/logout')?>">Keluar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div><!-- /Page Header -->