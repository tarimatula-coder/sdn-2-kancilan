<?php
include '../../partials/header.php';
?>

<div class="wrapper">

    <?php include '../../partials/sidebar.php'; ?>

    <div class="main">

        <?php include '../../partials/navbar.php'; ?>

        <main class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Tabel edit data about</h5>
                            </div>
                            <div class="card-body">
                                <?php
                                include '../../actions/about/show.php';
                                ?>
                                <form action="../../actions/about/update.php?id=<?= $about->id ?>" method="POST" enctype="multipart/form-data">

                                    <div class="mb-3">
                                        <label for="nameInput" class="form-label">Nama</label>
                                        <input type="text" name="name" class="form-control" id="nameInput" placeholder="Masukan Nama...." required value="<?= $about->name ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="keteranganInput" class="form-label">keterangan</label>
                                        <input type="text" name="keterangan" class="form-control" id="keteranganInput" placeholder="Masukan keterangan...." required value="<?= $about->keterangan ?>">
                                    </div>

                                    <div class="mb-3">
                                        <label for="alamatInput" class="form-label">Alamat</label>
                                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukan alamat" rows="5"><?= $about->alamat ?></textarea>
                                    </div>

                                    <div class="mb-3">
                                        <img class="w-25" src="../../../storages/about/<?= $about->logo ?>" alt="">
                                        <label for="logoInput" class="form-label"></label>
                                        <input type="file" name="logo" class="form-control" id="logoInput">
                                    </div>

                                    <div class="mb-3">
                                        <img class="w-25" src="../../../storages/about/<?= $about->banner ?>" alt="">
                                        <label for="bannerInput" class="form-label">pilih gambar</label>
                                        <input type="file" name="banner" class="form-control" id="bannerInput">
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
        <?php include '../../partials/footer.php'; ?>
    </div>
</div>
<?php include '../../partials/script.php'; ?>
<style>
    /* ===== ANIMASI GRADIENT ===== */
    @keyframes gradientMove {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    /* ===== CARD ===== */
    .card {
        background: linear-gradient(120deg,
                #ecfdf5,
                /* hijau muda */
                #dbeafe,
                /* biru muda */
                #e0f2fe,
                /* biru soft */
                #f0fdfa
                /* hijau lembut */
            );
        background-size: 300% 300%;
        animation: gradientMove 9s ease infinite;

        border: none;
        border-radius: 16px;
        box-shadow: 0 12px 28px rgba(16, 185, 129, 0.18);
    }

    /* ===== HEADER CARD ===== */
    .card-header {
        background: linear-gradient(90deg,
                #059669,
                /* hijau */
                #0ea5e9,
                /* biru */
                #0284c7
                /* biru tua */
            );
        background-size: 200% 200%;
        animation: gradientMove 6s ease infinite;

        color: #ffffff;
        border-radius: 16px 16px 0 0;
        padding: 16px 22px;
    }

    .card-header h5 {
        margin: 0;
        color: #ffffff;
        font-weight: 600;
    }

    /* ===== BUTTON ===== */
    .btn-success {
        background: linear-gradient(90deg, #059669, #16a34a);
        border: none;
    }

    .btn-primary {
        background: linear-gradient(90deg, #0ea5e9, #0284c7);
        border: none;
    }

    .btn-success:hover,
    .btn-primary:hover {
        opacity: 0.9;
        transform: translateY(-1px);
        transition: 0.3s ease;
    }
</style>