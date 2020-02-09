<?php
                        $CI =& get_instance();
                        $RMY = $CI->LibraryRMYModel;
                    ?>
                    <!-- Page Inner -->
                    <div class="page-inner">
                        <div class="page-title">
                            <h3 class="breadcrumb-header">List Transaksi Masuk</h3>
                        </div>
                        <div id="main-wrapper">
                            <div class="row">
                                <?php
                                    foreach($result['data'] as $value){
                                ?>
                                <div class="col-lg-12">
                                    <div class="panel panel-white">
                                        <div class="panel-heading clearfix">
                                            <h4 class="panel-title"><?=$value['tb_transaksi_kode']?></h4>
                                        </div>
                                        <div class="panel-body">
                                            <div class="project-stats">
                                                <ul class="list-unstyled">
                                                    <li>Nama <span class="label label-primary pull-right"><?=$value['tb_transaksi_nama']?></span></li>
                                                    <li>Metode Transaksi <span class="label label-success pull-right"><?=$value['tb_transaksi_metode']?></span></li>
                                                    <?php
                                                        if($value['tb_transaksi_metode'] == 'cod'){
                                                    ?>
                                                    <li>Alamat <span class="label label-success pull-right"><?=$value['tb_transaksi_alamat']?></span></li>
                                                    <?php
                                                        }

                                                        if($value['tb_transaksi_kredit'] == '0'){
                                                    ?>
                                                    <li>Metode Pembayaran <span class="label label-success pull-right">Lunas</span></li>
                                                    <?php
                                                        }else{
                                                    ?>
                                                    <li>Metode Pembayaran<span class="label label-danger pull-right">Kredit (<?=$value['tb_transaksi_kredit']?> x bayar)</span></li>
                                                    <?php
                                                        }
                                                    ?>
                                                    <li>Total Bayar<span class="label label-danger pull-right"><?=$value['tb_transaksi_bayar']?></span></li>
                                                    <li>PRODUK<span class="label label-default pull-right"></span></li>
                                                    <?php
                                                        foreach($value['produk'] as $re){
                                                    ?>
                                                    <li><?=$re['tb_produk_nama']?><span class="label label-success pull-right"><?=$re['tb_relasi_transaksi_banyak']?></span></li>
                                                    <?php
                                                        }
                                                    ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                                <div class="col-lg-12">
                                    <?=$result['pagination']?>
                                </div>
                            </div>
                        </div><!-- Main Wrapper -->
                        <div class="page-footer">
                            <!-- <p>Dibuat oleh <a href="#" class="codexv">codeXV</a></p> -->
                        </div>
                    </div><!-- /Page Inner -->

                    <script>

                        // menu active
                        var allBaseMenu = $('.base-menu')
                        var allSubMenu = $('.base-sub-menu')
                        var baseMenu = $('#base3')
                        var subMenu = $('#sub31')

                        allBaseMenu.removeClass('active-page')
                        allSubMenu.removeClass('active')
                        baseMenu.addClass('active-page')
                        subMenu.addClass('active')
                        // end

                        // delete
                        $('.delete-produk').click(function(e){
                            e.preventDefault();
                            let link = $(this).attr('href');
                            Swal.fire({
                                title: 'Peringatan!',
                                text: "Anda tidak bisa mengembalikan data yang sudah terhapus!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Tetap Hapus',
                                cancelButtonText: 'Batal'
                            }).then((result) => {
                                if (result.value) {
                                    window.location.href = link;
                                }
                            });
                        });
                        // end

                        // tidak boleh input spasi first
                        $('#inputNama').keydown(function(e){
                            if (e.which === 32){
                                e.preventDefault()
                            }
                        })
                        $('#inputUsername').keydown(function(e){
                            if (e.which === 32){
                                e.preventDefault()
                            }
                        })
                        $('#inputPassword').keydown(function(e){
                            if (e.which === 32){
                                e.preventDefault()
                            }
                        })
                        // end

                        // form validation
                        $(function() {
                            $("form[name='form_tambah_anggota']").validate({
                                ignore: "",
                                rules: {
                                    tb_anggota_nama: "required",
                                    tb_anggota_username: "required",
                                    tb_anggota_password: "required",
                                },
                                messages: {
                                    tb_anggota_nama: 'Tidak boleh kosong.',
                                    tb_anggota_username: 'Tidak boleh kosong.',
                                    tb_anggota_password: 'Tidak boleh kosong.',
                                },
                                
                                submitHandler: function(form) {
                                    form.submit()
                                }
                            })
                        })
                        // end

                    </script>