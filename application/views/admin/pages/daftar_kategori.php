<?php
                        $CI =& get_instance();
                        $RMY = $CI->LibraryRMYModel;
                    ?>
                    <!-- Page Inner -->
                    <div class="page-inner">
                        <div class="page-title">
                            <h3 class="breadcrumb-header">Daftar Kategori</h3>
                        </div>
                        <div id="main-wrapper">
                            <div class="row">
                                <form method="POST" action="<?=base_url('admin/produk/daftar-kategori/create')?>" name="form_tambah_kategori">
                                    <div class="col-lg-12">
                                        <div class="panel-body">
                                            <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-primary">
                                                    <div class="panel-heading" role="tab" id="tambah-produk">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion2" href="#1" aria-expanded="true" aria-controls="collapseOne">
                                                                Tambah Kategori
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="tambah-produk">
                                                        <div class="panel-body">
                                                            <div class="post">
                                                                <div class="m-b-md">
                                                                    <input type="text" id="inputKategori" name="tb_kategori_nama" class="form-control" placeholder="Nama kategori">
                                                                </div>
                                                                <div class="post-options">
                                                                    <button type="submit" class="btn btn-default pull-right">Tambahkan</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="panel panel-white">
                                        <div class="panel-heading clearfix">
                                            <h4 class="panel-title">List Kategori</h4>
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Kategori</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $no = 1;
                                                            foreach($result['data'] as $value){
                                                        ?>
                                                        <tr>
                                                            <th scope="row"><?=$no?></th>
                                                            <td><?=$value['tb_kategori_nama']?></td>
                                                            <td>
                                                                <a href="<?=base_url('admin/produk/daftar-kategori/delete/'.$value['id_tb_kategori'])?>" class="btn btn-danger delete-produk" role="button">Hapus</a>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                                $no++;
                                                            }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <?=$result['pagination']?>
                                        </div>
                                    </div>
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
                        var baseMenu = $('#base2')
                        var subMenu = $('#sub21')

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
                        $('#inputKategori').keydown(function(e){
                            if (e.which === 32){
                                e.preventDefault()
                            }
                        })
                        // end

                        // form validation
                        $(function() {
                            $("form[name='form_tambah_kategori']").validate({
                                ignore: "",
                                rules: {
                                    tb_kategori_nama: "required",
                                },
                                messages: {
                                    tb_kategori_nama: 'Tidak boleh kosong.',
                                },
                                
                                submitHandler: function(form) {
                                    form.submit()
                                }
                            })
                        })
                        // end

                    </script>