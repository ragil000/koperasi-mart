        <?php
            $CI =& get_instance();
            $RMY = $CI->LibraryRMYModel;
        ?>
        <!-- Start Menu Grid Area -->
        <section class="food__menu__grid__area section-padding--lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section__title title__style--2 service__align--center">
                            <h2 class="title__line">Profil</h2>
                            <p> Primer koperasi kepolisian resort kendari merupakan sebuah koperasi yang berdiri sejak tahun 1900 yang bergerak dibidang serba usaha yang bertujuan untuk melayani masyarakat dan anggota dalam hal menyediakan kebutuhan-kebutuhan anggota koperasi dengan harga yang lebih murah dan terjangkau.
Alamat : Jalan D.I Panjaitan nomor 1 Kendari, 93116
Badan Hukum Nomor : 480 / KWK - 21 / X / 1996
Kontak yang bisa dihubungi : +62821-5405-6402
Facebook: Primer Koperasi kepolisian resort kendari </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Menu Grid Area -->

        <script>
            // menu active
            var allTab = $('.tabAll')
            var tabAll = $('#tabAll')
            var myTab = $('#tab<?=@$result['tab']?>')

            allTab.removeClass('active')
            tabAll.attr('href', '<?=base_url('daftar-anggota/')?>')
            myTab.addClass('active')
            myTab.removeAttr('href')
            // end
        </script>