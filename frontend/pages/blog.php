<?php
$qBlog = "SELECT * FROM blog LIMIT 3";
$resultBlog = mysqli_query($connect, $qBlog) or die(mysqli_error($connect));
?>

<section id="blog">
    <div class="container">

        <!-- Judul Section -->
        <div class="row">
            <div class="col-12">
                <div class="intro text-center">
                    <h1>Blog</h1>
                    <p class="mx-auto" style="max-width: 600px;">Berikut ini adalah artikel/blog yang ada di SMKN 1 Bangsri</p>
                </div>
            </div>
        </div>

        <!-- Daftar Blog -->
        <div class="row text-center d-flex align-items-stretch">
            <?php while ($item = $resultBlog->fetch_object()) : ?>
                <div class="col-md-4 d-flex">
                    <a href="./pages/detail/blog.php?id=<?= $item->id ?>" class="blog-post-link flex-fill">
                        <article class="blog-post d-flex flex-column">
                            <!-- Label Blog -->
                            <span class="tag">
                                <i class='bx bxs-news'></i> Blog
                            </span>

                            <!-- Gambar -->
                            <img src="../storages/blog/<?= htmlspecialchars($item->image) ?>"
                                alt="<?= htmlspecialchars($item->judul) ?>">

                            <!-- Konten -->
                            <div class="content d-flex flex-column flex-fill">
                                <div class="meta">
                                    <span><i class="bx bx-calendar"></i> <?= htmlspecialchars($item->tanggal) ?></span>
                                    <span><i class="bx bx-user"></i> <?= htmlspecialchars($item->penulis) ?></span>
                                </div>
                                <h5><?= htmlspecialchars(substr($item->judul, 0, 100)) ?></h5>
                                <p class="mb-3"><?= htmlspecialchars(substr($item->keterangan, 0, 100)) ?>...</p>
                                <!-- Spacer biar konten bawah rata -->
                                <div class="mt-auto"></div>
                            </div>
                        </article>
                    </a>
                </div>
            <?php endwhile; ?>

            <!-- Tombol Lihat Semua -->
            <div class="row mt-4">
                <div class="col-12 text-center mt-4">
                    <a href="./pages/detail/allBlog.php" class="btn btn-primary">Lihat semua</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CSS -->
<style>
    /* Link Blog */
    .blog-post-link {
        text-decoration: none;
        color: inherit;
        display: flex;
        flex: 1;
    }

    /* Box Blog */
    .blog-post {
        background: #fff;
        border-radius: 15px;
        overflow: hidden;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        flex: 1;
    }

    .blog-post:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
    }

    /* Gambar */
    .blog-post img {
        width: 100%;
        height: 370px;
        object-fit: cover;
        border-bottom: 4px solid #eee;
    }

    /* Tag */
    .tag {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: #e74c3c;
        color: #fff;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 14px;
        font-weight: 500;
        position: absolute;
        top: 15px;
        left: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15); 
        z-index: 2;
    }

    .tag i {
        font-size: 16px;
    }

    /* Content */
    .blog-post .content {
        padding: 15px;
        text-align: left;
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .blog-post .content p {
        font-size: 14px;
        color: #555;
        margin-bottom: 0;
    }

    /* Meta Info */
    .blog-post .content .meta {
        display: flex;
        align-items: center;
        gap: 15px;
        font-size: 14px;
        color: #777;
        margin-bottom: 8px;
    }

    .blog-post .content .meta i {
        color: #3498db;
        font-size: 16px;
    }
</style>

<!-- Boxicons -->
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">