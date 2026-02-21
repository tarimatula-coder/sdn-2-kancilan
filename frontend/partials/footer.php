<?php
$qsocial_media = "SELECT * FROM social_media LIMIT 3";
$resultsocial_media = mysqli_query($connect, $qsocial_media) or die(mysqli_error($connect));

$qabout = "SELECT * FROM about LIMIT 1";
$resultabout = mysqli_query($connect, $qabout) or die(mysqli_error($connect));
$about = mysqli_fetch_object(mysqli_query($connect, $qabout));
?>
<footer id="footer" style="background-image: url('../storages/about/<?= $about->banner ?>');">

    <div class="footer-top">

        <div class="container">
            <?php while ($item = $resultsocial_media->fetch_object()) : ?>
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <a href="#header" class="scrollto footer-logo"><!-- Gambar -->
                            <ul class="footer-menu">
                                <li><a class="nav-link scrollto active" href="#hero-slider">Home</a></li>
                                <li><a class="nav-link scrollto" href="#headmaster">Kepala sekolah</a></li>
                                <li><a class="nav-link scrollto" href="#ekstrakulikuler">Ekstrakulikuler</a></li>
                                <li><a class="nav-link scrollto " href="#pencapaian">Pencapaian</a></li>
                                <li><a class="nav-link scrollto" href="#blog">Blog</a></li>
                                <li><a class="nav-link scrollto" href="#visi-misi">Visi Misi</a></li>
                                <li><a class="nav-link scrollto" href="#guru">Guru</a></li>
                                <li><a class="nav-link scrollto" href="#contact">contact</a></li>
                            </ul>
                    </div>
                </div>
                <a href="<?= $item->link ?>"><img src="../storages/social_media/<?= $item->icon; ?>" alt="<?= $item->icon; ?>" style=" width: 60px; height:60px; border-radius: 50%;"></a>
        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Aslamiyah <strong><span>web developer</span></strong>. Desainer UI/UX
        </div>
    </div>
<?php endwhile; ?>
</footer>
<style>
    #footer {
        width: 100%;
        background-size: cover;
        /* MELEBAR */
        background-position: center;
        /* TENGAH */
        background-repeat: no-repeat;
        /* TIDAK NGULANG */
    }

    /* overlay agar teks terbaca */
    .footer-overlay {
        background: rgba(27, 94, 32, 0.85);
        padding: 60px 0 40px;
    }

    .footer-menu {
        list-style: none;
        padding: 0;
        margin: 0;

        display: flex;
        flex-direction: column;
        /* arah ke bawah */
        flex-wrap: wrap;
        /* boleh pindah ke samping */
        height: 140px;
        /* KUNCI: tinggi untuk 4 item */
        gap: 8px 40px;
        /* jarak vertikal & horizontal */
    }

    .footer-menu li {
        list-style: none;
    }

    .footer-menu li a {
        color: #ffffff;
        text-decoration: none;
        font-size: 14px;
        transition: color 0.3s ease;
    }

    .footer-menu li a:hover {
        color: #a5d6a7;
    }

    @media (max-width: 768px) {
        .footer-menu {
            height: auto;
            flex-direction: column;
        }
    }


    /* SOCIAL MEDIA FOOTER */
    .footer-social {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        margin-top: 20px;
    }

    /* Icon */
    .footer-social img {
        width: 36px;
        /* lebih kecil */
        height: 36px;
        border-radius: 50%;
        background: #ffffff;
        padding: 5px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    /* Hover */
    .footer-social img:hover {
        transform: scale(1.15);
        box-shadow: 0 6px 14px rgba(0, 0, 0, 0.25);
    }

    @media (max-width: 768px) {
        .footer-social img {
            width: 32px;
            height: 32px;
        }
    }
</style>