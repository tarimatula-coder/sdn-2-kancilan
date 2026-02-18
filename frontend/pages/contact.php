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
            <style>
                /* Item */
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

                /* Icon BULAT */
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

                /* GAMBAR – FIX */
                .contact-icon img {
                    width: 36px;
                    height: 36px;
                    object-fit: contain;
                    display: block;
                    /* HAPUS filter */
                }

                /* Text */
                .contact-text h4 {
                    font-size: 15px;
                    font-weight: 600;
                    color: #1f2933;
                    margin: 0;
                }
            </style>

            <div class="row">

                <div class="col-lg-4">
                    <div class="contact-list">
                        <?php while ($item = $resultContact->fetch_object()) : ?>
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

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="./actions/message.php" method="post" role="form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea placeholder="Masukan pesan..." class="form-control" id="pesan" name="pesan"
                                rows="4"></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <label for="phone" class="form-label">No.Telepon</label>
                            <input type="phone" class="form-control" placeholder="Masukan No.Telepon..." name="phone" id="phone"
                                aria-describedby="phone">
                        </div>
                        <div class="col-12 mt-3">
                            <button type="submit" name="tombol"
                                class="btn btn-brand w-100"
                                style="background-color:#FA886E; color:white;">
                                Kirim Pesan
                            </button>
                        </div>
                    </form>

                </div>

            </div>

        </div>
    </section>
</main>