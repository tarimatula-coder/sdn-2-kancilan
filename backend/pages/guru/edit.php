<?php
include '../../partials/header.php';
?>

<div class="wrapper">

    <?php include '../../partials/sidebar.php'; ?>

    <div class="main">

        <?php include '../../partials/navbar.php'; ?>

        <main class="content">
            <!-- content -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Tabel edit data guru</h5>
                            </div>
                            <div class="card-body">
                                <?php
                                include '../../actions/guru/show.php';
                                ?>
                                <form action="../../actions/guru/update.php?id=<?= $guru->id ?>" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <img class="w-25" src="../../../storages/guru/<?= $guru->image ?>" alt="">
                                        <label for="imageInput" class="form-label"></label>
                                        <input type="file" name="image" class="form-control" id="imageInput" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="namaInput" class="form-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="namaInput" placeholder="Masukkan Nama..." value="<?= $guru->nama ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="mapelInput" class="form-label">Pembina</label>
                                        <input type="text" name="mapel" class="form-control" id="mapelInput" placeholder="Masukkan Nama Mapel..." value="<?= $guru->mapel ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="jenis_kelaminInput" class="form-label">Jenis kelamin</label>
                                        <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelaminInput" placeholder="Masukkan Nama Jenis Kelamin..." value="<?= $guru->jenis_kelamin ?>" required>
                                    </div>

                                    <button type="submit" class="btn btn-success" name="tombol">Simpan</button>
                                    <a href="./index.php" class="btn btn-primary">Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <?php
    include '../../partials/footer.php';
    include '../../partials/script.php';
    ?>