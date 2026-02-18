<?php
$qvisi = "SELECT * FROM visi_misi WHERE category='visi'";
$qmisi = "SELECT * FROM visi_misi WHERE category='misi'";

$resultVisi = mysqli_query($connect, $qvisi);
$resultMisi = mysqli_query($connect, $qmisi);
?>

<section id="visi-misi" class="visi-misi">
    <div class="container">

        <!-- Judul -->
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h1>Visi & Misi</h1>
                <p class="mx-auto" style="max-width:600px;">
                    Visi dan Misi sebagai arah dan tujuan pendidikan sekolah
                </p>
            </div>
        </div>

        <!-- Accordion -->
        <div class="accordion visi-misi-accordion" id="accordionVisiMisi">

            <!-- VISI (TERBUKA DEFAULT) -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingVisi">
                    <button class="accordion-button"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseVisi"
                        aria-expanded="true"
                        aria-controls="collapseVisi">
                        <i class='bx bx-bullseye me-2'></i> VISI SEKOLAH
                    </button>
                </h2>

                <div id="collapseVisi"
                    class="accordion-collapse collapse show"
                    aria-labelledby="headingVisi"
                    data-bs-parent="#accordionVisiMisi">

                    <div class="accordion-body">
                        <ol class="visi-list">
                            <?php if (mysqli_num_rows($resultVisi) > 0) : ?>
                                <?php while ($v = mysqli_fetch_object($resultVisi)) : ?>
                                    <li><?= htmlspecialchars($v->text) ?></li>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <li>Visi belum tersedia.</li>
                            <?php endif; ?>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- MISI -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingMisi">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseMisi"
                        aria-expanded="false"
                        aria-controls="collapseMisi">
                        <i class='bx bx-list-check me-2'></i> MISI SEKOLAH
                    </button>
                </h2>

                <div id="collapseMisi"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingMisi"
                    data-bs-parent="#accordionVisiMisi">

                    <div class="accordion-body">
                        <ol class="misi-list">
                            <?php if (mysqli_num_rows($resultMisi) > 0) : ?>
                                <?php while ($m = mysqli_fetch_object($resultMisi)) : ?>
                                    <li><?= htmlspecialchars($m->text) ?></li>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <li>Misi belum tersedia.</li>
                            <?php endif; ?>
                        </ol>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CSS -->
<style>
    .visi-misi {
        padding: 60px 0;
        background: #f8f9fa;
    }

    /* Accordion Card */
    .visi-misi-accordion .accordion-item {
        border: none;
        border-radius: 16px;
        margin-bottom: 16px;
        overflow: hidden;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }

    .visi-misi-accordion .accordion-button {
        font-weight: 600;
        font-size: 16px;
        padding: 18px 24px;
    }

    .visi-misi-accordion .accordion-button:not(.collapsed) {
        background: linear-gradient(90deg, #2563eb, #1e40af);
        color: #ffffff;
    }

    .visi-misi-accordion .accordion-button:not(.collapsed)::after {
        filter: brightness(0) invert(1);
    }

    .visi-misi-accordion .accordion-body {
        padding: 25px 30px;
        font-size: 15px;
        line-height: 1.8;
        color: #374151;
    }

    /* LIST URUT */
    .visi-list,
    .misi-list {
        padding-left: 20px;
        margin: 0;
    }

    .visi-list li,
    .misi-list li {
        margin-bottom: 12px;
    }
</style>

<!-- Boxicons -->
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">