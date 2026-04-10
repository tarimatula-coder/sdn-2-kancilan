<?php
/* artikel */
$qartikel = "SELECT * FROM artikel";
$resultartikel = mysqli_query($connect, $qartikel);
?>

<style>
    /* ================= TAMBAHAN RESPONSIVE ARTIKEL ================= */

    /* Tablet */
    @media (max-width: 1024px) {
        .artikel .row {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
    }

    /* Mobile */
    @media (max-width: 768px) {

        .artikel {
            padding: 80px 15px 40px !important;
        }

        .artikel .title {
            font-size: 26px;
        }

        .artikel .subtitle {
            font-size: 14px;
        }

        .artikel .row {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 15px;
        }

        .artikel .img-box img {
            height: 160px;
            object-fit: cover;
        }

        .artikel .card-body h3 {
            font-size: 18px;
        }

        .artikel .card-body p {
            font-size: 13px;
        }
    }

    /* Mobile kecil */
    @media (max-width: 480px) {

        .artikel .row {
            grid-template-columns: 1fr;
        }

        .artikel .img-box img {
            height: 140px;
        }

        .artikel .card-body {
            padding: 15px;
        }

        .artikel .btn-detail {
            width: 100%;
            text-align: center;
            font-size: 13px;
            padding: 8px;
        }
    }
</style>

<section class="artikel" id="artikel" style="
    padding:100px 0 60px;
    background:#f1f5f9;
">

    <div class="container">

        <div class="text-center mb-5">
            <h2 class="title">Berita</h2>
            <p class="subtitle">Informasi dan kegiatan terbaru sekolah</p>
        </div>

        <div class="row g-4">

            <?php while ($item = $resultartikel->fetch_object()) : ?>

                <?php
                $bulanIndo = [
                    1 => 'Januari',
                    'Februari',
                    'Maret',
                    'April',
                    'Mei',
                    'Juni',
                    'Juli',
                    'Agustus',
                    'September',
                    'Oktober',
                    'November',
                    'Desember'
                ];

                $tgl = strtotime($item->tanggal);
                $tanggalIndo = date('d', $tgl) . ' ' . $bulanIndo[(int)date('m', $tgl)] . ' ' . date('Y', $tgl);
                ?>

                <div class="col-lg-4 col-md-6">

                    <div class="ekskul-card">

                        <!-- IMAGE + BADGE -->
                        <div class="img-box" style="position:relative;">

                            <img src="../storages/artikel/<?= htmlspecialchars($item->image) ?>">

                            <!-- BADGE TANGGAL -->
                            <div style="
                                position:absolute;
                                top:30px;
                                left:30px;
                                background:#1FA67A;
                                color:#fff;
                                font-size:12px;
                                font-weight:600;
                                padding:6px 12px;
                                border-radius:20px;
                            ">
                                <?= $tanggalIndo ?>
                            </div>

                        </div>

                        <div class="card-body">

                            <h3><?= htmlspecialchars($item->nama) ?></h3>

                            <p>
                                <?= htmlspecialchars(substr($item->keterangan, 0, 140)) ?>...
                            </p>

                            <div class="btn-wrapper">
                                <a href="./pages/asla/artikel.php?id=<?= $item->id ?>" class="btn-detail">
                                    Selengkapnya
                                </a>
                            </div>

                        </div>

                    </div>

                </div>

            <?php endwhile; ?>

        </div>

    </div>

</section>