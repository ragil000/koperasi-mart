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
        <title>ecaps - Responsive Admin Dashboard Template</title>

        <!-- Styles -->
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
        <link href="<?=base_url('admin/')?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?=base_url('admin/')?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?=base_url('admin/')?>assets/plugins/icomoon/style.css" rel="stylesheet">
        <link href="<?=base_url('admin/')?>assets/plugins/uniform/css/default.css" rel="stylesheet"/>
        <link href="<?=base_url('admin/')?>assets/plugins/switchery/switchery.min.css" rel="stylesheet"/>
        <link href="<?=base_url('admin/')?>assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet">  
      
        <!-- Theme Styles -->
        <link href="<?=base_url('admin/')?>assets/css/ecaps.min.css" rel="stylesheet">
        <link href="<?=base_url('admin/')?>assets/css/custom.css" rel="stylesheet">

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
                            <li class="active-page">
                                <a href="index.html">
                                    <i class="menu-icon icon-home4"></i><span>Dashboard</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-cubes"></i><span>Produk</span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="#">Daftar Produk</a></li>
                                    <li><a href="#">Riwayat Penjualan</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <i class="menu-icon fa fa-users"></i><span>Anggota</span><i class="accordion-icon fa fa-angle-left"></i>
                                </a>
                                <ul class="sub-menu">
                                    <li><a href="layout-blank.html">Daftar Anggota</a></li>
                                    <li><a href="layout-boxed.html">Riwayat Pembelian</a></li>
                                </ul>
                            </li>
                            
                            <li class="menu-divider"></li>
                            <li>
                                <a href="index.html">
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
                                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
                                        <ul class="dropdown-menu dropdown-lg dropdown-content">
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
                                        </ul>
                                    </li>
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?=base_url('assets/img/profil/default.png')?>" alt="" class="img-circle"></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Pengaturan Akun</a></li>
                                            <li><a href="#">Keluar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div><!-- /Page Header -->
                <!-- Page Inner -->
                <div class="page-inner">
                    <div class="page-title">
                        <h3 class="breadcrumb-header">Dashboard</h3>
                    </div>
                    <div id="main-wrapper">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-white stats-widget">
                                    <div class="panel-body">
                                        <div class="pull-left">
                                            <span class="stats-number">$781,876</span>
                                            <p class="stats-info">Total Pendapatan</p>
                                        </div>
                                        <div class="pull-right">
                                            <i class="icon-arrow_upward stats-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-white stats-widget">
                                    <div class="panel-body">
                                        <div class="pull-left">
                                            <span class="stats-number">578,100</span>
                                            <p class="stats-info">Kredit Belum Lunas</p>
                                        </div>
                                        <div class="pull-right">
                                            <i class="icon-arrow_downward stats-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-white stats-widget">
                                    <div class="panel-body">
                                        <div class="pull-left">
                                            <span class="stats-number">+23,356</span>
                                            <p class="stats-info">Pembeli Hari Ini</p>
                                        </div>
                                        <div class="pull-right">
                                            <i class="icon-arrow_upward stats-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-white stats-widget">
                                    <div class="panel-body">
                                        <div class="pull-left">
                                            <span class="stats-number">58%</span>
                                            <p class="stats-info">Total Produk Terjual</p>
                                        </div>
                                        <div class="pull-right">
                                            <i class="icon-arrow_downward stats-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-lg-8 col-md-12">
                                <div class="panel panel-white">
                                    <div class="panel-heading clearfix">
                                        <h4 class="panel-title">Produk Terbanyak Terjual</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div id="chart1"><svg></svg></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="panel panel-white">
                                    <div class="panel-heading clearfix">
                                        <h4 class="panel-title">Projects</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="project-stats">
                                            <ul class="list-unstyled">
                                                <li>Alpha - Admin Template<span class="label label-default pull-right">85%</span></li>
                                                <li>Meteor - Landing Page<span class="label label-success pull-right">Finished</span></li>
                                                <li>Modern - Corporate Website<span class="label label-success pull-right">Finished</span></li>
                                                <li>ecaps - Admin Template<span class="label label-danger pull-right">Rejected</span></li>
                                                <li>Backend UI<span class="label label-default pull-right">27%</span></li>
                                            </ul>
                                            <button type="button" class="btn btn-primary">Lihat Semua <i class="fa fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Row -->
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="panel panel-white">
                                    <div class="panel-heading clearfix">
                                        <h4 class="panel-title">Pembayaran</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive invoice-table">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">0567</th>
                                                        <td>Kenny Highland</td>
                                                        <td><span class="label label-success">Finished</span></td>
                                                        <td>$427</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">0186</th>
                                                        <td>Darrell Price</td>
                                                        <td>Twitter</td>
                                                        <td><span class="label label-success">Finished</span></td>
                                                        <td>$1714</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">0712</th>
                                                        <td>Richard Lunsford</td>
                                                        <td>Facebook</td>
                                                        <td><span class="label label-danger">Denied</span></td>
                                                        <td>$685</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">0095</th>
                                                        <td>Amy Walker</td>
                                                        <td>Youtube</td>
                                                        <td><span class="label label-warning">Pending</span></td>
                                                        <td>$9900</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">1054</th>
                                                        <td>Kathy Olson</td>
                                                        <td>Youtube</td>
                                                        <td><span class="label label-default">Upcoming</span></td>
                                                        <td>$1250</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">0043</th>
                                                        <td>Susan Mabry</td>
                                                        <td>Instagram</td>
                                                        <td><span class="label label-default">Upcoming</span></td>
                                                        <td>$399</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- Row -->
                    </div><!-- Main Wrapper -->
                    <div class="page-footer">
                        <!-- <p>Dibuat oleh <a href="#" class="codexv">codeXV</a></p> -->
                    </div>
                </div><!-- /Page Inner -->
            </div><!-- /Page Content -->
        </div><!-- /Page Container -->
        
        
        <!-- Javascripts -->
        <script src="<?=base_url('admin/')?>assets/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="<?=base_url('admin/')?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?=base_url('admin/')?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?=base_url('admin/')?>assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
        <script src="<?=base_url('admin/')?>assets/plugins/switchery/switchery.min.js"></script>
        <script src="<?=base_url('admin/')?>assets/plugins/d3/d3.min.js"></script>
        <script src="<?=base_url('admin/')?>assets/plugins/nvd3/nv.d3.min.js"></script>
        <script src="<?=base_url('admin/')?>assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="<?=base_url('admin/')?>assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="<?=base_url('admin/')?>assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="<?=base_url('admin/')?>assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="<?=base_url('admin/')?>assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="<?=base_url('admin/')?>assets/plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="<?=base_url('admin/')?>assets/plugins/chartjs/chart.min.js"></script>
        <script src="<?=base_url('admin/')?>assets/js/ecaps.min.js"></script>
        <script src="<?=base_url('admin/')?>assets/js/pages/dashboard.js"></script>
    </body>
</html>