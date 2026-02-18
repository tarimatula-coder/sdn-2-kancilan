<?php
$qpencapaian = "SELECT * FROM pencapaian LIMIT 3";
$resultpencapaian = mysqli_query($connect, $qpencapaian) or die(mysqli_error($connect));
?>

<style>
    .featured {
        padding: 80px 0;
    }

    /* RATA KIRI */
    .featured .row {
        justify-content: flex-start;
    }

    /* CARD */
    .pencapaian-card {
        border-radius: 22px;
        overflow: hidden;
        background: #f4d6cc;
        padding: 8px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        margin-bottom: 40px;
    }

    /* IMAGE */
    .pencapaian-img {
        position: relative;
        border-radius: 18px;
        overflow: hidden;
    }

    .pencapaian-img img {
        width: 100%;
        height: 230px;
        object-fit: cover;
        display: block;
    }

    /* BADGE */
    .pencapaian-badge {
        position: absolute;
        top: 12px;
        left: 12px;
        background: #ff9800;
        color: #fff;
        padding: 6px 14px;
        border-radius: 25px;
        font-size: 13px;
        font-weight: 600;
    }

    /* CONTENT */
    .pencapaian-content {
        background: #a78f88;
        border-radius: 18px;
        padding: 20px;
        margin-top: 15px;
        color: #fff;
    }

    /* TITLE */
    .pencapaian-title {
        font-size: 17px;
        font-weight: 700;
        margin-bottom: 15px;
        text-transform: uppercase;
    }

    /* LIST */
    .pencapaian-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .pencapaian-list li {
        font-size: 14px;
        margin-bottom: 8px;
        text-transform: uppercase;
        display: flex;
        align-items: center;
    }

    /* ICON */
    .pencapaian-list li::before {
        content: "✔";
        display: inline-flex;
        justify-content: center;
        align-items: center;
        width: 18px;
        height: 18px;
        margin-right: 8px;
        border-radius: 50%;
        background: #ffffff33;
        font-size: 12px;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .col-lg-4 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }
</style>

<section id="featured" class="featured">
    <div class="container">
        <div class="row">

            <?php while ($item = $resultpencapaian->fetch_object()) : ?>
                <div class="col-lg-4 col-md-6">
                    <div class="pencapaian-card">

                        <a href="./pages/detail/pencapaian.php?id=<?= $item->id ?>" style="text-decoration:none; color:inherit;">

                            <div class="pencapaian-img">
                                <img src="../storages/pencapaian/<?= htmlspecialchars($item->image) ?>"
                                    alt="<?= htmlspecialchars($item->peraih) ?>">
                                <div class="pencapaian-badge">
                                    🏆 JUARA <?= htmlspecialchars($item->peraih) ?>
                                </div>
                            </div>

                            <div class="pencapaian-content">
                                <div class="pencapaian-title">
                                    <?= strtoupper(htmlspecialchars($item->nama)) ?>
                                </div>

                                <ul class="pencapaian-list">
                                    <li>KATEGORI: <?= strtoupper(htmlspecialchars($item->kategori)) ?></li>
                                    <li>TINGKAT: <?= strtoupper(htmlspecialchars($item->tingkat)) ?></li>
                                    <li>PRESTASI: <?= strtoupper(htmlspecialchars($item->keterangan)) ?></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>

        </div>
    </div>
</section>