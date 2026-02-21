<?php
// Ambil data contact
$qContact = "SELECT * FROM contact";
$resultContact = mysqli_query($connect, $qContact) or die(mysqli_error($connect));
?>

<main id="main">
    <section id="contact" class="contact section-bg">
        <div class="container">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Magnam dolores commodi suscipit eius consequatur ex aliquid fuga eum quidem</p>
            </div>

            <!-- ================= MAPS ================= -->
            <div class="row mb-5">
                <div class="col-12">
                    <div class="map-responsive">
                        <iframe
                            src="https://maps.google.com/maps?width=600&height=400&hl=en&q=sd%202%20kancilan&t=&z=15&ie=UTF8&iwloc=B&output=embed"
                            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>

            <style>
                /* Responsive map container */
                .map-responsive {
                    position: relative;
                    width: 100%;
                    padding-bottom: 56.25%;
                    /* 16:9 aspect ratio */
                    height: 0;
                    overflow: hidden;
                }

                .map-responsive iframe {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    border: 0;
                }

                /* ================= CONTACT LIST ================= */
                .contact-item {
                    display: flex;
                    align-items: center;
                    gap: 16px;
                    padding: 14px;
                    border-radius: 14px;
                    text-decoration: none;
                    background: #ffffff;
                    margin-bottom: 14px;
                    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                }

                .contact-item:hover {
                    transform: translateY(-4px);
                    box-shadow: 0 12px 26px rgba(0, 0, 0, 0.18);
                }

                .contact-icon {
                    width: 64px;
                    height: 64px;
                    border-radius: 50%;
                    background: linear-gradient(135deg, #1b5e20, #66bb6a);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    flex-shrink: 0;
                }

                .contact-icon img {
                    width: 36px;
                    height: 36px;
                    object-fit: contain;
                }

                /* ================= MESSAGE CARD ================= */
                .message-card {
                    background: #ffffff;
                    border-radius: 20px;
                    padding: 35px;
                    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                    transition: 0.3s ease;
                }

                .message-card:hover {
                    transform: translateY(-4px);
                    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
                }

                .message-card h4 {
                    font-weight: 700;
                    margin-bottom: 10px;
                }

                .message-card p {
                    color: #6c757d;
                    font-size: 14px;
                    margin-bottom: 25px;
                }

                .form-control {
                    border-radius: 12px;
                    padding: 12px 15px;
                }

                .form-control:focus {
                    box-shadow: none;
                    border-color: #FA886E;
                }

                .btn-brand {
                    background-color: #FA886E;
                    color: #fff;
                    border-radius: 12px;
                    padding: 12px;
                    font-weight: 600;
                }
            </style>

            <div class="row">

                <!-- CONTACT LIST -->
                <div class="col-lg-4">
                    <div class="contact-list">
                        <?php
                        mysqli_data_seek($resultContact, 0); // reset pointer
                        while ($item = $resultContact->fetch_object()) : ?>
                            <a href="<?= htmlspecialchars($item->link) ?>" target="_blank" class="contact-item">
                                <div class="contact-icon">
                                    <img src="../storages/contact/<?= htmlspecialchars($item->image) ?>"
                                        alt="<?= htmlspecialchars($item->keterangan) ?>">
                                </div>
                                <span class="contact-text">
                                    <?= htmlspecialchars($item->keterangan) ?>
                                </span>
                            </a>
                        <?php endwhile; ?>
                    </div>
                </div>

                <!-- MESSAGE CARD -->
                <div class="col-lg-8 mt-5 mt-lg-0">
                    <div class="message-card">
                        <h4>Kirim Pesan</h4>
                        <p>Silakan isi form di bawah untuk menghubungi kami</p>

                        <form action="./actions/message.php" method="post" role="form">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <input type="text" name="name" class="form-control"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Pesan</label>
                                <textarea class="form-control" name="pesan"
                                    rows="4" placeholder="Masukan pesan..."></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">No. Telepon</label>
                                <input type="tel" class="form-control"
                                    placeholder="Masukan No.Telepon..." name="phone">
                            </div>

                            <div class="mt-4">
                                <button type="submit" name="tombol"
                                    class="btn btn-brand w-100">
                                    Kirim Pesan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </section>
</main>