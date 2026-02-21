<?php
$qBlog = "SELECT * FROM blog LIMIT 3";
$resultBlog = mysqli_query($connect, $qBlog) or die(mysqli_error($connect));
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Blog Sekolah</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- BOXICONS -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    <style>
        /* ===============================
   SECTION
================================*/
        #blog {
            padding: 60px 0;
            background: #f8f9fb;
        }

        /* ===============================
   BLOG CARD
================================*/
        .blog-card {
            background: #fff;
            border-radius: 5px;
            overflow: hidden;
            transition: .3s;
        }

        /* IMAGE */
        .blog-img {
            position: relative;
            height: 260px;
        }

        .blog-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* SEARCH BUTTON */
        .search-btn {
            position: absolute;
            bottom: 15px;
            right: 15px;
            width: 45px;
            height: 45px;
            background: #000;
            color: #fff;
            border: none;
            border-radius: 12px;
            font-size: 22px;
            cursor: pointer;
        }

        /* BODY */
        .blog-body {
            padding: 18px;
        }

        .meta {
            display: flex;
            gap: 15px;
            font-size: 14px;
            color: #777;
            margin-bottom: 8px;
        }

        .meta i {
            color: #0d6efd;
        }

        .blog-body h5 {
            font-weight: 700;
            margin-bottom: 6px;
        }

        .blog-body p {
            font-size: 14px;
            color: #555;
        }

        .read-more {
            display: inline-block;
            margin-top: 8px;
            font-weight: 600;
            color: #0d6efd;
            text-decoration: none;
        }

        /* ===============================
   PREVIEW FULLSCREEN
================================*/
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
            max-height: 70vh;
            object-fit: cover;
            border-radius: 5px;
            border: 4px solid #000;
        }

        .preview-caption {
            margin-top: 20px;
        }

        .preview-meta {
            font-size: 14px;
            margin-bottom: 8px;
        }

        .preview-meta span {
            margin: 0 10px;
        }

        .preview-btn {
            display: inline-block;
            margin-top: 15px;
            padding: 8px 20px;
            background: #0d6efd;
            color: #fff;
            border-radius: 10px;
            text-decoration: none;
        }

        .preview-close {
            position: absolute;
            top: 25px;
            right: 35px;
            font-size: 40px;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <section id="blog">
        <div class="container">

            <!-- JUDUL -->
            <div class="row mb-4">
                <div class="col-12 text-center">
                    <h1 class="fw-bold">Blog</h1>
                    <p class="text-muted">Artikel dan dokumentasi kegiatan sekolah</p>
                </div>
            </div>

            <!-- CARD -->
            <div class="row g-4">
                <?php while ($item = $resultBlog->fetch_object()) : ?>
                    <div class="col-md-4">
                        <div class="blog-card">

                            <div class="blog-img">
                                <!-- TAG BLOG -->
                                <span class="tag tag-blog">
                                    <i class='bx bxs-news'></i> Blog
                                </span>
                                <img src="../storages/blog/<?= htmlspecialchars($item->image) ?>" alt="">
                                <button class="search-btn"
                                    onclick="openPreview(
                            '../storages/blog/<?= htmlspecialchars($item->image) ?>',
                            '<?= htmlspecialchars($item->judul) ?>',
                            '<?= htmlspecialchars($item->tanggal) ?>',
                            '<?= htmlspecialchars($item->penulis) ?>',
                            '<?= htmlspecialchars($item->keterangan) ?>',
                            '<?= $item->id ?>'
                        )">
                                    <i class='bx bx-search'></i>
                                </button>
                            </div>

                            <div class="blog-body">
                                <div class="meta">
                                    <span><i class='bx bx-calendar'></i> <?= htmlspecialchars($item->tanggal) ?></span>
                                    <span><i class='bx bx-user'></i> <?= htmlspecialchars($item->penulis) ?></span>
                                </div>

                                <h5><?= htmlspecialchars($item->judul) ?></h5>
                                <p><?= htmlspecialchars(substr($item->keterangan, 0, 90)) ?>...</p>

                                <a href="./pages/detail/blog.php?id=<?= $item->id ?>" class="read-more">
                                    Baca selengkapnya →
                                </a>
                            </div>

                        </div>
                    </div>
                <?php endwhile; ?>
            </div>

        </div>
    </section>


    <!-- ===============================
     PREVIEW
=================================-->
    <div id="previewBox" class="preview-box">
        <span class="preview-close" onclick="closePreview()">
            <i class='bx bx-x'></i>
        </span>

        <div class="preview-content">
            <img id="previewImg">

            <div class="preview-caption">
                <div class="preview-meta">
                    <span id="previewDate"></span>
                    <span id="previewAuthor"></span>
                </div>

                <h4 id="previewTitle"></h4>
                <p id="previewDesc"></p>

                <a id="previewLink" class="preview-btn">
                    Baca selengkapnya →
                </a>
            </div>
        </div>
    </div>


    <script>
        function openPreview(img, title, date, author, desc, id) {
            document.getElementById('previewImg').src = img;
            document.getElementById('previewTitle').innerText = title;
            document.getElementById('previewDate').innerText = "📅 " + date;
            document.getElementById('previewAuthor').innerText = "✍ " + author;
            document.getElementById('previewDesc').innerText = desc;
            document.getElementById('previewLink').href =
                "./pages/detail/blog.php?id=" + id;

            document.getElementById('previewBox').classList.add('active');
            document.body.style.overflow = "hidden";
        }

        function closePreview() {
            document.getElementById('previewBox').classList.remove('active');
            document.body.style.overflow = "auto";
        }
    </script>

</body>

</html>