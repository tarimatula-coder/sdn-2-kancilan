<?php
/* fasilitas */
$qfasilitas = "SELECT * FROM fasilitas LIMIT 3";
$resultfasilitas = mysqli_query($connect, $qfasilitas);
?>

<section class="fasilitas" id="fasilitas" style="
    padding:100px 0 60px;
    background:#f1f5f9;
">

    <div class="container">

        <div class="text-center mb-5">
            <h2 class="title">Fasilitas</h2>
            <p class="subtitle">fasilitas yang ada di sekolah</p>
        </div>

        <div class="row g-4">

            <?php while ($item = $resultfasilitas->fetch_object()) : ?>

                <div class="col-lg-4 col-md-6">

                    <!-- 🔥 SAMA CLASS DENGAN ARTIKEL -->
                    <div class="ekskul-card">

                        <div class="img-box">
                            <img src="../storages/fasilitas/<?= htmlspecialchars($item->image) ?>">
                        </div>

                        <div class="card-body">
                            <h3><?= htmlspecialchars($item->nama) ?></h3>

                            <!-- BIAR TINGGI SAMA -->
                            <p style="visibility:hidden;"></p>
                        </div>

                    </div>

                </div>

            <?php endwhile; ?>

        </div>

    </div>

</section>

<style>
    /* ================= CSS KAMU (TETAP) ================= */
    /* (tidak saya ubah, hanya lanjut ke responsive) */


    /* ================= RESPONSIVE UPDATE ================= */

    /* Tablet */
    @media (max-width: 1024px) {
        .fasilitas .row {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
        }

        .fasilitas .img-box img {
            height: 180px;
            object-fit: cover;
        }
    }

    /* HP → 3 KOLOM */
    @media (max-width: 768px) {

        .fasilitas {
            padding: 80px 10px 40px !important;
        }

        .fasilitas .title {
            font-size: 24px;
        }

        .fasilitas .subtitle {
            font-size: 13px;
        }

        .fasilitas .row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .fasilitas .img-box img {
            height: 110px;
        }

        .fasilitas .card-body {
            padding: 10px;
        }

        .fasilitas .card-body h3 {
            font-size: 14px;
        }
    }

    /* HP KECIL → tetap 3 kolom */
    @media (max-width: 480px) {

        .fasilitas .row {
            grid-template-columns: repeat(3, 1fr);
            gap: 6px;
        }

        .fasilitas .img-box img {
            height: 90px;
        }

        .fasilitas .card-body h3 {
            font-size: 12px;
        }
    }
</style>