<section class="content">
    <h2>Detail Produk</h2>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">

                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <a href="<?=base_url('kasir/cetak_invoice/' . $id_penjualan)?>" class="btn btn-success"><i class="fa-solid fa-receipt"></i></i>Cetak Invoice</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped" data-toggle="data-table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Produk</th>
                                        <th>Jumlah Produk</th>
                                        <th>Subtotal</th>
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
                                            <td><?= $riz->JumlahProduk ?> buah</td>
                                            <td>Rp <?= number_format($riz->Subtotal, 2, ',', '.') ?></td>
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
