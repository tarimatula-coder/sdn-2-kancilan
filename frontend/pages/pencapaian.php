<?php
$qpencapaian = "SELECT * FROM pencapaian LIMIT 3";
$resultpencapaian = mysqli_query($connect, $qpencapaian) or die(mysqli_error($connect));
?>

<section id="pencapaian">
    <div class="container">

        <!-- Judul Section -->
        <div class="row">
            <div class="col-12">
                <div class="intro text-center mb-5">
                    <h1>Prestasi</h1>
                    <p class="mx-auto" style="max-width: 600px;">
                        Berikut ini adalah prestasi siswa yang telah diraih oleh sekolah
                    </p>
                </div>
            </div>
        </div>

        <!-- Daftar Pencapaian -->
        <div class="row d-flex align-items-stretch">
            <?php while ($item = $resultpencapaian->fetch_object()) : ?>
                <div class="col-md-4 d-flex mb-4">
                    <a href="./pages/detail/pencapaian.php?id=<?= $item->id ?>" class="pencapaian-post-link w-100">
                        <article class="pencapaian-post w-100 d-flex flex-column">

                            <!-- Tag -->
                            <span class="tag">
                                <i class='bx bxs-award'></i> Prestasi
                            </span>

                            <!-- Gambar -->
                            <img src="../storages/pencapaian/<?= htmlspecialchars($item->image) ?>"
                                alt="<?= htmlspecialchars($item->tingkat) ?>">

                            <!-- Konten -->
                            <div class="content d-flex flex-column flex-fill">

                                <h4><?= htmlspecialchars(substr($item->nama, 0, 80)) ?></h4>

                                <!-- Meta -->
                                <div class="meta">
                                    <span>
                                        <i class='bx bx-layer'></i>
                                        Tingkat: <?= htmlspecialchars($item->tingkat) ?>
                                    </span>
                                    <span>
                                        <i class='bx bx-user'></i>
                                        Juara: <?= htmlspecialchars($item->peraih) ?>
                                    </span>
                                    <span>
                                        <i class='bx bx-purchase-tag'></i>
                                        Kategori: <?= htmlspecialchars($item->kategori) ?>
                                    </span>
                                </div>

                                <!-- Deskripsi -->
                                <p><?= htmlspecialchars(substr($item->keterangan, 0, 100)) ?>...</p>

                                <div class="mt-auto"></div>
                            </div>

                        </article>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>

    </div>
</section>

<!-- =========================
     CSS PENCAPAIAN
========================= -->
<style>
    /* Link */
    .pencapaian-post-link {
        text-decoration: none;
        color: inherit;
        display: flex;
    }

    /* Card */
    .pencapaian-post {
        background: #ffffff;
        border-radius: 16px;
        overflow: hidden;
        position: relative;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .pencapaian-post:hover {
        transform: translateY(-6px);
        box-shadow: 0 14px 30px rgba(0, 0, 0, 0.12);
    }

    /* Gambar */
    .pencapaian-post img {
        width: 100%;
        height: 220px;
        object-fit: cover;
    }

    /* Tag */
    .tag {
        position: absolute;
        top: 14px;
        left: 14px;
        background: #1b5e20;
        color: #fff;
        padding: 6px 14px;
        font-size: 13px;
        font-weight: 600;
        border-radius: 20px;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        z-index: 2;
    }

    /* Konten */
    .pencapaian-post .content {
        padding: 18px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    /* Meta */
    .pencapaian-post .meta {
        display: flex;
        flex-direction: column;
        gap: 6px;
        font-size: 14.5px;
        color: #444;
        margin-bottom: 12px;
    }

    .pencapaian-post .meta span {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .pencapaian-post .meta i {
        font-size: 17px;
        color: #2e7d32;
    }

    /* Judul */
    .pencapaian-post h4 {
        font-size: 16px;
        font-weight: 700;
        color: #1f2933;
        margin-bottom: 6px;
        line-height: 1.4;
    }

    /* Deskripsi */
    .pencapaian-post p {
        font-size: 14px;
        color: #555;
        line-height: 1.6;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .pencapaian-post img {
            height: 190px;
        }
    }
</style>

<!-- Boxicons (WAJIB agar icon muncul) -->
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">