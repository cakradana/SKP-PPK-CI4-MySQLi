<?= $this->extend('layout/template'); ?>

<?= $this->section('judul'); ?>
Master Jabatan
<?= $this->endSection('judul'); ?>

<?= $this->section('isi'); ?>

<div class="container">
    <div>
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Tambah Data Jabatan</h3>
            </div> <!-- /.card-body -->
            <div class="card-body">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="nama_pangkat">Nama Jabatan</label>
                        <input type="text" class="form-control" id="nama_pangkat" name="isi_nama_pangkat" placeholder="" required>
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
                    <h3 class="card-title">Data Master Jabatan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <div class="container" style="padding: 20px 20px 20px;">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Jabatan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <?= $i = 1; ?> -->
                                <?php foreach ($jabatan as $j) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td><?= $j['nama_jabatan']; ?></td>
                                        <td>
                                            <button type="submit" class="btn btn-warning"><i class="fa fa-pen text-white"></i></button>
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
</div>




<?= $this->endSection('isi'); ?>