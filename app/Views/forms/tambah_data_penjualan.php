<section class="content">

<div class="body_scroll">

    <div class="block-header">

        <div class="row">

            <div class="col-lg-7 col-md-6 col-sm-12">

                <h2>Transaksi</h2>

            </div>

            <div class="col-lg-5 col-md-6 col-sm-12">

                <a href="/home/data_penjualan">
                    
                    <!-- <button class="btn btn-secondary btn-icon float-right" type="buttin"><i class="zmdi zmdi-chevron-left"></i></button> -->

                </a>

            </div>

        </div>

    </div>

    <div class="container-fluid">

        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="card">

                    <div class="body">

                        <form class="form-horizontal" action="<?= base_url('/home/aksi_tambah_data_penjualan')?>" method="POST" enctype="multipart/form-data">


                            <div class="row clearfix">

                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                    <label for="nama">Nama Pelanggan</label>

                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-8">

                                    <div class="form-group">

                                        <select class="form_control" name="nama">
                                            <option disabled selected>Pilih Pelanggan</option>
                                            <?php foreach($pelangganData as $data) { ?>
                                            
                                            <option value="<?php echo $data -> id_pelanggan ?>"><?php echo $data -> nama ?></option>
                                        <?php } ?>

                                            </select>
                                        
                                    </div>

                                </div>
                                
                            </div>

                            <div class="row clearfix">

                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                    <label for="nama">Nama Produk</label>

                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-8">

                                    <div class="form-group">

                                        <select class="form_control" name="nama">
                                            <option disabled selected>Pilih Produk</option>
                                            <?php foreach($produkData as $data) { ?>
                                            
                                            <option value="<?php echo $data -> id_produk ?>"><?php echo $data -> nama_produk ?></option>
                                        <?php } ?>

                                            </select>
                                        
                                    </div>

                                </div>
                                
                            </div>

                            

                            <div class="row clearfix">

                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                    <label for="harga">Harga</label>

                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-8">

                                    <div class="form-group">

                                        <input type="text" name="harga" id="harga" placeholder="Harga" class="form-control">
                                        
                                    </div>

                                </div>
                                
                            </div>

                            <div class="row clearfix">

                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                    <label for="quantity">Quantity</label>

                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-8">

                                    <div class="form-group">

                                        <input type="text" name="quantity" id="quantity" placeholder="Quantity" class="form-control">
                                        
                                    </div>

                                </div>
                                
                            </div>

                            <div class="row clearfix">

                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                    <label for="created_at">Tanggal Penjualan</label>

                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-8">

                                    <div class="form-group">

                                        <input type="datetime-local" name="tanggal_penjualan" id="tanggal_penjualan" placeholder="Tanggal Penjualan" class="form-control">
                                        
                                    </div>

                                </div>
                                
                            </div>

                            <div class="row clearfix">

                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                    <label for="subtotal">Subtotal</label>

                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-8">

                                    <div class="form-group">

                                        <input type="text" name="subtotal" id="subtotal" placeholder="Subtotal" class="form-control">
                                        
                                    </div>

                                </div>
                                
                            </div>

                             <div class="row clearfix">

                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                    <label for="created_at">Tanggal Penjualan</label>

                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-8">

                                    <div class="form-group">

                                        <input type="datetime-local" name="tanggal_penjualan" id="tanggal_penjualan" placeholder="Tanggal Penjualan" class="form-control">
                                        
                                    </div>

                                </div>
                                
                            </div>

                            <div class="col-lg-5 col-md-6 col-sm-12">

                <a href="/home/data_penjualan">
                    
                    <!-- <button class="btn btn-secondary btn-icon float-right" type="buttin"><i class="zmdi zmdi-chevron-left"></i></button> -->

                </a>

            </div>

        </div>

    </div>

    <div class="container-fluid">

        <div class="row clearfix">

            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="card">

                    <div class="body">

                        <form class="form-horizontal" action="<?= base_url('/home/aksi_tambah_data_penjualan')?>" method="POST" enctype="multipart/form-data">

                            <div class="row clearfix">

                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                    <label for="bayar">Bayar</label>

                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-8">

                                    <div class="form-group">

                                        <input type="text" name="bayar" id="bayar" placeholder="Bayar" class="form-control">
                                        
                                    </div>

                                </div>
                                
                            </div>

                            <div class="row clearfix">

                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">

                                    <label for="kembalian">kembalian</label>

                                </div>

                                <div class="col-lg-10 col-md-10 col-sm-8">

                                    <div class="form-group">

                                        <input type="text" name="kembalian" id="kembalian" placeholder="Kembalian" class="form-control">
                                        
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

</section>