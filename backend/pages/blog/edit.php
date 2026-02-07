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
                                <h5>Tabel edit data blog</h5>
                            </div>
                            <div class="card-body">
                                <?php
                                include '../../actions/blog/show.php';
                                ?>
                                <form action="../../actions/blog/update.php?id=<?= $blog->id ?>" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <img class="w-25" src="../../../storages/blog/<?= $blog->image ?>" alt="">
                                        <label for="imageInput" class="form-label"></label>
                                        <input type="file" name="image" class="form-control" id="imageInput" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="judulInput" class="form-label">judul</label>
                                        <input type="text" name="judul" class="form-control" id="judulInput" placeholder="Masukkan judul..." value="<?= $blog->judul ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="tanggalInput" class="form-label">tanggal</label>
                                        <input type="date" name="tanggal" class="form-control" id="tanggalInput" placeholder="Masukkan tanggal..." value="<?= $blog->tanggal ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="penulisInput" class="form-label">penulis</label>
                                        <input type="text" name="penulis" class="form-control" id="penulisInput" placeholder="Masukkan penulis..." value="<?= $blog->penulis ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="keteranganInput" class="form-label">Keterangan</label>
                                        <input type="text" name="keterangan" class="form-control" id="keteranganInput" placeholder="Masukkan Keterangan..." value="<?= $blog->keterangan ?>" required>
                                    </div>

                                    <button type="submit" class="btn btn-success" name="tombol">Simpan</button>
                                    <a href="./index.php" class="btn btn-primary">Kembali</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php
        include '../../partials/footer.php';
        ?>
    </div>
</div>
<?php
include '../../partials/script.php';
?>