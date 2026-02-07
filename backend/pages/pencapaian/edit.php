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
                                <h5>Tabel edit data pencapaian</h5>
                            </div>
                            <div class="card-body">
                                <?php
                                include '../../actions/pencapaian/show.php';
                                ?>
                                <form action="../../actions/pencapaian/update.php?id=<?= $pencapaian->id ?>" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <img class="w-25" src="../../../storages/pencapaian/<?= $pencapaian->image ?>" alt="">
                                        <label for="imageInput" class="form-label"></label>
                                        <input type="file" name="image" class="form-control" id="imageInput" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="namaInput" class="form-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="namaInput" placeholder="Masukkan Nama..." value="<?= $pencapaian->nama ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="kategoriInput" class="form-label">Kategori</label>
                                        <input type="text" name="kategori" class="form-control" id="kategoriInput" placeholder="Masukkan Kategori..." value="<?= $pencapaian->kategori ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="tingkatInput" class="form-label">Tingkat</label>
                                        <input type="text" name="tingkat" class="form-control" id="tingkatInput" placeholder="Masukkan Tingkat..." value="<?= $pencapaian->tingkat ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="tahunInput" class="form-label">Tahun</label>
                                        <input type="text" name="tahun" class="form-control" id="tahunInput" placeholder="Masukkan Tahun..." value="<?= $pencapaian->tahun ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="peraihInput" class="form-label">Peraih</label>
                                        <input type="text" name="peraih" class="form-control" id="peraihInput" placeholder="Masukkan Peraih..." value="<?= $pencapaian->peraih ?>" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="keteranganInput" class="form-label">Keterangan</label>
                                        <input type="text" name="keterangan" class="form-control" id="keteranganInput" placeholder="Masukkan Keterangan..." value="<?= $pencapaian->keterangan ?>" required>
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