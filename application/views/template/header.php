<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Primer Mart</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="<?=base_url('assets/img/logo/logo-single.png')?>">
	<link rel="apple-touch-icon" href="<?=base_url('assets/img/logo/logo-single.png')?>">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?=base_url('depan/')?>css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url('depan/')?>css/plugins.css">
	<link rel="stylesheet" href="<?=base_url('depan/')?>style.css">

	<!-- Cusom css -->
   <link rel="stylesheet" href="<?=base_url('depan/')?>css/custom.css">

	<!-- Modernizer js -->
    <script src="<?=base_url('depan/')?>js/vendor/modernizr-3.5.0.min.js"></script>
    
    <!-- jquery -->
    <script src="<?=base_url('depan/')?>js/vendor/jquery-3.2.1.min.js"></script>
    
</head>
<body>
	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Start Header Area -->
        <header class="htc__header bg--white">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-sm-4 col-md-6 order-1 order-lg-1">
                            <div class="logo">
                                <a href="#">
                                    <img src="<?=base_url('assets/img/logo/logo.png')?>" alt="logo images">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-4 col-md-2 order-3 order-lg-2">
                            <div class="main__menu__wrap">
                                <nav class="main__menu__nav d-none d-lg-block">
                                    <ul class="mainmenu">
                                        <li class="drop"><a href="<?=base_url('daftar-produk')?>">Daftar Produk</a>
                                            <ul class="dropdown__menu">
                                                <?php
                                                    foreach($kategori as $kate){
                                                ?>
                                                <li><a href="<?=base_url('daftar-produk/kategori/'.$kate['id_tb_kategori'])?>"><?=ucwords($kate['tb_kategori_nama'])?></a></li>
                                                <?php
                                                    }
                                                ?>
                                            </ul>
                                        </li>
                                        <li><a href="<?=base_url('daftar-keranjang')?>">Keranjang Belanja</a></li>
                                    </ul>
                                </nav>
                                
                            </div>
                        </div>
                        <div class="col-lg-1 col-sm-4 col-md-4 order-2 order-lg-3">
                            <div class="header__right d-flex justify-content-end">
                                <div class="log__in">
                                    <a class="accountbox-trigger" href="#"><i class="zmdi zmdi-account-o"></i></a>
                                </div>
                                <div class="shopping__cart">
                                    <!-- <a class="minicart-trigger" href="#"><i class="zmdi zmdi-shopping-basket"></i></a>
                                    <div class="shop__qun">
                                        <span>03</span>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                        <div class="mobile-menu d-block d-lg-none"></div>
                    <!-- Mobile Menu -->
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Area -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area bg-image--18">
            <div class="ht__bradcaump__wrap d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="bradcaump__inner text-center">
                                <h2 class="bradcaump-title">Primer Koperasi Polres Kendari</h2>
                                <nav class="bradcaump-inner">
                                  <!-- <span class="breadcrumb-item text-primary active">POLRES RESOR Kendari</span> -->
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->