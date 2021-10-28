<?= $this->extend('layout/template'); ?>

<?= $this->section('judul'); ?>
Master Jabatan
<?= $this->endSection('judul'); ?>

<?= $this->section('isi'); ?>




<div class="container">

    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalCenter">
        Tambah Data Jabatan
    </button>
    <?php
    include 'create.php';
    ?>

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