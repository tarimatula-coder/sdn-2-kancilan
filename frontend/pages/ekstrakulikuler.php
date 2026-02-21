<?php
$qekstrakulikuler = "SELECT * FROM ekstrakulikuler LIMIT 3";
$resultekstrakulikuler = mysqli_query($connect, $qekstrakulikuler) or die(mysqli_error($connect));
?>

<section id="ekstrakulikuler">
    <div class="container">

        <!-- JUDUL -->
        <div class="row">
            <div class="col-12">
                <div class="intro text-center mb-5">
                    <h1>Ekstrakulikuler</h1>
                    <p class="mx-auto" style="max-width:600px;">
                        Berikut ini adalah kegiatan ekstrakulikuler yang ada di SMKN 1 Bangsri
                    </p>
                </div>
            </div>
        </div>

        <!-- CARD -->
        <div class="row">
            <?php while ($item = $resultekstrakulikuler->fetch_object()) : ?>
                <div class="col-md-4 mb-4 d-flex">
                    <div class="ekstrakulikuler-post flex-fill">

                        <!-- TAG -->
                        <span class="tag">
                            <i class='bx bxs-news'></i> Ekstrakulikuler
                        </span>

                        <!-- IMAGE -->
                        <div class="img-box">
                            <img src="../storages/ekstrakulikuler/<?= htmlspecialchars($item->image) ?>">

                            <!-- SEARCH -->
                            <button class="search-btn"
                                onclick="openPreview(
                                    '../storages/ekstrakulikuler/<?= htmlspecialchars($item->image) ?>',
                                    '<?= htmlspecialchars($item->nama) ?>',
                                    '<?= htmlspecialchars($item->pembina) ?>',
                                    '<?= htmlspecialchars($item->keterangan) ?>',
                                    '<?= $item->id ?>'
                                )">
                                <i class='bx bx-search'></i>
                            </button>
                        </div>

                        <!-- CONTENT -->
                        <div class="content">
                            <div class="meta">
                                <span><i class='bx bx-user'></i> <?= htmlspecialchars($item->pembina) ?></span>
                            </div>

                            <h5><?= htmlspecialchars(substr($item->nama, 0, 80)) ?></h5>
                            <p><?= htmlspecialchars(substr($item->keterangan, 0, 100)) ?>...</p>

                            <a href="./pages/detail/ekstrakulikuler.php?id=<?= $item->id ?>" class="read-more">
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
        <span id="previewPembina"></span>
        <p id="previewDesc"></p>

        <a id="previewLink" class="preview-link">
            Baca selengkapnya →
        </a>
    </div>
</div>

<!-- ================= CSS ================= -->
<style>
    #ekstrakulikuler {
        background: #f5f7fa;
        padding: 70px 0;
    }

    /* CARD */
    .ekstrakulikuler-post {
        background: #fff;
        border-radius: 5px;
        overflow: hidden;
        position: relative;
        display: flex;
        flex-direction: column;
    }

    /* IMAGE */
    .img-box {
        position: relative;
        height: 230px;
    }

    .img-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* SEARCH */
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
        top: 15px;
        left: 15px;
        background: #e74c3c;
        color: #fff;
        padding: 6px 14px;
        border-radius: 20px;
        font-size: 13px;
        z-index: 2;
    }

    /* CONTENT */
    .content {
        padding: 16px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .meta {
        font-size: 14px;
        color: #777;
        margin-bottom: 6px;
    }

    .content h5 {
        font-weight: 600;
        margin-bottom: 8px;
    }

    .content p {
        font-size: 14px;
        color: #555;
    }

    .read-more {
        margin-top: auto;
        font-weight: 600;
        color: #000;
        text-decoration: none;
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
        margin-bottom: 15px;
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
    function openPreview(img, title, pembina, desc, id) {
        document.getElementById('previewImg').src = img;
        document.getElementById('previewTitle').innerText = title;
        document.getElementById('previewPembina').innerText = "👤 Pembina: " + pembina;
        document.getElementById('previewDesc').innerText = desc;
        document.getElementById('previewLink').href =
            "./pages/detail/ekstrakulikuler.php?id=" + id;

        document.getElementById('previewBox').classList.add('active');
        document.body.style.overflow = "hidden";
    }

    function closePreview() {
        document.getElementById('previewBox').classList.remove('active');
        document.body.style.overflow = "auto";
    }
</script>

<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">