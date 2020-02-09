        <?php
            $kode_tagihan ='KD-'.time();
        ?>
        <!-- cart-main-area start -->
        <div class="cart-main-area section-padding--lg bg--white">
            <?php
                if($data != null){
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ol-lg-12">
                        <form  method="POST" action="<?=base_url('transaksi')?>">         
                            <input type="text" name="tb_transaksi_kode" value="<?=$kode_tagihan?>" class="hidden">
                            <input type="text" name="tb_transaksi_kredit" value="0" class="hidden">
                            <input type="text" name="tb_transaksi_metode" value="transfer" class="hidden">
                            <input type="text" name="tb_transaksi_bayar" class="hidden">    
                            <div class="table-content table-responsive">
                                <table>
                                    <thead>
                                        <tr class="title-top">
                                            <th class="product-thumbnail">Gambar</th>
                                            <th class="product-name">Nama</th>
                                            <th class="product-price">Harga</th>
                                            <th class="product-quantity">Banyak</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody id="isi-tabel">
                                        <?php
                                            $total_tagihan = 0;
                                            $count_produk = 0;
                                            $nama_anggota = '';
                                            foreach($data as $value){
                                                $nama_anggota = $value['tb_anggota_nama'];
                                        ?>
                                        <input type="text" name="id_tb_produk<?=$count_produk+1?>" value="<?=$value['id_tb_produk']?>" class="hidden" />
                                        <tr>
                                            <td class="product-thumbnail product-image-thumb"><img src="<?=base_url('assets/img/produk/small/small-').$value['tb_produk_gambar']?>" alt="product img" /></td>
                                            <td class="product-name"><?=$value['tb_produk_nama']?></td>
                                            <td class="product-price"><span class="amount"><?=$value['tb_produk_harga_jual']?></span></td>
                                            <td class="product-quantity"><input type="number" name="tb_produk_banyak<?=$count_produk+1?>" id_tb_produk="<?=$value['id_tb_produk']?>" tb_produk_harga_jual="<?=$value['tb_produk_harga_jual']?>" tb_produk_jumlah="<?=$value['tb_produk_jumlah']?>" class="banyak-produk" value="1" /></td>
                                            <td class="product-subtotal" id="total-produk<?=$value['id_tb_produk']?>"><?=$value['tb_produk_harga_jual']?></td>
                                            <td class="product-remove"><a href="<?=base_url('daftar-keranjang/delete/').$value['id_tb_produk']?>">X</a></td>
                                        </tr>
                                        <?php
                                                $count_produk++;
                                            }
                                        ?>
                                        <input type="text" name="tb_transaksi_nama" value="<?=$nama_anggota?>" class="hidden">
                                        <input type="text" name="count_produk" value="<?=$count_produk?>" class="hidden" />
                                    </tbody>
                                </table>
                            </div>
                            <div class="cartbox__btn">
                                <ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                                    <li>
                                        <a href="#" id="transfer" class="active-button">Transfer</a>
                                        <div class="food__details" id="ket-transfer" style="margin-top:20px">
                                            <p>Transfer tagihan anda pada rincian berikut:</p>
                                            <ul>
                                                <li id="rek-tot-bayar">Total Bayar : 21212</li>
                                                <li>Nama Bank : Bank BRI</li>
                                                <li>Rekening : 31312321212</li>
                                                <li>Penerima : RM</li>
                                            </ul>
                                            <p>Kemudian konfirmasi dengan mengetik;</p>
                                            <p>#<?=$kode_tagihan?>#<span id="konf-bayar"></span> kirim ke +62 823 xxxx xxxx</p>
                                        </div>                                
                                    </li>
                                    <li>
                                        <a href="#" id="cod">COD</a>
                                        <div class="input-box col-md-12 col-12 hidden" id="ket-cod" style="margin-top:20px">
                                            <textarea name="tb_transaksi_alamat" maxlength="250" placeholder="Alamat kiriman"></textarea>
                                            <p>Biaya pengiriman tidak</p>
                                            <p>termasuk harga barang.</p>
                                            <p>Disesuaikan dengan jarak.</p>
                                        </div>
                                    </li>
                                    <li><a href="#" id="lunas" class="active-button">Lunas</a></li>
                                    <li>
                                        <a href="#" id="kredit">Kredit</a>
                                        <div class="input-box col-md-12 col-12 hidden" id="ket-kredit" style="margin-top:20px">
                                            <input type="number" id="jumlah-kredit" value="3">
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 text-right" style="margin-top:20px">
                                    <button type="submit" class="btn btn-primary text-right">Bayar Tagihan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="cartbox__total__area">
                            <div class="cartbox-total d-flex justify-content-between">
                                <ul class="cart__total__list">
                                    <li>Kode Tagihan</li>
                                    <li>Harga total</li>
                                </ul>
                                <ul class="cart__total__tk">
                                    <li><?=$kode_tagihan?></li>
                                    <li id="harga-tot">$70</li>
                                </ul>
                            </div>
                            <div class="cart__total__amount">
                                <span>Total bayar</span>
                                <span id="tot-bayar">$140</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <?php
                }else{
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Keranjang Kosong.</h3>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>
        <!-- cart-main-area end -->

        <script>

            let count_produk = parseInt('<?=$count_produk?>')
            let i = 0
            let total_bayar = 0
            while(i < count_produk){
                tagBodyTable = $('#isi-tabel')
                tagElementTr = tagBodyTable.children()[i]
                total_bayar = total_bayar + parseInt($(tagElementTr).children('td.product-subtotal').text())
                i++
            }
            $('input[name=tb_transaksi_bayar]').val(total_bayar)
            
            $('#harga-tot').text(total_bayar)
            $('#tot-bayar').text(total_bayar)
            $('#rek-tot-bayar').text('Total bayar : '+total_bayar)
            $('#konf-bayar').text(total_bayar)

            $('.banyak-produk').change(function(){
                id_tb_produk = $(this).attr('id_tb_produk')
                tb_produk_harga_jual = $(this).attr('tb_produk_harga_jual')
                banyak = $(this).val()
                jumlah_produk = $(this).attr('tb_produk_jumlah')
                $('#total-produk'+id_tb_produk).text(tb_produk_harga_jual*banyak)

                $(this).on('input', function () { 
                    var value = $(this).val();
                    
                    if ((value !== '') && (value.indexOf('.') === -1)) {
                        
                        $(this).val(Math.max(Math.min(value, jumlah_produk), 1))
                    }
                })

                i = 0
                total_bayar = 0
                while(i < count_produk){
                    tagBodyTable = $('#isi-tabel')
                    tagElementTr = tagBodyTable.children()[i]
                    total_bayar = total_bayar + parseInt($(tagElementTr).children('td.product-subtotal').text())
                    i++
                }
                $('input[name=tb_transaksi_bayar]').val(total_bayar)
                $('#harga-tot').text(total_bayar)
                $('#tot-bayar').text(total_bayar)
                $('#rek-tot-bayar').text('Total bayar : '+total_bayar)
                $('#konf-bayar').text(total_bayar)
            })

            $('#transfer').click(function(e){
                e.preventDefault()
                $('#transfer').addClass('active-button')
                $('#cod').removeClass('active-button')
                $('#ket-transfer').removeClass('hidden')
                $('#ket-cod').addClass('hidden')
                $('textarea[name=tb_transaksi_alamat]').val('')
                $('input[name=tb_transaksi_metode]').val('transfer')
                let tot_bayar = $('input[name=tb_transaksi_bayar]').val()
                $('#rek-tot-bayar').text('Total bayar : '+tot_bayar)
                $('#konf-bayar').text(tot_bayar)
            })

            $('#cod').click(function(e){
                e.preventDefault()
                $('#transfer').removeClass('active-button')
                $('#cod').addClass('active-button')
                $('#ket-transfer').addClass('hidden')
                $('#ket-cod').removeClass('hidden')
                $('input[name=tb_transaksi_metode]').val('cod')
            })

            $('#lunas').click(function(e){
                e.preventDefault()
                $('#lunas').addClass('active-button')
                $('#kredit').removeClass('active-button')
                $('#ket-kredit').addClass('hidden')
                $('input[name=tb_transaksi_kredit]').val('0')
                let tot_bayar = $('input[name=tb_transaksi_bayar]').val()
                $('#harga-tot').text(tot_bayar)
                $('#tot-bayar').text(tot_bayar)
                $('#rek-tot-bayar').text('Total bayar : '+tot_bayar)
                $('#konf-bayar').text(tot_bayar)
            })

            $('#kredit').click(function(e){
                e.preventDefault()
                $('#lunas').removeClass('active-button')
                $('#kredit').addClass('active-button')
                $('#ket-kredit').removeClass('hidden')
                let kredit = $('#jumlah-kredit').val()
                $('input[name=tb_transaksi_kredit]').val(kredit)
                let tot_bayar = $('input[name=tb_transaksi_bayar]').val()
                let kred = (parseInt(tot_bayar)/parseInt(kredit)).toFixed(2)
                $('#harga-tot').text(tot_bayar)
                $('#tot-bayar').text(kred)
                $('#rek-tot-bayar').text('Total bayar : '+kred)
                $('#konf-bayar').text(kred)
            })

            $('#jumlah-kredit').change(function(){

                $(this).on('input', function () { 
                    var value = $(this).val();
                    
                    if ((value !== '') && (value.indexOf('.') === -1)) {
                        
                        $(this).val(Math.max(Math.min(value, 6), 3))
                    }
                })

                let kredit = $('#jumlah-kredit').val()
                $('input[name=tb_transaksi_kredit]').val(kredit)

                let tot_bayar = $('input[name=tb_transaksi_bayar]').val()
                let kred = (parseInt(tot_bayar)/parseInt(kredit)).toFixed(2)
                $('#harga-tot').text(tot_bayar)
                $('#tot-bayar').text(kred)
                $('#rek-tot-bayar').text('Total bayar : '+kred)
                $('#konf-bayar').text(kred)

            })

        </script>