<?= $this->extend('layout/template') ?>

<?= $this->section('judul'); ?>
Master Tingkat
<?= $this->endSection('judul'); ?>

<?= $this->section('isi'); ?>
<div class="container">
    <div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Tingkat</h3>
            </div> <!-- /.card-body -->
            <div class="card-body">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="nama_pangkat">Nama Tingkat</label>
                        <input type="text" class="form-control" id="nama_pangkat" name="isi_nama_pangkat" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="golongan">Level</label>
                        <input type="text" class="form-control" id="golongan" name="isi_golongan" placeholder="" required>
                    </div>
            </div><!-- /.card-body -->
            <div class="card-footer">
                <button type="submit" class="btn btn-primary" name="bsimpan">Tambah</button>
                <button type="reset" class="btn btn-danger">Bersihkan</button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card card-secondary card-outline">
                <div class="card-header">
                    <h3 class="card-title">Data Master Tingkat</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <div class="container" style="padding: 20px 20px 20px;">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Tingkat</th>
                                    <th>Level</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <?= $i = 1; ?> -->
                                <?php foreach ($tingkat as $t) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $t['nama_tingkat']; ?></td>
                                        <td><?= $t['level']; ?></td>
                                        <td>
                                            <button type="submit" class="btn btn-warning"><i class="fas fa-pen text-white"></i></button>
                                            <button type="submit" name="bsimpan" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?= $this->endSection('isi'); ?>