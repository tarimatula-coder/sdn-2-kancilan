<?php
$qpencapaian = "SELECT * FROM pencapaian LIMIT 3";
$resultpencapaian = mysqli_query($connect, $qpencapaian) or die(mysqli_error($connect));
?>

<section id="pencapaian">
    <div class="container">

        <!-- JUDUL -->
        <div class="row">
            <div class="col-12">
                <div class="intro text-center mb-5">
                    <h1>Prestasi</h1>
                    <p class="mx-auto" style="max-width:600px;">
                        Berikut ini adalah prestasi siswa yang telah diraih oleh sekolah
                    </p>
                </div>
            </div>
        </div>

        <!-- CARD -->
        <div class="row">
            <?php while ($item = $resultpencapaian->fetch_object()) : ?>
                <div class="col-md-4 mb-4">
                    <div class="pencapaian-post">
                        <!-- IMAGE -->
                        <div class="img-box">
                            <img src="../storages/pencapaian/<?= htmlspecialchars($item->image) ?>" alt="">
                            
                            <span class="tag tag-prestasi">
                                <i class='bx bxs-award'></i> Prestasi
                            </span>


                            <!-- SEARCH -->
                            <button class="search-btn"
                                onclick="openPreview(
                                    '../storages/pencapaian/<?= htmlspecialchars($item->image) ?>',
                                    '<?= htmlspecialchars($item->nama) ?>',
                                    '<?= htmlspecialchars($item->tingkat) ?>',
                                    '<?= htmlspecialchars($item->peraih) ?>',
                                    '<?= htmlspecialchars($item->kategori) ?>',
                                    '<?= htmlspecialchars($item->keterangan) ?>',
                                    '<?= $item->id ?>'
                                )">
                                <i class='bx bx-search'></i>
                            </button>
                        </div>

                        <!-- CONTENT -->
                        <div class="content">
                            <h4><?= htmlspecialchars(substr($item->nama, 0, 80)) ?></h4>

                            <div class="meta">
                                <span><i class='bx bx-layer'></i> Tingkat: <?= htmlspecialchars($item->tingkat) ?></span>
                                <span><i class='bx bx-user'></i> Juara: <?= htmlspecialchars($item->peraih) ?></span>
                                <span><i class='bx bx-purchase-tag'></i> Kategori: <?= htmlspecialchars($item->kategori) ?></span>
                            </div>

                            <p><?= htmlspecialchars(substr($item->keterangan, 0, 100)) ?>...</p>

                            <a href="./pages/detail/pencapaian.php?id=<?= $item->id ?>" class="read-more">
                                Baca selengkapnya →
                            </a>
                        </div>

                    </div>
                </div>
            <?php endwhile; ?>
        </div>

    </div>
</section>

<!-- ================= PREVIEW ================= -->
<div id="previewBox" class="preview-box">
    <span class="close-btn" onclick="closePreview()">
        <i class='bx bx-x'></i>
    </span>

    <div class="preview-content">
        <img id="previewImg">
        <h3 id="previewTitle"></h3>

        <div class="preview-meta">
            <span id="previewTingkat"></span>
            <span id="previewPeraih"></span>
            <span id="previewKategori"></span>
        </div>

        <p id="previewDesc"></p>

        <a id="previewLink" class="preview-link">
            Baca selengkapnya →
        </a>
    </div>
</div>

<!-- ================= CSS ================= -->
<style>
    #pencapaian {
        background: #f5f5f5;
        padding: 70px 0;
    }

    /* CARD */
    .pencapaian-post {
        background: #fff;
        border-radius: 5px;
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    /* IMAGE */
    .img-box {
        position: relative;
        height: 220px;
    }

    .img-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* SEARCH BUTTON */
    .search-btn {
        position: absolute;
        bottom: 15px;
        right: 15px;
        width: 42px;
        height: 42px;
        background: #000;
        color: #fff;
        border: none;
        border-radius: 10px;
        font-size: 20px;
        cursor: pointer;
    }

    /* TAG */
    .tag {
        position: absolute;
        top: 14px;
        left: 14px;
        background: #000;
        color: #fff;
        padding: 6px 14px;
        border-radius: 20px;
        font-size: 13px;
        z-index: 2;
    }

    /* CONTENT */
    .content {
        padding: 18px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .content h4 {
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    /* META KE BAWAH */
    .meta {
        display: flex;
        flex-direction: column;
        gap: 6px;
        font-size: 14px;
        margin-bottom: 10px;
    }

    .meta i {
        margin-right: 6px;
    }

    /* READ MORE */
    .read-more {
        margin-top: auto;
        font-weight: 600;
        color: #000;
        text-decoration: none;
    }

    .read-more:hover {
        text-decoration: underline;
    }

    /* PREVIEW */
    .preview-box {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, .9);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        padding: 20px;
    }

    .preview-box.active {
        display: flex;
    }

    .preview-content {
        max-width: 900px;
        width: 100%;
        text-align: center;
        color: #fff;
    }

    .preview-content img {
        width: 100%;
        max-height: 65vh;
        object-fit: cover;
        border-radius: 14px;
        border: 2px solid #000;
        margin-bottom: 15px;
    }

    .preview-meta span {
        display: block;
        margin-bottom: 6px;
        font-size: 14px;
    }

    .preview-link {
        display: inline-block;
        margin-top: 12px;
        padding: 8px 20px;
        background: #000;
        color: #fff;
        border-radius: 10px;
        text-decoration: none;
    }

    .close-btn {
        position: absolute;
        top: 20px;
        right: 30px;
        font-size: 40px;
        color: #fff;
        cursor: pointer;
    }
</style>

<!-- ================= JS ================= -->
<script>
    function openPreview(img, title, tingkat, peraih, kategori, desc, id) {
        document.getElementById('previewImg').src = img;
        document.getElementById('previewTitle').innerText = title;
        document.getElementById('previewTingkat').innerText = "🏆 Tingkat: " + tingkat;
        document.getElementById('previewPeraih').innerText = "👤 Juara: " + peraih;
        document.getElementById('previewKategori').innerText = "🏷️ Kategori: " + kategori;
        document.getElementById('previewDesc').innerText = desc;
        document.getElementById('previewLink').href = "./pages/detail/pencapaian.php?id=" + id;

        document.getElementById('previewBox').classList.add('active');
        document.body.style.overflow = "hidden";
    }

    function closePreview() {
        document.getElementById('previewBox').classList.remove('active');
        document.body.style.overflow = "auto";
    }
</script>

<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">