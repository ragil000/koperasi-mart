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
                                                <span class="stats-number"><?=$totalTransaksi?></span>
                                                <p class="stats-info">Total Transaksi</p>
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
                                                <span class="stats-number">Rp. <?=number_format($totalSimpananWajib)?></span>
                                                <p class="stats-info">Total Simpanan Wajib</p>
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
                                                <span class="stats-number">Rp. <?=number_format($totalSimpananPokok)?></span>
                                                <p class="stats-info">Total Simpanan Pokok</p>
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
                                                <span class="stats-number"><?=$totalAnggota?></span>
                                                <p class="stats-info">Total Anggota</p>
                                            </div>
                                            <div class="pull-right">
                                                <i class="icon-arrow_downward stats-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- Row -->
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class="panel panel-white">
                                        <div class="panel-heading clearfix">
                                            <h4 class="panel-title">Transaksi</h4>
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive invoice-table">
                                                <table class="table">
                                                    <tbody>
                                                        <?php
                                                            if($transaksi != null){
                                                                foreach($transaksi as $result){
                                                        ?>
                                                        <tr>
                                                            <th scope="row"><?=$result['tb_transaksi_kode']?></th>
                                                            <td><?=$result['tb_transaksi_nama']?></td>
                                                            <td><span class="label label-success">Finished</span></td>
                                                            <td>Rp. <?=number_format($result['tb_transaksi_bayar'])?></td>
                                                        </tr>
                                                        <?php
                                                                }
                                                            }else{
                                                        ?>
                                                        <tr>
                                                            <td colspan="4">
                                                                <p>Belum ada transaksi.</p>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                                }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="row">
                                                    <div class="col-md-12 text-right" style="margin-top:10px;">
                                                    <a href="<?=base_url('admin/transaksi/daftar-transaksi')?>" class="btn btn-success">Lihat Semua <i class="fa fa-arrow-right"></i></a>
                                                    </div>
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

                    <script>
                        // menu active
                        var allBaseMenu = $('.base-menu')
                        var allSubMenu = $('.base-sub-menu')
                        var baseMenu = $('#base1')

                        allBaseMenu.removeClass('active-page')
                        allSubMenu.removeClass('active')
                        baseMenu.addClass('active-page')
                        // end
                    </script>