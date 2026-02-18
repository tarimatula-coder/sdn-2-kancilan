<?php
$qabout = "SELECT * FROM about";
$resultabout = mysqli_query($connect, $qabout) or die(mysqli_error($connect));
?>

<section class="hero-slider">

    <?php $i = 0;
    while ($item = $resultabout->fetch_object()) : ?>
        <div class="hero-slide <?= $i === 0 ? 'active' : '' ?>"
            style="background-image: url('../storages/about/<?= $item->banner ?>');">

            <div class="hero-overlay"></div>

            <div class="hero-content">
                <h1><?= $item->name ?></h1>
                <p class="hero-desc"><?= $item->keterangan ?></p>
                <p class="hero-address">📍 <?= $item->alamat ?></p>

                <div class="hero-btn">
                    <a href="#about" class="btn-get-started">Tentang Sekolah</a>
                    <a href="#contact" class="btn-outline">Kontak</a>
                </div>
            </div>
        </div>
    <?php $i++;
    endwhile; ?>

    <!-- DOT NAVIGATION -->
    <div class="hero-dots">
        <?php for ($j = 0; $j < $i; $j++): ?>
            <span class="dot <?= $j === 0 ? 'active' : '' ?>" data-slide="<?= $j ?>"></span>
        <?php endfor; ?>
    </div>

</section>
<style>
    /* =========================
   HERO SLIDER
========================= */
    .hero-slider {
        position: relative;
        width: 100%;
        height: 90vh;
        min-height: 500px;
        overflow: hidden;
    }

    .hero-slide {
        position: absolute;
        inset: 0;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;

        opacity: 0;
        transform: scale(1.05);
        transition: opacity 1s ease, transform 1.2s ease;

        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .hero-slide.active {
        opacity: 1;
        transform: scale(1);
        z-index: 1;
    }

    /* Overlay */
    .hero-overlay {
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.55);
    }

    /* Konten */
    .hero-content {
        position: relative;
        z-index: 2;
        max-width: 900px;
        padding: 20px;
        color: #ffffff;
    }

    .hero-content h1 {
        font-size: 48px;
        font-weight: 700;
        margin-bottom: 16px;
    }

    .hero-desc {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .hero-address {
        font-size: 18px;
        margin-bottom: 32px;
    }

    /* Button */
    .hero-btn {
        display: flex;
        justify-content: center;
        gap: 16px;
        flex-wrap: wrap;
    }

    .btn-get-started {
        padding: 12px 30px;
        background: #ffffff;
        color: #065f46;
        font-weight: 600;
        border-radius: 30px;
        text-decoration: none;
    }

    .btn-outline {
        padding: 12px 30px;
        border: 2px solid #ffffff;
        color: #ffffff;
        font-weight: 600;
        border-radius: 30px;
        text-decoration: none;
    }

    /* DOT */
    .hero-dots {
        position: absolute;
        bottom: 25px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        gap: 10px;
        z-index: 10;
    }

    .hero-dots .dot {
        width: 12px;
        height: 12px;
        background: rgba(255, 255, 255, 0.5);
        border-radius: 50%;
        cursor: pointer;
    }

    .hero-dots .dot.active {
        background: #ffffff;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
        .hero-slider {
            height: 80vh;
        }

        .hero-content h1 {
            font-size: 32px;
        }

        .hero-desc {
            font-size: 16px;
        }

        .hero-address {
            font-size: 15px;
        }
    }
</style>
<script>
    const slides = document.querySelectorAll('.hero-slide');
    const dots = document.querySelectorAll('.dot');
    let current = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('active', i === index);
            dots[i].classList.toggle('active', i === index);
        });
        current = index;
    }

    function nextSlide() {
        let next = (current + 1) % slides.length;
        showSlide(next);
    }

    setInterval(nextSlide, 5000); // ganti slide tiap 5 detik

    dots.forEach(dot => {
        dot.addEventListener('click', () => {
            showSlide(parseInt(dot.dataset.slide));
        });
    });
</script>