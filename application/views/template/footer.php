         <!-- Start Footer Area -->
         <footer class="footer__area footer--1">
            <div class="copyright bg--theme">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="copyright__inner">
                                <div class="cpy__right--left">
                                    <p>Primer Koperasi Mart <?=@$_SESSION['id_tb_anggota']?> | <?=date('Y')?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer Area -->
        
        <!-- Login Form -->
        <div class="accountbox-wrapper">
            <div class="accountbox text-left">
                <!-- <ul class="nav accountbox__filters" id="myTab" role="tablist">
                    <li>
                        <a class="active" id="log-tab" data-toggle="tab" href="#log" role="tab" aria-controls="log" aria-selected="true">Masuk</a>
                    </li>
                </ul> -->
                <div class="accountbox__inner tab-content" id="myTabContent">
                    <div class="accountbox__login tab-pane fade show active" id="log" role="tabpanel" aria-labelledby="log-tab">
                        <?php
                            if(!isset($_SESSION['id_tb_anggota'])){
                        ?>
                        <form method="POST" action="<?=base_url('daftar-produk/login')?>">
                            <div class="single-input">
                                <input class="cr-round--lg" name="tb_anggota_username" type="text" placeholder="username">
                            </div>
                            <div class="single-input">
                                <input class="cr-round--lg" name="tb_anggota_password" type="password" placeholder="password">
                            </div>
                            <div class="single-input">
                                <button type="submit" class="food__btn"><span>Masuk</span></button>
                            </div>
                        </form>
                        <?php
                            }else{
                        ?>
                        <a href="<?=base_url('daftar-produk/logout')?>" class="food__btn"><span>Keluar</span></a>
                        <?php
                            }
                        ?>
                    </div>
                    <span class="accountbox-close-button"><i class="zmdi zmdi-close"></i></span>
                </div>
            </div>
        </div><!-- //Login Form -->

	</div><!-- //Main wrapper -->

	<!-- JS Files -->
	<!-- <script src="<?=base_url('depan/')?>js/vendor/jquery-3.2.1.min.js"></script> -->
	<script src="<?=base_url('depan/')?>js/popper.min.js"></script>
	<script src="<?=base_url('depan/')?>js/bootstrap.min.js"></script>
	<script src="<?=base_url('depan/')?>js/plugins.js"></script>
	<script src="<?=base_url('depan/')?>js/active.js"></script>

    <script>
        <?php
            if(!isset($_SESSION['id_tb_anggota'])){
        ?>
                $('.accountbox-trigger').click()
        <?php
            }
        ?>
    </script>
</body>
</html>
