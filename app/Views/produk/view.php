<section class="content">
    <h2><?=$title?></h2>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <a href="<?=base_url('produk/create')?>" class="btn btn-primary"><i class="faj-button fa-solid fa-plus"></i>Tambah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="table1" class="table table-striped" data-toggle="data-table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
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
                                        <td>Rp <?= number_format($riz->Harga, 2, ',', '.') ?></td>
                                        <td><?= $riz->Stok ?> buah</td>
                                        <td>
                                            <a href="<?php echo base_url('produk/info_stok_masuk/'. $riz->ProdukID)?>" class="btn btn-success my-1"><i class="fa-solid fa-circle-info" style="color: #ffffff;"></i></a>
                                            <a href="<?php echo base_url('produk/edit/'. $riz->ProdukID)?>" class="btn btn-warning my-1"><i class="fa-solid fa-pen-to-square" style="color: #ffffff;"></i></a>
                                            <a href="<?php echo base_url('produk/delete/'. $riz->ProdukID)?>" class="btn btn-danger my-1"><i class="fa-solid fa-trash"></i></a>
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
