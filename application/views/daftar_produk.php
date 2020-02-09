        <?php
            $CI =& get_instance();
            $RMY = $CI->LibraryRMYModel;
        ?>
        <!-- Start Menu Grid Area -->
        <section class="food__menu__grid__area section-padding--lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="food__nav nav nav-tabs" role="tablist">
                            <a class="tabAll active" id="tabAll">All</a>
                            
                            <?php
                                foreach($kategori as $kategoriView){
                            ?>
                            <a class="tabAll" id="tab<?=$kategoriView['id_tb_kategori']?>" href="<?=base_url('daftar-produk/kategori/').$kategoriView['id_tb_kategori']?>"><?=$kategoriView['tb_kategori_nama']?></a>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="row mt--30">
                    <div class="col-lg-12">
                        <div class="fd__tab__content tab-content" id="nav-tabContent">
                            <!-- Start Single Content -->
                            <div class="food__list__tab__content tab-pane fade show active" id="nav-all" role="tabpanel">

                                <?php
                                    if($result['data'] != null){
                                        foreach($result['data'] as $value){
                                ?>
                                <!-- Start Single Food -->
                                <div class="single__food__list d-flex wow fadeInUp">
                                    <div class="food__list__thumb">
                                        <a href="#" class="product-image">
                                            <img src="<?=base_url('assets/img/produk/medium/medium-').$value['tb_produk_gambar']?>" alt="list food images">
                                        </a>
                                    </div>
                                    <div class="food__list__inner d-flex align-items-center justify-content-between product-desc-right">
                                        <div class="food__list__details">
                                            <h2><a href="#"><?=$value['tb_produk_nama']?></a></h2>
                                            <p><?=$RMY->_splitText($value['tb_produk_deskripsi'])?></p>
                                            <div class="list__btn">
                                                <?php
                                                    if(isset($_SESSION['id_tb_anggota'])){
                                                ?>
                                                <a class="food__btn grey--btn theme--hover" href="<?=base_url('keranjang/view/').$value['id_tb_produk']?>">Beli Sekarang</a>
                                                <a class="food__btn grey--btn theme--hover" href="<?=base_url('keranjang/').$value['id_tb_produk']?>">Keranjang Belanja</a>
                                                <?php
                                                    }else{
                                                ?>
                                               <a class="accountbox-trigger food__btn grey--btn theme--hover" href="#">Masuk Dulu</a>
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="food__rating">
                                            <div class="list__food__prize">
                                                <span><?=number_format($value['tb_produk_harga_jual'], '0','','.')?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Food -->
                                <?php
                                        }
                                    }else{
                                ?>
                                <h4>Produk Kosong.</h4>
                                <?php
                                    }
                                ?>

                            </div>
                            <!-- End Single Content -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <?=$result['pagination']?>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Menu Grid Area -->

        <script>
            // menu active
            var allTab = $('.tabAll')
            var tabAll = $('#tabAll')
            var myTab = $('#tab<?=$result['tab']?>')

            allTab.removeClass('active')
            tabAll.attr('href', '<?=base_url('daftar-produk/')?>')
            myTab.addClass('active')
            myTab.removeAttr('href')
            // end
        </script>