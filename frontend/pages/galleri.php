<?php
$qgalleri = "SELECT * FROM galleries LIMIT 3";
$resultgalleri = mysqli_query($connect, $qgalleri) or die(mysqli_error($connect));
?>

<section id="galeri" class="galeri">
    <div class="container">

        <!-- Judul -->
        <div class="row">
            <div class="col-12">
                <div class="intro text-center">
                    <h1>Galeri Kegiatan</h1>
                    <p class="mx-auto" style="max-width:600px;">
                        Dokumentasi kegiatan dan aktivitas sekolah
                    </p>
                </div>
            </div>
        </div>

        <!-- Card Galeri -->
        <div class="row d-flex align-items-stretch text-center">
            <?php while ($item = $resultgalleri->fetch_object()) : ?>
                <div class="col-md-4 d-flex">
                    <div class="galeri-post flex-fill">

                        <!-- Tag -->
                        <span class="tag galeri-tag">
                            <i class='bx bx-image'></i> Galeri
                        </span>

                        <!-- Gambar -->
                        <img src="../storages/galleri/<?= htmlspecialchars($item->image) ?>"
                            alt="Galeri">

                    </div>
                </div>
            <?php endwhile; ?>
        </div>

    </div>
</section>

<!-- CSS -->
<style>
    /* Card */
    .galeri-post {
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        position: relative;
        flex: 1;
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.08);
    }

    /* Gambar */
    .galeri-post img {
        width: 100%;
        height: 320px;
        object-fit: cover;
        border-bottom: 4px solid #eee;
    }

    /* Tag */
    .galeri-tag {
        background: #3498db;
    }

    .tag {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        color: #fff;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 14px;
        font-weight: 500;
        position: absolute;
        top: 15px;
        left: 15px;
        z-index: 2;
    }

    /* Content */
    .galeri-post .content {
        padding: 15px;
        text-align: center;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .galeri-post .content h5 {
        font-size: 15px;
        font-weight: 600;
        color: #1f2937;
        margin: 0;
    }
</style>

<!-- Boxicons -->
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">