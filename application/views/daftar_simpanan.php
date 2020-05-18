<div class="cart-main-area section-padding--lg bg--white">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="cartbox__total__area">
                    <div class="cartbox-total d-flex justify-content-between">
                        <ul class="cart__total__list">
                            <li>Simpanan Wajib</li>
                            <li>Simpanan Pokok</li>
                        </ul>
                        <ul class="cart__total__tk">
                            <li>Rp. <?=isset($wajib[0]['tb_simpanan_jumlah']) ? number_format($wajib[0]['tb_simpanan_jumlah']) : 0?></li>
                            <li>Rp. <?=isset($pokok[0]['tb_simpanan_jumlah']) ? number_format($pokok[0]['tb_simpanan_jumlah']) : 0?></li>
                        </ul>
                    </div>
                    <div class="cart__total__amount">
                        <span>Total Simpanan</span>
                        <span>Rp.
                            <?php
                                if(isset($wajib[0]['tb_simpanan_jumlah']) && isset($pokok[0]['tb_simpanan_jumlah'])){
                                    echo $wajib[0]['tb_simpanan_jumlah']+$pokok[0]['tb_simpanan_jumlah'];
                                }else if(isset($wajib[0]['tb_simpanan_jumlah']) && !isset($pokok[0]['tb_simpanan_jumlah'])){
                                    echo $wajib[0]['tb_simpanan_jumlah'];
                                }else if(!isset($wajib[0]['tb_simpanan_jumlah']) && isset($pokok[0]['tb_simpanan_jumlah'])){
                                    echo $pokok[0]['tb_simpanan_jumlah'];
                                }else if(!isset($wajib[0]['tb_simpanan_jumlah']) && !isset($pokok[0]['tb_simpanan_jumlah'])){
                                    echo '0';
                                }
                            ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>