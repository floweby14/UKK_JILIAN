<?php
    if(session()->get('level')== 1){
?>
        <section class="content">
            <h2>Data Produk</h2>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="table1" class="table table-striped" data-toggle="data-table">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Pelanggan</th>
                                                <th>Total Harga</th>
                                                <th>Tanggal Penjualan</th>
                                                <th>Kasir</th>
                                                <th>Pembayaran</th>
                                                <th>Kembalian</th>
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
                                                    <td><?= $riz->NamaPelanggan ?></td>
                                                    <td>Rp <?= number_format($riz->TotalHarga, 2, ',', '.') ?></td>
                                                    <td><?= date('d M Y', strtotime($riz->TanggalPenjualan)) ?></td>
                                                    <td><?= $riz->username ?></td>
                                                    <td><?= $riz->bayar ?></td>
                                                    <td><?= $riz->kembalian ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url('detail_penjualan/'. $riz->PenjualanID)?>" class="btn btn-success my-1"><i class="fa-solid fa-circle-info"></i></a>
                                                        <a href="<?php echo base_url('penjualan/delete/'. $riz->PenjualanID)?>" class="btn btn-danger my-1"><i class="fa-solid fa-trash"></i></a>
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
<?php
    } else if(session()->get('level')== 2){
?>
        <section class="content">
            <h2>Data Produk</h2>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="<?php echo base_url('/penjualan/view/')?>"><button class="btn btn-primary mt-2"><i class="fa-solid fa-eye"></i> Data DiHapus</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="table1" class="table table-striped" data-toggle="data-table">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama Pelanggan</th>
                                                <th>Total Harga</th>
                                                <th>Tanggal Penjualan</th>
                                                <th>Kasir</th>
                                                <th>Pembayaran</th>
                                                <th>Kembalian</th>
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
                                                    <td><?= $riz->NamaPelanggan ?></td>
                                                    <td>Rp <?= number_format($riz->TotalHarga, 2, ',', '.') ?></td>
                                                    <td><?= date('d M Y', strtotime($riz->TanggalPenjualan)) ?></td>
                                                    <td><?= $riz->username ?></td>
                                                    <td><?= $riz->bayar ?></td>
                                                    <td><?= $riz->kembalian ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url('detail_penjualan/'. $riz->PenjualanID)?>" class="btn btn-success my-1"><i class="fa-regular fa-circle-info"></i></a>
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
<?php
    }
?>
