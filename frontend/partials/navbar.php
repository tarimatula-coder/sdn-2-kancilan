<header class="navbar">

    <div class="nav-container">

        <div class="logo">
            <img src="../storages/about/<?= htmlspecialchars($aboutHeader->logo) ?>">
            <span><?= htmlspecialchars($aboutHeader->name) ?></span>
        </div>

        <?php
        $currentPage = basename($_SERVER['PHP_SELF']);
        ?>

        <nav class="menu">
            <a href="index.php#home">HOME</a>
            <a href="pages/detail/guru.php#guru">GURU</a>
            <a href="pages/detail/pencapaian.php#pencapaian">PENCAPAIAN</a>
            <a href="pages/detail/galleri.php#galleri">GALERI</a>
            <a href="pages/detail/ekstrakulikuler.php#ekstrakulikuler">EKSTRAKULIKULER</a>
            <a href="index.php#contact">CONTACT</a>
            <a href="https://arsip.siap-ppdb.com/2024/jateng/#/">PPDB</a>
        </nav>
    </div>
    <?php
    $currentPage = basename($_SERVER['PHP_SELF']);
    ?>

    <header class="navbar">
        <div class="nav-container">

            <div class="logo">
                <img src="../storages/about/<?= htmlspecialchars($aboutHeader->logo) ?>">
                <span><?= htmlspecialchars($aboutHeader->name) ?></span>
            </div>

            <!-- HAMBURGER -->
            <div class="hamburger" onclick="toggleMenu()">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <!-- MENU -->
            <nav class="menu" id="menu">
                <a href="index.php#home">HOME</a>
                <a href="pages/detail/guru.php#guru">GURU</a>
                <a href="pages/detail/pencapaian.php#pencapaian">PENCAPAIAN</a>
                <a href="pages/detail/galleri.php#galleri">GALERI</a>
                <a href="pages/detail/ekstrakulikuler.php#ekstrakulikuler">EKSTRAKULIKULER</a>
                <a href="index.php#contact">CONTACT</a>
                <a href="https://arsip.siap-ppdb.com/2024/jateng/#/">PPDB</a>
            </nav>

        </div>
    </header>

    <style>
        /* ================= NAVBAR ================= */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 80px;
            background: #1FA67A;
            display: flex;
            align-items: center;
            z-index: 999;
        }

        .nav-container {
            width: 1400px;
            margin: auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
        }

        /* LOGO */
        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo img {
            width: 45px;
            height: 45px;
        }

        .logo span {
            color: #fff;
            font-weight: 600;
        }

        /* MENU */
        .menu {
            display: flex;
            gap: 25px;
        }

        .menu a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            line-height: 80px;
        }

        /* HAMBURGER */
        .hamburger {
            display: none;
            flex-direction: column;
            gap: 5px;
            cursor: pointer;
        }

        .hamburger div {
            width: 25px;
            height: 3px;
            background: #fff;
        }

        /* ================= RESPONSIVE ================= */
        @media(max-width:900px) {

            .hamburger {
                display: flex;
            }

            .menu {
                position: absolute;
                top: 80px;
                left: 0;
                width: 100%;
                background: #1FA67A;
                flex-direction: column;
                display: none;
                gap: 0;
            }

            .menu a {
                padding: 15px;
                line-height: normal;
                border-top: 1px solid rgba(255, 255, 255, 0.2);
            }

            .menu.active {
                display: flex;
            }
        }
    </style>

    <script>
        function toggleMenu() {
            document.getElementById("menu").classList.toggle("active");
        }
    </script>
</header>