<?php
$qheadmaster = "SELECT * FROM headmaster LIMIT 1";
$resultheadmaster = mysqli_query($connect, $qheadmaster) or die(mysqli_error($connect));
?>
<!-- Headmaster -->
<section id="headmaster">
    <div class="container">
        <?php while ($item = $resultheadmaster->fetch_object()) : ?>
            <div class="row align-items-center">
                <!-- Bagian Kiri (Teks) -->
                <div class="col-lg-6">
                    <h4>Sambutan Kepala Sekolah</h4>
                    <p><?= $item->keterangan ?></p>
                </div>

                <!-- Bagian Kanan (Foto + Card Nama) -->
                <div class="col-lg-6 text-center">
                    <div class="headmaster-photo-wrapper">
                        <div class="photo-circle">
                            <img src="../storages/headmaster/<?= $item->image ?>"
                                alt="<?= $item->name ?>"
                                class="headmaster-photo">
                        </div>
                        <div class="headmaster-card">
                            <h5 class="mb-0"><?= $item->name ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>

<style>
    /* =============================
   WRAPPER
============================= */
    .headmaster-photo-wrapper {
        position: relative;
        display: inline-block;
        text-align: center;
        padding: 22px;
    }

    /* =============================
   LAYER BELAKANG
============================= */
    .headmaster-photo-wrapper::before {
        content: "";
        position: absolute;
        width: 300px;
        height: 380px;
        background: linear-gradient(135deg, #e53935, #ff7043);
        border-radius: 20px;
        top: 0;
        left: 0;
        z-index: 0;
    }

    .headmaster-photo-wrapper::after {
        content: "";
        position: absolute;
        width: 300px;
        height: 380px;
        background: #1b263b;
        border-radius: 20px;
        top: 10px;
        left: 10px;
        z-index: 1;
    }

    /* =============================
   FRAME UTAMA
============================= */
    .photo-circle {
        position: relative;
        width: 300px;
        height: 380px;
        background: #0d1b2a;
        border-radius: 20px;
        padding: 10px;
        margin: 0 auto 20px;
        z-index: 2;
        /* box-shadow: 0 28px 55px rgba(0, 0, 0, 0.35); */
    }

    /* FOTO */
    .headmaster-photo {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 16px;
        display: block;
    }

    /* =============================
   CARD NAMA
============================= */
    .headmaster-card {
        position: relative;
        z-index: 3;
        background: rgba(255, 255, 255, 0.96);
        border-radius: 16px;
        padding: 14px 32px;
        display: inline-block;
        /* box-shadow: 0 14px 26px rgba(0, 0, 0, 0.25); */
        border-bottom: 5px solid #e53935;
    }

    .headmaster-card h5 {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 1.05rem;
        color: #0d1b2a;
        margin: 0;
    }

    /* =============================
   RESPONSIVE TABLET
============================= */
    @media (max-width: 992px) {

        .photo-circle,
        .headmaster-photo-wrapper::before,
        .headmaster-photo-wrapper::after {
            width: 260px;
            height: 330px;
        }

        .headmaster-card {
            padding: 12px 28px;
        }
    }

    /* =============================
   RESPONSIVE MOBILE
============================= */
    @media (max-width: 576px) {

        .photo-circle,
        .headmaster-photo-wrapper::before,
        .headmaster-photo-wrapper::after {
            width: 220px;
            height: 280px;
        }

        .headmaster-card {
            padding: 10px 22px;
            border-bottom-width: 4px;
        }

        .headmaster-card h5 {
            font-size: 0.95rem;
        }
    }
</style>