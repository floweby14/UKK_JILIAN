<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="header-title">
                            <h3 class="card-title"><?=$title?></h3>
                            <small class="text-danger text-sm">* Data yang Wajib Diisi</small>
                        </div>
                    </div>
                    <?php if (session()->has('error')) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session('error') ?>
                        </div>
                    <?php endif ?>

                    <?php if (session()->has('message')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?= session('message') ?>
                        </div>
                    <?php endif ?>
                    <div class="card-body">
                        <div class="new-user-info">
                            <form action="<?= base_url('pelanggan/aksi_create')?>" method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group">
                                        <label class="form-label" for="nama_pelanggan">Nama Pelanggan <small class="text-danger">*</small></label>
                                        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" placeholder="Masukkan Nama Pelanggan" required>
                                    </div>
                                    <div class="form-group col-md-12 mt-2">
                                        <label class="form-label" for="alamat">Alamat <small class="text-danger">*</small></label>
                                        <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="no_telepon">No. Telepon <small class="text-danger">*</small></label>
                                        <input type="text" class="form-control" id="no_telepon" name="no_telepon" placeholder="Masukkan No. Telepon (Max 15 Digit)" required>
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
