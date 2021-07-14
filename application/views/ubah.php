<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/bootstrap.min.css">

    <title>Data Mahasiswa</title>
</head>

<body>
    <!-- As a heading -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <span class="navbar-brand mb-0 h1">CRUD</span>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <h3>Ubah Data Mahasiswa</h3>
                <div class="card">
                    <div class="card-header">
                        Ubah Data Mahasiswa
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" value="<?= $mahasiswa['id']; ?>" name="id">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="nama" class="form-control" id="nama" name="nama" value="<?= $mahasiswa['nama']; ?>">
                                <?= form_error('nama', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="nim">NIM</label>
                                <input type="text" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim']; ?>">
                                <?= form_error('nim', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <input type="text" class="form-control" id="jurusan" name="jurusan" value="<?= $mahasiswa['jurusan']; ?>">
                                <?= form_error('jurusan', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $mahasiswa['alamat']; ?>">
                                <?= form_error('alamat', '<small class="pl-3 text-danger">', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-dark float-right" name="Ubah">Ubah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="<?= base_url('assets') ?>/js/bootstrap.min.js"></script>
</body>

</html>