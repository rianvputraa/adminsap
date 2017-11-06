<?php
        $tanggal = date("Ymd");
        $cari_kd=mysqli_query($konek, "select max(no_invoice)as kode from order_penjualan"); //mencari kode yang paling besar atau kode yang baru masuk
        $tm_cari=mysqli_fetch_array($cari_kd);
        $kode= substr($tm_cari['kode'],12,12); //mengambil string mulai dari karakter pertama 'A' dan mengambil 4 karakter setelahnya.
        $tambah=$kode+1; //kode yang sudah di pecah di tambah 1
            if($tambah<10){ //jika kode lebih kecil dari 10 (9,8,7,6 dst) maka
            $id="INV".$tanggal."-".$tambah;
            }else{
            $id="INV".$tanggal."-".$tambah;
            }
?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>BUAT ORDER</h2> 
            </div>
            
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card-add">
                        <div class="header">
                            <h2>
                                INPUT BUAT ORDER
                                <small>Data kelengkapan order</small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                              <form action="../controller/order/add.php" id="sign_in" method="POST">
                                <div id="Tambah">
                                     <div id="TambahLagi">
                                <div class="col-sm-2">
                                     <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">receipt</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="no_invoice" class="form-control" placeholder="Invoice" value="<?php echo $id;  ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                           <select name="id_pelanggan" class="form-control show-tick" " data-live-search="true">
                                                <?php
                                                include '../config/koneksi.php';
                                                
                                                $queryproduk = mysqli_query($konek, "SELECT * FROM pelanggan WHERE status = 'Aktif'");
                                                if($queryproduk == false){
                                                    die ("Terdapat Kesalahan : ". mysqli_error($konek));
                                                }
                                                while ($produk = mysqli_fetch_array($queryproduk)){
                                                    echo "<option value='$produk[id_pelanggan]'>$produk[nama_pelanggan]</option>";
                                                }
                                            ?>
                                            </select>
                                      </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">call_to_action</i>
                                        </span>
                                        <?php

                                           $result  = mysqli_query($konek, "select * from produk");
                                           $jsArray = "var produkName = new Array();
                                            ";

                                          ?>
                                           <select name="id_produk" class="form-control show-tick" " data-live-search="true" onchange="document.getElementById('produk_name').value = produkName[this.value]">


                           <?php

                           while ($row = mysqli_fetch_array($result)) {

                             echo '

                             <option value = "' . $row['id_produk'] . '">' . $row['nama_produk'] . '</option>';

                             $jsArray .= "produkName['" . $row['id_produk'] . "'] = '" . addslashes($row['harga']) . "';
                             ";
                                }

                                echo '

                                </select>

                                ';

                                ?>
                                            </select>
                                      </div>
                                </div>
                                 <div class="col-sm-2">
                                     <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">attach_money</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" id="produk_name" name="harga" class="form-control" placeholder="Harga Satuan" readonly>
                                            <script>

                                              <?php echo $jsArray; ?>

                                            </script>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 hidden">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="id_user" class="form-control" placeholder="id_user" value="<?php echo "".$_SESSION["id_user"]."" ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                     <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">layers</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="qty" class="form-control" placeholder="Quantity" required>
                                        </div>
                                    </div>
                                </div>
                                <!-- <button type="button" class="btn bg-pink btn-circle waves-effect waves-circle waves-float" style="margin-left: 10px;" id="add_order">
                                <i class="material-icons">add</i>
                                </button>
                                <button type="button" class="btn bg-red btn-circle waves-effect waves-circle waves-float" style="margin-left: 10px;" id="min_order">
                                <i class="material-icons">clear</i>
                                </button> -->
                                 </div>
                                 </div>
                                <div class="col-md-12">
                                    <button id="add_order" class="btn btn-lg bg-pink waves-effect" type="submit">LANJUTKAN</button>
                                    <a href="index.php?pemesanan_produk" class="btn btn-lg bg-red waves-effect">BATAL</a>
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input -->
        </div>
    </section>
    