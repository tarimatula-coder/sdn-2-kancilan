<?php
$qGuru = "SELECT * FROM guru LIMIT 3";
$resultGuru = mysqli_query($connect, $qGuru) or die(mysqli_error($connect));
?>

<!-- =============================
 SECTION GURU
============================= -->
<section id="guru">
    <div class="container">

        <!-- JUDUL -->
        <div class="row">
            <div class="col-12">
                <div class="intro text-center mb-5">
                    <h1>Guru</h1>
                    <p class="mx-auto" style="max-width:600px;">
                        Guru terbaik yang membimbing siswa dengan profesional dan penuh dedikasi
                    </p>
                </div>
            </div>
        </div>

        <!-- CARD GURU -->
        <div class="row text-center d-flex align-items-stretch">
            <?php while ($item = $resultGuru->fetch_object()) : ?>
                <div class="col-md-4 d-flex mb-4">
                    <article class="guru-card d-flex flex-column">
                        <!-- TAG GURU -->
                        <span class="tag tag-guru">
                            <i class='bx bxs-user'></i> Guru
                        </span>

                        <!-- IMAGE -->
                        <div class="guru-img-box">
                            <img src="../storages/guru/<?= htmlspecialchars($item->image) ?>"
                                alt="<?= htmlspecialchars($item->nama) ?>">

                            <!-- SEARCH -->
                            <button class="guru-search-btn"
                                onclick="openGuruPreview(
                                    '../storages/guru/<?= htmlspecialchars($item->image) ?>',
                                    '<?= htmlspecialchars($item->nama) ?>',
                                    '<?= htmlspecialchars($item->mapel) ?>',
                                     '<?= htmlspecialchars($item->jenis_kelamin) ?>',
                                    '<?= $item->id ?>'
                                )">
                                <i class='bx bx-search'></i>
                            </button>
                        </div>

                        <!-- CONTENT -->
                        <div class="guru-content d-flex flex-column flex-fill">
                            <h5><?= htmlspecialchars($item->nama) ?></h5>
                            <p class="guru-mapel"><?= htmlspecialchars($item->mapel) ?></p>
                            <p class="guru-mapel"><?= htmlspecialchars($item->jenis_kelamin) ?></p>

                            <a href="./pages/detail/guru.php?id=<?= $item->id ?>" class="guru-read">
                                Baca selengkapnya →
                            </a>
                        </div>

                    </article>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<!-- =============================
 PREVIEW MODAL
============================= -->
<div id="guruPreview" class="guru-preview">
    <span class="guru-close" onclick="closeGuruPreview()">
        <i class='bx bx-x'></i>
    </span>

    <div class="guru-preview-content">
        <img id="guruPreviewImg">
        <h3 id="guruPreviewNama"></h3>
        <p id="guruPreviewMapel"></p>

        <!-- <a id="guruPreviewLink" class="guru-preview-link">
            Baca selengkapnya →
        </a> -->
    </div>
</div>

<!-- =============================
 CSS
============================= -->
<style>
    #guru {
        background: #e6ebf2;
        padding: 70px 0;
    }

    /* CARD */
    .guru-card {
        background: #fff;
        border-radius: 5px;
        overflow: hidden;
        position: relative;
        transition: .3s;
        width: 100%;
    }

    /* TAG */
    .guru-tag {
        position: absolute;
        top: 15px;
        left: 15px;
        background: #3498db;
        color: #fff;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 13px;
        z-index: 2;
    }

    /* IMAGE */
    .guru-img-box {
        position: relative;
    }

    .guru-img-box img {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }

    /* SEARCH */
    .guru-search-btn {
        position: absolute;
        bottom: 15px;
        right: 15px;
        width: 40px;
        height: 40px;
        background: #000;
        color: #fff;
        border: none;
        border-radius: 10px;
        font-size: 20px;
        cursor: pointer;
    }

    /* CONTENT */
    .guru-content {
        padding: 15px;
    }

    .guru-content h5 {
        font-weight: 700;
        margin-bottom: 5px;
    }

    .guru-mapel {
        font-size: 14px;
        color: #555;
    }

    /* READ MORE */
    .guru-read {
        margin-top: auto;
        font-weight: 600;
        text-decoration: none;
        color: #000;
    }

    .guru-read:hover {
        text-decoration: underline;
    }

    /* PREVIEW */
    .guru-preview {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, .9);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 9999;
    }

    .guru-preview.active {
        display: flex;
    }

    .guru-preview-content {
        max-width: 500px;
        width: 100%;
        text-align: center;
        color: #fff;
    }

    .guru-preview-content img {
        width: 100%;
        max-height: 300px;
        object-fit: cover;
        margin-bottom: 15px;
    }

    .guru-preview-link {
        display: inline-block;
        margin-top: 12px;
        padding: 8px 20px;
        background: #000;
        color: #fff;
        border-radius: 10px;
        text-decoration: none;
    }

    /* CLOSE */
    .guru-close {
        position: absolute;
        top: 20px;
        right: 30px;
        font-size: 40px;
        color: #fff;
        cursor: pointer;
    }
</style>

<!-- =============================
 JAVASCRIPT
============================= -->
<script>
    function openGuruPreview(img, nama, mapel, id) {
        document.getElementById('guruPreviewImg').src = img;

        document.getElementById('guruPreview').classList.add('active');
        document.body.style.overflow = "hidden";
    }

    function closeGuruPreview() {
        document.getElementById('guruPreview').classList.remove('active');
        document.body.style.overflow = "auto";
    }
</script>

<!-- BOXICONS -->
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">