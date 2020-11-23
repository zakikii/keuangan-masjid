<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Inventaris</h1>


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
                            <th>Nama</th>
                            <th>Kondisi</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>


                    </thead>
                    <tbody>
                        <?php foreach ($inventaris as $in) : ?>
                            <tr>
                                <td><?= $in['id_barang']; ?></td>
                                <td><?= $in['nama']; ?></td>
                                <td><?= $in['kondisi']; ?></td>
                                <td><?= $in['jumlah']; ?></td>
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