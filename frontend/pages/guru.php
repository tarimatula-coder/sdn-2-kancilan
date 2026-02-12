<?php
$qguru = "SELECT * FROM guru LIMIT 3";
$resultguru = mysqli_query($connect, $qguru) or die(mysqli_error($connect));
?>

<style>
    /* ===== TEAM SECTION ===== */
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

    /* ===== MODERN CARD ===== */
    .modern-card {
        background: #fff;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05);
        transition: 0.3s ease;
        width: 100%;
    }

    .modern-card img {
        width: 100%;
        height: 260px;
        object-fit: cover;
    }

    .card-label {
        position: absolute;
        top: 15px;
        left: 15px;
        background: #0d6efd;
        color: #fff;
        padding: 6px 14px;
        font-size: 12px;
        border-radius: 50px;
        font-weight: 500;
    }

    .image-wrapper {
        position: relative;
    }

    .card-body {
        padding: 20px;
    }

    .card-name {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 8px;
        color: #212529;
    }

    .card-mapel {
        font-size: 14px;
        color: #6c757d;
        margin-bottom: 5px;
    }

    .card-gender {
        font-size: 13px;
        color: #adb5bd;
    }

    /* Responsive spacing */
    @media (max-width: 768px) {
        .modern-card img {
            height: 220px;
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
                    <a href="./pages/detail/guru.php?id=<?= $item->id ?>"
                        style="text-decoration:none; color:inherit;">

                        <div class="modern-card">

                            <div class="image-wrapper">
                                <img src="../storages/guru/<?= htmlspecialchars($item->image) ?>"
                                    alt="<?= htmlspecialchars($item->nama) ?>">
                                <div class="card-label">Guru</div>
                            </div>

                            <div class="card-body">
                                <div class="card-name">
                                    <?= htmlspecialchars($item->nama) ?>
                                </div>

                                <div class="card-mapel">
                                    <?= htmlspecialchars($item->mapel) ?>
                                </div>

                                <div class="card-gender">
                                    <?= htmlspecialchars($item->jenis_kelamin) ?>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endwhile; ?>
        </div>

    </div>
</section>