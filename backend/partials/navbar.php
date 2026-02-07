<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>

    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">

            <!-- NOTIFICATION -->
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="#" data-bs-toggle="dropdown">
                    <div class="position-relative">
                        <i class="align-middle" data-feather="bell"></i>
                        <span class="indicator">4</span>
                    </div>
                </a>
            </li>

            <!-- MESSAGE -->
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="message-square"></i>
                </a>
            </li>

            <!-- USER -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                    <img src="../../adminkit-3.1.0/adminkit-3.1.0/static/img/avatars/avatar.jpg"
                        class="avatar img-fluid rounded me-1">
                    <span class="text-dark">Admin</span>
                </a>
            </li>

        </ul>
    </div>
</nav>
<style>
    /* ===== ANIMASI GRADASI NAVBAR ===== */
    @keyframes navbarGradient {
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

    /* ===== NAVBAR UTAMA ===== */
    .navbar-bg {
        background: linear-gradient(90deg,
                #0f766e,
                /* hijau */
                #0ea5e9,
                /* biru */
                #1d4ed8,
                /* biru tua */
                #22c55e
                /* hijau cerah */
            ) !important;

        background-size: 400% 400% !important;
        animation: navbarGradient 14s ease-in-out infinite !important;
        border: none;
    }

    /* ===== ICON & TEKS NAVBAR ===== */
    .navbar a,
    .navbar i,
    .navbar span {
        color: #ffffff !important;
    }

    /* ===== AVATAR TEXT ===== */
    .navbar .text-dark {
        color: #ffffff !important;
    }

    /* ===== NOTIFICATION BADGE ===== */
    .navbar .indicator {
        background-color: #22c55e !important;
        color: #ffffff;
    }

    /* ===== MATIKAN HOVER ===== */
    .navbar a:hover {
        background: transparent !important;
    }
</style>