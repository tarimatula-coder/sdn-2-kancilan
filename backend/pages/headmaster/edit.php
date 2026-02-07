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
                                <h5>Tabel edit data kepala sekolah</h5>
                            </div>
                            <div class="card-body">
                                <?php
                                include '../../actions/headmaster/show.php';
                                ?>
                                <form action="../../actions/headmaster/update.php?id=<?= $headmaster->id ?>" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <img class="w-25" src="../../../storages/headmaster/<?= $headmaster->image ?>" alt="">
                                        <label for="imageInput" class="form-label"></label>
                                        <input type="file" name="image" class="form-control" id="imageInput" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="namaInput" class="form-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="namaInput" placeholder="Masukkan Nama..." value="<?= $headmaster->nama ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="keteranganInput" class="form-label">Keterangan</label>
                                        <input type="text" name="keterangan" class="form-control" id="keteranganInput" placeholder="Masukkan Keterangan..." value="<?= $headmaster->keterangan ?>" required>
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