<section class="content">

<title>Data Pelanggan</title>

<div class="body_scroll">

    <div class="block-header">

        <div class="row">

            <div class="col-lg-7 col-md-6 col-sm-12">

                <h2>Data Pelanggan</h2>

            </div>

            <div class="col-lg-5 col-md-6 col-sm-12">

                <a href="<?= base_url('home/tambah_data_pelanggan') ?>" style="position: absolute; right: 10px;">
                    <button class="btn btn-md btn-primary"><i class="zmdi zmdi-plus mr-3"></i>Tambah Data</button>
                </a>

            </div>

        </div>

    </div>

    <div class="container-fluid">

        <div class="row clear-fix">

            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="card">

                    <div class="card-body">

                        <div class="table-responsive">

                            <table class="table table-striped">
                                
                                <thead>

                                    <tr style="text-align: center;">

                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>No Telepon</th>
                                        <th>Created At</th>
                                        <th>Action</th>

                                    </tr>

                                </thead>
                                <tbody> 
                                
                                    <?php $no = 1; foreach($pelangganData as $data) { ?>
                                        

                                        <tr align="center">

                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo ucwords($data -> nama) ?></td>
                                            <td><?php echo ucwords($data -> alamat) ?></td>
                                            <td><?php echo ucwords($data -> no_telpon) ?></td>
                                            <td><?php echo ucwords($data -> created_at) ?></td>
                                            <td>
                                            <a href="<?=base_url('/home/edit_data_pelanggan/'.$data->id_pelanggan)?>"><button class="btn btn-primary">Edit</button></a>
                                            <a href="<?=base_url('/home/hapus_data_pelanggan/'.$data->id_pelanggan)?>"><button class="btn btn-danger">Delete</button></a>
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

</div>