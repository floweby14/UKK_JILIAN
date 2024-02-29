<section class="content">
    <h3><?=$title?></h3>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <a href="<?= base_url('produk/add_stok_masuk/' . $jojo2)?>" class="btn btn-primary my-1"><i class="faj-button fa-regular fa-plus" style="color: #ffffff;"></i>Tambah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table1" class="table table-striped" data-toggle="data-table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Produk</th>
                                        <th>Stok Produk Masuk</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Waktu Masuk</th>
                                        <th>User</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no=1;
                                    foreach ($jojo as $riz) {
                                    ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $riz->NamaProduk ?></td>
                                        <td><?= $riz->Stok_masuk ?></td>
                                        <td><?= date('d M Y', strtotime($riz->created_at_produk_masuk)) ?></td>
                                        <td><?= date('H:i:s', strtotime($riz->created_at_produk_masuk)) ?></td>
                                        <td><?= $riz->username ?></td>
                                        <td>
                                            <a href="<?php echo base_url('produk/delete_stok_masuk/'. $riz->ProdukMasukID)?>" class="btn btn-danger my-1"><i class="fa-regular fa-minus" style="color: #ffffff;"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
