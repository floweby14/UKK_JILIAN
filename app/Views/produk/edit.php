<section class="content">
    <h3><?=$title?></h3>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="header-title">
                            <h4 class="card-title"><?=$subtitle?></h4>
                            <small class="text-danger text-sm">* Biarkan Jika Tidak Diedit</small>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="new-user-info">
                            <form action="<?= base_url('produk/aksi_edit')?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $jojo->ProdukID ?>">
                                <div class="row">
                                    <div class="form-group">
                                        <label class="form-label" for="fname">Nama Produk <small class="text-danger text-sm">*</small></label>
                                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" placeholder="Masukkan Nama Produk" value="<?php echo $jojo->NamaProduk ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="fname">Harga Produk <small class="text-danger text-sm">*</small></label>
                                        <input type="text" class="form-control" id="harga_produk" name="harga_produk" placeholder="Masukkan Harga Produk" value="<?php echo number_format($jojo->Harga, 0, ',', '') ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="fname">Stok Produk <small class="text-danger text-sm">*</small></label>
                                        <input type="text" class="form-control" id="stok_produk" name="stok_produk" placeholder="Masukkan Stok Produk" value="<?php echo $jojo->Stok ?>" required>
                                    </div>
                                </div>
                                <a href="javascript:history.back()" class="btn btn-danger mt-4">Cancel</a>
                                <button type="submit" class="btn btn-primary mt-4">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
