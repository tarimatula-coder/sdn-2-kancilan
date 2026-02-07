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
                                <h5>Tambah data pencapaian</h5>
                            </div>
                            <div class="card-body">
                                <form action="../../actions/pencapaian/store.php" method="POST" enctype="multipart/form-data">

                                    <div class="mb-3">
                                        <label for="imageInput" class="form-label">pilih gambar</label>
                                        <input type="file" name="image" class="form-control" id="imageInput" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="namaInput" class="form-label">Nama</label>
                                        <input type="text" name="nama" class="form-control" id="namaInput" placeholder="Masukkan Nama..." required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="kategoriInput" class="form-label">Kategori</label>
                                        <input type="text" name="kategori" class="form-control" id="kategoriInput" placeholder="Masukkan Kategori..." required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="tingkatInput" class="form-label">Tingkat</label>
                                        <input type="text" name="tingkat" class="form-control" id="tingkatInput" placeholder="Masukkan Tingkat..." required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="tahunInput" class="form-label">Tahun</label>
                                        <input type="text" name="tahun" class="form-control" id="tahunInput" placeholder="Masukkan Tahun..." required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="peraihInput" class="form-label">Peraih</label>
                                        <input type="text" name="peraih" class="form-control" id="peraihInput" placeholder="Masukkan Peraih..." required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="keteranganInput" class="form-label">Keterangan</label>
                                        <input type="text" name="keterangan" class="form-control" id="keteranganInput" placeholder="Masukkan Nama Keterangan..." required>
                                    </div>

                                    <button type="submit" class="btn btn-success" name="tombol">Tambah</button>
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
        animation:
            fadeSlideUp 0.8s ease forwards,
            gradientMove 9s ease infinite;

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
        color: #ffffff;
        font-weight: 600;
    }
</style>