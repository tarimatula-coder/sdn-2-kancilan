<?php
$qgalleri = "SELECT * FROM galleries LIMIT 6";
$resultgalleri = mysqli_query($connect, $qgalleri) or die(mysqli_error($connect));
?>

<section id="galeri" class="galeri">
    <div class="container">

        <!-- JUDUL -->
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Galeri Kegiatan</h2>
                <p class="text-muted mx-auto" style="max-width:600px;">
                    Dokumentasi kegiatan dan prestasi sekolah
                </p>
            </div>
        </div>

        <!-- GALERI -->
        <div class="row g-3">
            <?php while ($item = $resultgalleri->fetch_object()) : ?>
                <div class="col-lg-4 col-md-6">

                    <div class="galeri-item">

                        <!-- IMAGE -->
                        <div class="galeri-img">
                            <img src="../storages/galleri/<?= htmlspecialchars($item->image) ?>" alt="Galeri">

                            <!-- SEARCH ICON -->
                            <button class="galeri-search"
                                onclick="openPreview('../storages/galleri/<?= htmlspecialchars($item->image) ?>')">
                                <i class="bx bx-search"></i>
                            </button>
                        </div>

                        <!-- KETERANGAN -->
                        <div class="galeri-caption">
                            <?= htmlspecialchars($item->keterangan) ?>
                        </div>

                    </div>

                </div>
            <?php endwhile; ?>
        </div>

    </div>
</section>

<!-- PREVIEW -->
<div id="galeriPreview" class="galeri-preview">
    <span class="galeri-close" onclick="closePreview()">
        <i class="bx bx-x"></i>
    </span>
    <img id="previewImage" src="">
</div>

<!-- ================= CSS ================= -->
<style>
    .galeri {
        padding: 60px 0;
    }

    /* BORDER UTAMA */
    .galeri-item {
        border: 2px solid #000;
        height: 100%;
    }

    /* IMAGE FULL */
    .galeri-img {
        position: relative;
        width: 100%;
        height: 260px;
    }

    .galeri-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    /* SEARCH ICON */
    .galeri-search {
        position: absolute;
        bottom: 10px;
        right: 10px;
        width: 38px;
        height: 38px;
        background: #000;
        color: #fff;
        border: none;
        font-size: 18px;
        cursor: pointer;
    }

    /* KETERANGAN */
    .galeri-caption {
        border-top: 2px solid #000;
        padding: 10px;
        font-size: 14px;
        text-align: center;
        background: #fff;
    }

    /* PREVIEW */
    .galeri-preview {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.85);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 9999;
    }

    .galeri-preview img {
        max-width: 90%;
        max-height: 85%;
    }

    /* CLOSE ICON */
    .galeri-close {
        position: absolute;
        top: 20px;
        right: 30px;
        font-size: 40px;
        color: #fff;
        cursor: pointer;
    }
</style>

<!-- ================= JS ================= -->
<script>
    function openPreview(img) {
        document.getElementById('previewImage').src = img;
        document.getElementById('galeriPreview').style.display = 'flex';
    }

    function closePreview() {
        document.getElementById('galeriPreview').style.display = 'none';
    }
</script>
<!-- BOXICONS -->
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">