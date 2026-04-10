<?php
$qheadmaster = "SELECT * FROM headmaster LIMIT 1";
$resultheadmaster = mysqli_query($connect, $qheadmaster) or die(mysqli_error($connect));
?>

<section id="headmaster" class="headmaster-section">
    <div class="container">
        <?php while ($item = $resultheadmaster->fetch_object()) : ?>
            <div class="row align-items-center g-5">

                <!-- TEXT -->
                <div class="col-lg-6">
                    <h4 class="headmaster-title">SAMBUTAN KEPALA SEKOLAH</h4>
                    <div class="headmaster-text">
                        <?= $item->keterangan ?>
                    </div>
                </div>

                <!-- CARD FOTO -->
                <div class="col-lg-6 text-center">
                    <div class="headmaster-card">

                        <div class="frame-soft"></div>

                        <div class="photo-box">
                            <img src="../storages/headmaster/<?= $item->image ?>" alt="<?= $item->name ?>">
                        </div>

                        <div class="name-badge">
                            <?= $item->name ?>
                        </div>

                    </div>
                </div>

            </div>
        <?php endwhile; ?>
    </div>
</section>

<style>
    /* ================= CSS ASLI ================= */

    .headmaster-section {
        background: #f8fafc;
        padding: 80px 0;
    }

    .headmaster-title {
        font-weight: 700;
        margin-bottom: 18px;
        color: #1FA67A;
    }

    .headmaster-text {
        background: rgba(255, 255, 255, 0.95);
        padding: 26px;
        border-radius: 20px;
        border: 1px solid rgba(0, 0, 0, 0.3);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        line-height: 1.8;
        color: #000;
        font-size: 15px;
    }

    .headmaster-card {
        position: relative;
        width: 300px;
        margin: auto;
    }

    .frame-soft {
        position: absolute;
        width: 100%;
        height: 100%;
        border: 5px solid rgba(27, 94, 32, 0.4);
        border-radius: 24px;
        transform: translate(25px, -20px);
        z-index: 1;
    }

    .photo-box {
        position: relative;
        height: 390px;
        border-radius: 30px;
        overflow: hidden;
        z-index: 2;
        box-shadow: 0 18px 40px rgba(27, 94, 32, 0.12);
    }

    .photo-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .name-badge {
        position: absolute;
        bottom: -18px;
        left: 50%;
        transform: translateX(-50%);
        background: #1FA67A;
        padding: 12px 30px;
        width: 200px;
        border-radius: 999px;
        font-weight: 600;
        font-size: 14px;
        color: #fff;
    }

    /* ================= RESPONSIVE ================= */

    /* TABLET */
    @media (max-width: 1024px) {
        .headmaster-card {
            width: 260px;
        }

        .photo-box {
            height: 340px;
        }
    }

    /* HP */
    @media (max-width: 768px) {

        .headmaster-section {
            padding: 60px 15px;
        }

        .row {
            flex-direction: column-reverse;
            align-items: center;
            text-align: center;
        }

        .headmaster-title {
            font-size: 20px;
        }

        .headmaster-text {
            font-size: 14px;
            padding: 18px;
            line-height: 1.6;
        }

        .headmaster-card {
            width: 200px;
            margin-bottom: 25px;
        }

        .photo-box {
            height: 240px;
        }

        .frame-soft {
            transform: translate(10px, -10px);
        }

        .name-badge {
            width: 160px;
            font-size: 12px;
            padding: 8px;
            bottom: -12px;
        }
    }

    /* HP KECIL */
    @media (max-width: 480px) {

        .headmaster-card {
            width: 180px;
        }

        .photo-box {
            height: 220px;
        }

        .headmaster-text {
            font-size: 13px;
        }

        .name-badge {
            width: 140px;
            font-size: 11px;
        }
    }
</style>