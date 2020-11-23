<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pemasukan</h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Inventaris Masjid Baiturridwan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Jenis Transaksi</th>
                            <th>Transaksi</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>


                    </thead>
                    <tbody>
                        <?php foreach ($pemasukan as $p) : ?>
                            <tr>
                                <td><?= $p['id_transaksi']; ?></td>
                                <td><?= $p['jenis_transaksi']; ?></td>
                                <td><?= $p['transaksi']; ?></td>
                                <td><?= $p['jumlah_transaksi']; ?></td>
                                <td><?php echo "nganu"; ?></td>

                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>