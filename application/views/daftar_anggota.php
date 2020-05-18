        <?php
            $CI =& get_instance();
            $RMY = $CI->LibraryRMYModel;
        ?>
        <!-- Start Menu Grid Area -->
        <section class="food__menu__grid__area section-padding--lg">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-lg-12">
                        <div class="section__title title__style--2 service__align--center">
                            <h2 class="title__line">Daftar Anggota</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr class="title-top">
                                        <th class="product-name">No</th>
                                        <th class="product-name">Nama</th>
                                        <th class="product-name">Username</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $i=1;
                                        foreach($result['data'] as $value){
                                    ?>
                                    <tr>
                                        <td class="product-name"><?=$i?></td>
                                        <td class="product-name"><?=$value['tb_anggota_nama']?></td>
                                        <td class="product-name"><?=$value['tb_anggota_username']?></td>
                                    </tr>
                                    <?php
                                            $i++;
                                        }
                                    ?>
                                    <tr>
                                        <td colspan="3">
                                            <?=$result['pagination']?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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