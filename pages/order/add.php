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
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="nama_order" class="form-control" placeholder="Nama Buat Order" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                     <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">home</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="email" class="form-control email" placeholder="Email" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">phone_iphone</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="telepon" class="form-control" placeholder="Telepon" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">attach_money</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" name="kredit_limit" class="form-control" placeholder="Kredit Limit" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                            <select name="tipe_order" class="form-control show-tick" " data-live-search="true" placeholder="Tipe Buat Order">
                                                <option value="Bodyshop">Bodyshop</option>
                                                <option value="Paintshop">Paintshop</option>
                                                <option value="Karoseri">Karoseri</option>
                                                <option value="Project">Independent</option>
                                            </select>
                                      </div>
                                </div>
                                <div class="col-sm-12">
                                     <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">card-table_membership</i>
                                        </span>
                                            <select name="status" class="form-control show-tick" " data-live-search="true" placeholder="Tipe Buat Order">
                                                <option value="Aktif">Aktif</option>
                                                <option value="Suspend">Suspend</option>
                                            </select>
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
		                        <div class="col-md-12">
		                            <button id="add_order" class="btn btn-lg bg-gradient waves-effect" type="submit">TAMBAH</button>
		                            <a href="index.php?pemesanan_produk" class="btn btn-lg bg-gradient-red waves-effect">BATAL</a>
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
    