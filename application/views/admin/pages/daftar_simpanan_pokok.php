<?php
    $CI =& get_instance();
    $RMY = $CI->LibraryRMYModel;
?>
                    <!-- Page Inner -->
                    <div class="page-inner">
                        <div class="page-title">
                            <h3 class="breadcrumb-header">Daftar Simpanan Pokok</h3>
                        </div>
                        <div id="main-wrapper">
                            <div class="row">
                                <form method="POST" action="<?=base_url('admin/anggota/daftar-simpanan-pokok/create')?>" id="form_tambah_simpanan" name="form_tambah_simpanan">
                                    <div class="col-lg-12 text-right">
                                        <button type="button" class="btn btn-success" style="margin-bottom: 8px;" data-toggle="modal" data-target="#tambah-wajib">
                                            <i class="fa fa-plus"></i> Tambah
                                        </button>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="modal fade" id="tambah-wajib" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                        <h4 class="modal-title" id="myModalLabel">Tambah Simpanan Pokok</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <select style="margin-bottom:15px;" class="form-control" name="id_tb_anggota">
                                                            <?php
                                                                foreach($anggotas as $anggota) {
                                                            ?>
                                                            <option value="<?=$anggota['id_tb_anggota']?>"><?=$anggota['tb_anggota_nama']?></option>
                                                            <?php
                                                                }
                                                            ?>
                                                        </select>
                                                        <div class="input-group">
                                                            <span class="input-group-addon" id="basic-addon1">Rp.</span>
                                                            <input type="text" id="inputSimpanan" name="tb_simpanan_jumlah" class="form-control" placeholder="Jumlah simpanan" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="sumbit" onclick="simpan()" class="btn btn-success" data-dismiss="modal">Simpan</button>
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
                                            <h4 class="panel-title">List Simpanan Pokok</h4>
                                        </div>
                                        <div class="panel-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Anggota</th>
                                                            <th>Total Simpanan</th>
                                                            <!-- <th>Aksi</th> -->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $no = 1;
                                                            foreach($result['data'] as $value){
                                                        ?>
                                                        <tr>
                                                            <th scope="row"><?=$no?></th>
                                                            <td><?=$value['tb_anggota_nama']?></td>
                                                            <td>Rp. <?=number_format($value['tb_simpanan_jumlah'])?></td>
                                                            <!-- <td>
                                                                <a href="#" class="btn btn-danger delete-produk" role="button">Hapus</a>
                                                            </td> -->
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
                        var baseMenu = $('#base4')
                        var subMenu = $('#sub43')

                        allBaseMenu.removeClass('active-page')
                        allSubMenu.removeClass('active')
                        baseMenu.addClass('active-page')
                        subMenu.addClass('active')
                        // end

                        function simpan(){
                            let link = $('#form_tambah_simpanan').attr('action')
                            let data = $('#form_tambah_simpanan').serialize()
                            let save = $.ajax({
                                            async: false,
                                            type: "POST",
                                            url: link,
                                            data: data,
                                            dataType: 'JSON',
                                            success: function(response) {
                                                result = response
                                            },
                                            error: function(e) {
                                                console.log(e.responseText)
                                            }
                                        })
                            $.when(save).then(
                                window.location.reload(2)
                            )
                        }

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
                        $('#inputSimpanan').keydown(function(e){
                            if (e.which === 32){
                                e.preventDefault()
                            }
                        })
                        // end

                        // form validation
                        $(function() {
                            $("form[name='form_tambah_simpanan']").validate({
                                ignore: "",
                                rules: {
                                    tb_simpanan_jumlah: "required",
                                },
                                messages: {
                                    tb_simpanan_jumlah: 'Tidak boleh kosong.',
                                },
                                
                                submitHandler: function(form) {
                                    form.submit()
                                }
                            })
                        })
                        // end

                    </script>