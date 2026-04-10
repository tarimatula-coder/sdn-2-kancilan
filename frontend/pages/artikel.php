<?php
/* artikel */
$qartikel = "SELECT * FROM artikel";
$resultartikel = mysqli_query($connect, $qartikel);
?>

<style>
    /* ================= CSS KAMU (TETAP) ================= */

    /* ================= RESPONSIVE UPDATE ================= */

    /* Tablet */
    @media (max-width: 1024px) {
        .artikel .row {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }
    }

    /* HP → 3 KOLOM */
    @media (max-width: 768px) {

        .artikel {
            padding: 80px 10px 40px !important;
        }

        .artikel .title {
            font-size: 24px;
        }

        .artikel .subtitle {
            font-size: 13px;
        }

        .artikel .row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .artikel .img-box img {
            height: 110px;
            object-fit: cover;
        }

        .artikel .card-body {
            padding: 10px;
        }

        .artikel .card-body h3 {
            font-size: 13px;
        }

        .artikel .card-body p {
            display: none;
            /* biar muat 3 kolom */
        }

        .artikel .btn-detail {
            font-size: 11px;
            padding: 6px;
        }

        /* badge biar kecil */
        .artikel .img-box div {
            top: 10px !important;
            left: 10px !important;
            font-size: 9px !important;
            padding: 4px 8px !important;
        }
    }

    /* HP kecil tetap 3 kolom */
    @media (max-width: 480px) {

        .artikel .row {
            grid-template-columns: repeat(3, 1fr);
            gap: 6px;
        }

        .artikel .img-box img {
            height: 90px;
        }

        .artikel .card-body h3 {
            font-size: 11px;
        }

        .artikel .btn-detail {
            font-size: 10px;
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

                            <!-- BADGE -->
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