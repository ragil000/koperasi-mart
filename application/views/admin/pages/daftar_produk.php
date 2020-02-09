                    <?php
                        $CI =& get_instance();
                        $RMY = $CI->LibraryRMYModel;
                    ?>
                    <!-- Page Inner -->
                    <div class="page-inner">
                        <div class="page-title">
                            <h3 class="breadcrumb-header">Daftar Produk</h3>
                        </div>
                        <div id="main-wrapper">
                            <div class="row">
                                <form method="POST" action="<?=base_url('admin/produk/daftar-produk/create')?>" enctype="multipart/form-data" name="form_tambah_produk">
                                    <div class="col-lg-12">
                                        <div class="panel-body">
                                            <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-primary">
                                                    <div class="panel-heading" role="tab" id="tambah-produk">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion2" href="#1" aria-expanded="true" aria-controls="collapseOne">
                                                                Tambah Produk
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="tambah-produk">
                                                        <div class="panel-body">
                                                            <div class="post">
                                                                <div class="form-group">
                                                                    <p id="alert-tambah-kategori" class="text-danger"></p>
                                                                    <input type="text" id="inputKategori" name="tb_kategori_nama_array" value="" placeholder="Tulis kategori (kemudian enter)" data-role="tagsinput" class="form-control" style="display: none;">
                                                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                                        <div class="panel panel-default">
                                                                            <div class="panel-heading" role="tab" id="headingOne">
                                                                                <h4 class="panel-title">
                                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                                                                                        List Kategori (klik untuk melihat)
                                                                                    </a>
                                                                                </h4>
                                                                            </div>
                                                                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne" aria-expanded="false" style="height: 0px;">
                                                                                <div class="panel-body">
                                                                                    <?php
                                                                                        foreach($kategori as $kategoriView){
                                                                                    ?>
                                                                                    <span class="tag label label-info"><?=$kategoriView['tb_kategori_nama']?></span>
                                                                                    <?php
                                                                                        }
                                                                                    ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row m-b-md">
                                                                    <div class="col-lg-4">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon" id="basic-addon1">Rp.</span>
                                                                            <input type="text" id="inputHargaAsli" name="tb_produk_harga_asli" class="form-control" placeholder="Harga asli (misal 1500)" aria-describedby="basic-addon1">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon" id="basic-addon1">Rp.</span>
                                                                            <input type="text" id="inputHargaJual" name="tb_produk_harga_jual" class="form-control" placeholder="Harga jual (misal 2000)" aria-describedby="basic-addon1">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-4">
                                                                        <div class="input-group">
                                                                            <span class="input-group-addon" id="basic-addon1">@</span>
                                                                            <input type="text" id="inputJumlahProduk" name="tb_produk_jumlah" class="form-control" placeholder="Jumlah barang (misal 20)" aria-describedby="basic-addon1">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="m-b-md">
                                                                    <input type="text" id="inputNamaProduk" name="tb_produk_nama" class="form-control" placeholder="Nama produk">
                                                                </div>
                                                                <textarea id="inputDeskripsiProduk" name="tb_produk_deskripsi" class="form-control" placeholder="Tulis deskripsi produk" rows="4"></textarea>
                                                                <div class="post-options">
                                                                    <div class="panel-body border border-danger">
                                                                        <div class="row">
                                                                            <div class="col-lg-3">
                                                                                <div class="panel-heading clearfix product-image preview-image">
                                                                                    
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <p id="alert-tambah-gambar" class="text-danger"></p>
                                                                    <input id="tambahGambar" name="tb_produk_gambar" type="file" class="form-control hidden">
                                                                    <a href="#" id="klik-tambah-gambar"><i class="fa fa-camera"></i></a>
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
                                <?php
                                    foreach($result['data'] as $value){
                                ?>
                                <div class="col-sm-12 col-md-6 col-lg-3">
                                    <div class="panel panel-white">
                                        <div class="panel-heading clearfix product-image">
                                            <img class="card-img-top" src="<?=base_url('assets/img/produk/small/small-').$value['tb_produk_gambar']?>" alt="Card image cap">
                                        </div>
                                        <div class="panel-body">
                                            <div class="product-name">
                                                <h5 class="text-primary text-uppercase"><?=$value['tb_produk_nama']?></h5>
                                            </div>
                                            <div class="product-description">
                                                <p><?=$RMY->_splitText($value['tb_produk_deskripsi'], 75)?></p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="btn-group btn-group-justified" role="group" aria-label="Justified button group">
                                                <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?=$value['id_tb_produk']?>">Detail</a>
                                                <a href="<?=base_url('admin/produk/daftar-produk/delete/'.$value['id_tb_produk'])?>" class="btn btn-danger delete-produk" role="button">Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- modal -->
                                <div class="modal fade" id="myModal<?=$value['id_tb_produk']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Detail Produk</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <div class="panel-heading clearfix product-image-view">
                                                            <img class="card-img-top" src="<?=base_url('assets/img/produk/medium/medium-').$value['tb_produk_gambar']?>" alt="Card image cap">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <table class="table table-striped">
                                                            <tbody>
                                                                <tr>
                                                                    <th scope="row">Nama</th>
                                                                    <td><?=$value['tb_produk_nama']?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Jumlah Produk</th>
                                                                    <td><?=$value['tb_produk_jumlah']?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Harga Asli</th>
                                                                    <td><?=$value['tb_produk_harga_asli']?></td>
                                                                </tr>
                                                                <tr>
                                                                    <th scope="row">Harga Jual</th>
                                                                    <td><?=$value['tb_produk_harga_jual']?></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <?php
                                                            foreach($value['tb_kategori_nama_array'] as $kategoriNama){
                                                        ?>
                                                        <span class="tag label label-info"><?=$kategoriNama?></span>
                                                        <?php
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                                <div class="row m-t-md">
                                                    <div class="col-lg-12">
                                                        <?=$value['tb_produk_deskripsi']?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end -->

                                <?php
                                    }
                                ?>
                                
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <?=$result['pagination']?>
                                </div>                                
                            </div>
                        </div><!-- Main Wrapper -->
                        <div class="page-footer">
                            <!-- <p>Dibuat oleh <a href="#" class="codexv">codeXV</a></p> -->
                        </div>
                    </div><!-- /Page Inner -->

                    <script>

                        // hide alert notif
                        $('#alert-tambah-produk').delay(1000).fadeOut()
                        // end

                        // menu active
                        var allBaseMenu = $('.base-menu')
                        var allSubMenu = $('.base-sub-menu')
                        var baseMenu = $('#base2')
                        var subMenu = $('#sub22')

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
                            // alert(link);
                        });
                        // end

                        // membuat tombol input gambar
                        $('#klik-tambah-gambar').click(function(e){
                            e.preventDefault()
                            $('#tambahGambar').click()
                        })
                        // end

                        // membuat preview gambar sebelum diupload
                        function viewGambar(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader()
                            
                                reader.onload = function (e) {
                                    let str = input.files[0].type
                                    let split = str.split(/[/+]/)
                                    let type = split[1]
                                    let size = input.files[0].size
                                    console.log(type)
                                    if(type != 'jpg' && type != 'jpeg' && type != 'png'){
                                        $('#tambahGambar').val('')
                                        $('.preview-image').empty()
                                        $('#alert-tambah-gambar').empty()
                                        $('#alert-tambah-gambar').text('Ini adalah jenis file yang tidak diizinkan.')
                                    }else{
                                        if(size <= 2000000){
                                            let img = '<img class="card-img-top" src="'+e.target.result+'" alt="gambar produk">'
                                            $('.preview-image').empty()
                                            $('#alert-tambah-gambar').empty()
                                            $('.preview-image').append(img)
                                        }else{
                                            $('#tambahGambar').val('')
                                            $('.preview-image').empty()
                                            $('#alert-tambah-gambar').empty()
                                            $('#alert-tambah-gambar').text('Gambar melebihi ukuran maksimal (2MB).')
                                        }
                                    }
                                }
                            
                                reader.readAsDataURL(input.files[0])
                            }
                        }

                        $('#tambahGambar').change(function(){
                            viewGambar(this)
                        })
                        // end

                        // mengecek ke validan tambah kategori
                        $('#inputKategori').change(function(){
                            <?php
                                $arrayK = Array();
                                foreach($kategori as $res){
                                    array_push($arrayK, $res['tb_kategori_nama']);
                                }
                            ?>
                            
                            let array = <?=json_encode($arrayK)?>;

                            let getElementVal = $('.bootstrap-tagsinput > input').val()
                            if(!array.includes(getElementVal) && getElementVal != ''){
                                $('#alert-tambah-kategori').empty()
                                $('#alert-tambah-kategori').text(getElementVal+' tidak ada dalam list kategori.')
                                $('.bootstrap-tagsinput > input').removeAttr('placeholder')
                            }else{
                                $('#alert-tambah-kategori').empty()
                            }

                            let getElement = $('.bootstrap-tagsinput')
                            let childTag = getElement.children().length
                            if(childTag > 1){
                                for(let i = 0; i < childTag-1; i++){
                                    let getTag = getElement.children()[i]
                                    let textTag = $(getTag).text()
                                    if(!array.includes(textTag)){
                                        let getRemoveTag = $(getTag).children()[0]
                                        $(getRemoveTag).click()
                                    }
                                }
                            }
                            
                        })
                        // end

                        // tidak boleh input spasi first
                        $('#inputHargaAsli').keydown(function(e){
                            if (e.which === 32){
                                e.preventDefault()
                            }
                        })

                        $('#inputHargaJual').keydown(function(e){
                            if (e.which === 32){
                                e.preventDefault()
                            }
                        })

                        $('#inputBanyakProduk').keydown(function(e){
                            if (e.which === 32){
                                e.preventDefault()
                            }
                        })

                        $('#inputNamaProduk').keydown(function(e){
                            if (this.value.length === 0 && e.which === 32){
                                e.preventDefault()
                            }
                        })

                        $('#inputDeskripsiProduk').keydown(function(e){
                            if (this.value.length === 0 && e.which === 32){
                                e.preventDefault()
                            }
                        })
                        // end

                        // form validation
                        $(function() {
                            $("form[name='form_tambah_produk']").validate({
                                ignore: "",
                                rules: {
                                    tb_kategori_nama_array: "required",
                                    tb_produk_harga_asli: {
                                        required: true,
                                        number: true
                                    },
                                    tb_produk_harga_jual: {
                                        required: true,
                                        number: true
                                    },
                                    tb_produk_jumlah: {
                                        required: true,
                                        number: true
                                    },
                                    tb_produk_nama: "required",
                                    tb_produk_deskripsi: "required",
                                    tb_produk_gambar: "required",
                                },
                                messages: {
                                    tb_kategori_nama_array: 'Tidak boleh kosong.',
                                    tb_produk_harga_asli: {
                                        required: 'Tidak boleh kosong.',
                                        number: 'Harus diisi dengan angka/numerik.'
                                    },
                                    tb_produk_harga_jual: {
                                        required: 'Tidak boleh kosong.',
                                        number: 'Harus diisi dengan angka/numerik.'
                                    },
                                    tb_produk_jumlah: {
                                        required: 'Tidak boleh kosong.',
                                        number: 'Harus diisi dengan angka/numerik.'
                                    },
                                    tb_produk_nama: 'Tidak boleh kosong.',
                                    tb_produk_deskripsi: 'Tidak boleh kosong.',
                                    tb_produk_gambar: 'Tidak boleh kosong.'
                                },
                                
                                submitHandler: function(form) {
                                    form.submit()
                                }
                            })
                        })
                        // end

                    </script>