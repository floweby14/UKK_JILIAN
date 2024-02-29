<section class="content">

<div class="body_scroll">

    <div class="block-header">

        <div class="row">

            <div class="col-lg-7 col-md-6 col-sm-12">

                <h2>Edit Data Produk</h2>

            </div>

            <div class="col-lg-5 col-md-6 col-sm-12">

                <a href="/home/data_produk">
                    
                    <button class="btn btn-secondary btn-icon float-right" type="buttin"><i class="zmdi zmdi-chevron-left"></i></button>

                </a>

            </div>

        </div>

    </div>

    <div class="container-fluid">

        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="card">

                    <div class="body">

                        <form class="form-horizontal" action="<?= base_url('/home/aksi_edit_data_produk')?>" method="POST">

                        <input type="hidden" name="id_produk" value="<?php echo $produkData->id_produk ?>">

                            <div class="row clearfix">

                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                    <label for="nama_produk">Nama Produk<span style="color: #ff0000;">*</span></label>

                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-8">

                                    <div class="form-group">

                                        <input type="text" value="<?php echo $produkData -> nama_produk ?>" name="nama_produk" id="nama_produk" placeholder="Nama Produk" class="form-control" required>

                                    </div>

                                </div>
                                
                            </div>


                            <div class="row clearfix">

                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                    <label for="harga">Harga <span style="color: #ff0000;">*</span></label>

                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-8">

                                    <div class="form-group">

                                        <input type="text" value="<?php echo  $produkData -> harga ?>" name="harga" id="harga" placeholder="Harga" class="form-control" required>

                                    </div>

                                </div>
                                
                            </div>

                            <div class="row clearfix">

                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                    <label for="stok">Stok <span style="color: #ff0000;">*</span></label>

                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-8">

                                    <div class="form-group">

                                        <input type="text" value="<?php echo  $produkData -> stok ?>" name="stok" id="stok" placeholder="Stok" class="form-control" required>

                                    </div>

                                </div>
                                
                            </div>

                            <div class="row clearfix">

                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                    <label for="created_at">Created At <span style="color: #ff0000;">*</span></label>

                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-8">

                                    <div class="form-group">

                                        <input type="datetime-local" value="<?php echo  $produkData -> created_at ?>" name="created_at" id="created_at" placeholder="Created At" class="form-control" required>

                                    </div>

                                </div>
                                
                            </div>


                            <div class="row clearfix d-flex justify-content-center">

                                <button type="submit" class="btn btn-md btn-round btn-success">Submit</button>
                                
                            </div>

                        </form>

                    </div>

                </div>
                
            </div>

        </div>

    </div>

</div>