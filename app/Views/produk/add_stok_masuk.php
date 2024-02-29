<section class="content">
    <h3><?=$title?></h3>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="header-title">
                            <h4 class="card-title"><?=$subtitle?></h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="new-user-info">
                            <form action="<?= base_url('produk/aksi_add_stok_masuk')?>" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?php echo $jojo->ProdukID ?>">
                                <div class="row">
                                    <div class="form-group">
                                        <label class="form-label" for="fname">Stok Produk Masuk</label>
                                        <input type="text" class="form-control" id="stok_produk" name="stok_produk" placeholder="Masukkan Jumlah Produk Masuk" required>
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
