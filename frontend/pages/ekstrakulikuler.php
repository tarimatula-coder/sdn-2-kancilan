<?php
$qekstrakulikuler = "SELECT * FROM ekstrakulikuler LIMIT 3";
$resultekstrakulikuler = mysqli_query($connect, $qekstrakulikuler) or die(mysqli_error($connect));
?>

<style>
    .ekstrakulikuler {
        padding: 70px 0;
    }

    .ekstra-card {
        border-radius: 20px;
        overflow: hidden;
        position: relative;
        height: 100%;
        background: linear-gradient(-45deg, #00c9a7, #00f2fe, #007cf0, #00c9a7);
        background-size: 300% 300%;
        animation: gradientMove 6s ease infinite;
        padding: 3px;
    }

    /* Animasi gradasi */
    @keyframes gradientMove {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    /* INNER PUTIH DIHAPUS → ganti gradasi soft */
    .ekstra-inner {
        background: linear-gradient(135deg, #0f2027, #2c5364);
        border-radius: 17px;
        overflow: hidden;
        height: 100%;
        color: #fff;
    }

    /* Tidak ada hover */
    .ekstra-card:hover {
        transform: none;
    }

    /* Image */
    .ekstra-img {
        position: relative;
    }

    .ekstra-img img {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }

    /* Label pojok kiri */
    .ekstra-label {
        position: absolute;
        top: 15px;
        left: 15px;
        background: linear-gradient(135deg, #00c9a7, #007cf0);
        color: #fff;
        padding: 6px 15px;
        font-size: 13px;
        border-radius: 30px;
        font-weight: 600;
    }

    /* Content bawah */
    .ekstra-content {
        padding: 20px;
        background: rgba(255, 255, 255, 0.1);
    }

    /* Judul */
    .ekstra-title {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 10px;
        color: #ffffff;
        transition: 0.3s ease;
    }

    /* Pembina */
    .ekstra-pembina {
        font-size: 14px;
        opacity: 0.9;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .col-lg-4 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }
</style>

<section id="ekstrakulikuler" class="ekstrakulikuler">
    <div class="container">
        <div class="section-title text-center mb-5">
            <h2>Ekstrakurikuler</h2>
            <p>Kegiatan terbaik untuk mengembangkan bakat dan minat siswa</p>
        </div>

        <div class="row">
            <?php while ($item = $resultekstrakulikuler->fetch_object()) : ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="ekstra-card">
                        <div class="ekstra-inner">
                            <a href="./pages/detail/ekstrakulikuler.php?id=<?= $item->id ?>" style="text-decoration:none; color:inherit;">

                                <div class="ekstra-img">
                                    <img src="../storages/ekstrakulikuler/<?= htmlspecialchars($item->image) ?>"
                                        alt="<?= htmlspecialchars($item->nama) ?>">
                                    <div class="ekstra-label">Ekstrakurikuler</div>
                                </div>

                                <div class="ekstra-content">
                                    <div class="ekstra-title">
                                        <?= htmlspecialchars($item->nama) ?>
                                    </div>
                                    <div class="ekstra-pembina">
                                        Pembina: <?= htmlspecialchars($item->pembina) ?>
                                    </div>
                                </div>

                            </a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>