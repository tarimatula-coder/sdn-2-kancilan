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
                                <h5>Tabel edit data kerja sama</h5>
                            </div>
                            <div class="card-body">
                                <?php
                                include '../../actions/cooperation/show.php';
                                ?>
                                <form action="../../actions/cooperation/update.php?id=<?= $cooperation->id ?>" method="POST" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <img class="w-25" src="../../../storages/cooperation/<?= $cooperation->image ?>" alt="">
                                        <label for="imageInput" class="form-label"></label>
                                        <input type="file" name="image" class="form-control" id="imageInput" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="linkInput" class="form-label">Link Sosial Media</label>
                                        <input type="text" name="link" class="form-control" id="linkInput"
                                            placeholder="Masukan link kerja sama...." value="<?= $cooperation->link ?>" required>
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