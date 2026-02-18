<?php
$qguru = "SELECT * FROM guru";
$resultguru = mysqli_query($connect, $qguru) or die(mysqli_error($connect));
?>

<style>
    /* =============================
   TEAM SECTION
============================= */
    .team {
        padding: 60px 0;
        background: #f8f9fa;
    }

    .section-title h2 {
        font-weight: 700;
        font-size: 32px;
    }

    .section-title p {
        color: #6c757d;
    }

    /* =============================
   WRAPPER CARD
============================= */
    .modern-card {
        position: relative;
        display: block;
        padding: 22px;
    }

    /* =============================
   LAYER BELAKANG
============================= */
    .modern-card::before {
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

    .modern-card::after {
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
   FRAME FOTO
============================= */
    .image-wrapper {
        position: relative;
        width: 300px;
        height: 380px;
        background: #0d1b2a;
        border-radius: 20px;
        padding: 10px;
        z-index: 2;
        /* box-shadow: 0 28px 55px rgba(0, 0, 0, 0.35); */
    }

    .image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 16px;
    }

    /* Label */
    .card-label {
        position: absolute;
        top: 16px;
        left: 16px;
        background: #0d6efd;
        color: #fff;
        padding: 7px 16px;
        font-size: 13px;
        border-radius: 50px;
        font-weight: 500;
    }

    /* =============================
   CARD INFO (LEGA & KIRI)
============================= */
    .card-body {
        position: relative;
        z-index: 3;
        margin-top: 14px;
        width: 100%;
        max-width: 260px;
        background: rgba(255, 255, 255, 0.97);
        border-radius: 16px;
        padding: 18px 22px;
        /* box-shadow: 0 16px 28px rgba(0, 0, 0, 0.25); */
        border-bottom: 5px solid #e53935;
    }

    /* TEXT */
    .card-name {
        font-size: 1.1rem;
        font-weight: 700;
        color: #0d1b2a;
        margin-bottom: 6px;
        text-align: center;
    }

    .card-mapel {
        font-size: 14px;
        color: #495057;
        margin-bottom: 4px;
        line-height: 1.4;
        text-align: center;
    }

    .card-gender {
        font-size: 13px;
        color: #6c757d;
        opacity: 0.85;
        text-align: center;
    }

    /* =============================
   RESPONSIVE
============================= */
    @media (max-width: 992px) {

        .image-wrapper,
        .modern-card::before,
        .modern-card::after {
            width: 260px;
            height: 330px;
        }
    }

    @media (max-width: 576px) {

        .image-wrapper,
        .modern-card::before,
        .modern-card::after {
            width: 220px;
            height: 280px;
        }

        .card-body {
            max-width: 220px;
            padding: 14px 16px;
            border-bottom-width: 4px;
        }

        .card-name {
            font-size: 1rem;
        }
    }
</style>

<section id="team" class="team">
    <div class="container">

        <div class="section-title text-center mb-5">
            <h2>Team Guru</h2>
            <p>Guru terbaik yang membimbing siswa dengan profesional dan penuh dedikasi</p>
        </div>

        <div class="row g-4">
            <?php while ($item = $resultguru->fetch_object()) : ?>
                <div class="col-lg-4 col-md-6">
                    <a href="./pages/detail/guru.php?id=<?= $item->id ?>" style="text-decoration:none; color:inherit;">

                        <div class="modern-card">

                            <div class="image-wrapper">
                                <img src="../storages/guru/<?= htmlspecialchars($item->image) ?>"
                                    alt="<?= htmlspecialchars($item->nama) ?>">
                                <div class="card-label">Guru</div>
                            </div>

                            <div class="card-body">
                                <div class="card-name"><?= htmlspecialchars($item->nama) ?></div>
                                <div class="card-mapel"><?= htmlspecialchars($item->mapel) ?></div>
                                <div class="card-gender"><?= htmlspecialchars($item->jenis_kelamin) ?></div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>