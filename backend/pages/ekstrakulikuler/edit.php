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
                                <h5>Tabel edit data ekstrakulikuler</h5>
                            </div>
                            <div class="card-body">
                                <?php
                                include '../../actions/ekstrakulikuler/show.php';
                                ?>
                                <form action="../../actions/ekstrakulikuler/update.php?id=<?= $ekstrakulikuler->id ?>" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <img class="w-25" src="../../../storages/ekstrakulikuler/<?= $ekstrakulikuler->image ?>" alt="">
                                        <label for="imageInput" class="form-label"></label>
                                        <input type="file" name="image" class="form-control" id="imageInput" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="namaInput" class="form-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="namaInput" placeholder="Masukkan Nama..." value="<?= $ekstrakulikuler->nama ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="pembinaInput" class="form-label">Pembina</label>
                                        <input type="text" name="pembina" class="form-control" id="pembinaInput" placeholder="Masukkan Nama Pembina..." value="<?= $ekstrakulikuler->pembina ?>" required>
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