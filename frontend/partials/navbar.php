<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

        <div class="logo">
            <a href="index.html"><img src="knight-v.01/assets/img/logo.png" alt="" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero-slider">Home</a></li>
                <li><a class="nav-link scrollto" href="#headmaster">Kepala sekolah</a></li>
                <li><a class="nav-link scrollto" href="#ekstrakulikuler">Ekstrakulikuler</a></li>
                <li><a class="nav-link scrollto " href="#pencapaian">Pencapaian</a></li>
                <li><a class="nav-link scrollto" href="#blog">Blog</a></li>
                <li><a class="nav-link scrollto" href="#visi-misi">Visi Misi</a></li>
                <li><a class="nav-link scrollto" href="#guru">Guru</a></li>
                <li><a class="nav-link scrollto" href="#contact">contact</a></li>
                <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                            <ul>
                                <li><a href="#">Deep Drop Down 1</a></li>
                                <li><a href="#">Deep Drop Down 2</a></li>
                                <li><a href="#">Deep Drop Down 3</a></li>
                                <li><a href="#">Deep Drop Down 4</a></li>
                                <li><a href="#">Deep Drop Down 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Drop Down 2</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->
<style>
    /* =========================
   HEADER HIJAU TUA + BIRU MUDA (ANIMASI)
========================= */
    #header {
        background: linear-gradient(90deg, #1b5e20, #90caf9);
        background-size: 200% 200%;
        animation: gradientMove 6s ease infinite;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.25);
        z-index: 999;
    }

    /* Animasi gradasi bergerak halus */
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

    /* =========================
   TEXT NAVBAR HITAM
========================= */
    #header .navbar a,
    #header .navbar a span,
    #header i {
        color: #1f2933 !important;
        /* hitam lembut */
        font-weight: 600;
        transition: color 0.3s ease;
    }

    /* Hover menu */
    #header .navbar a:hover {
        color: #0f5132 !important;
        /* hijau tua saat hover */
    }

    /* Logo agar kontras */
    #header .logo img {
        filter: brightness(0) invert(1);
    }
</style>