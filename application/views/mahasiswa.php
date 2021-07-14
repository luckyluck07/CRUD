<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/bootstrap.min.css">

    <title>Data Mahasiswa</title>
</head>

<body>
    <!-- As a heading -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <span class="navbar-brand mb-0 h1">Create Read Update Delete</span>
        </div>   
    </nav>
    

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-">
                <h3>Data Mahasiswa</h3>
                 <a href="<?= base_url('mahasiswa/tambah/'); ?>" class="btn btn-primary mb-2">Tambah Data</a>
                <div class="table-responsive table-striped">
                    <table class="table">
                        <thead>
                            <?php $no = 1; ?>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NIM</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Aksi</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($mahasiswa as $m) : ?>
                                <tr>
                                    <th scope="row"><?= $no++; ?></th>
                                    <td><?= $m['nama']; ?></td>
                                    <td><?= $m['nim']; ?></td>
                                    <td><?= $m['jurusan']; ?></td>
                                    <td><?= $m['alamat']; ?></td>
                                    <td><a href="<?= base_url('mahasiswa/ubah/').'/'.$m['id']; ?>" class="badge badge-warning pl-2 pr-2">Ubah</a></td>
                                    <td><a href="<?= base_url('mahasiswa/hapus/').'/'.$m['id'];?>" class="badge badge-danger pl-2 pr-2">X</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="<?= base_url('assets') ?>/js/bootstrap.min.js"></script>
</body>

</html>