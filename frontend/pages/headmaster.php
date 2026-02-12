<?php
$qheadmaster = "SELECT * FROM headmaster LIMIT 3";
$resultheadmaster = mysqli_query($connect, $qheadmaster) or die(mysqli_error($connect));
?>
<section id="about" class="about">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>About Us</h2>
            <p>Magnam dolores commodi suscipit eius consequatur</p>
        </div>

        <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="image">
                    <img src="knight-v.01/assets/img/about.jpg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="content pt-4 pt-lg-0 pl-0 pl-lg-3 ">
                    <h3>Voluptatem dignissimos provident quasi corporis</h3>
                    <p class="fst-italic">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua.
                    </p>
                    <ul>
                        <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        <li><i class="bx bx-check-double"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                        <li><i class="bx bx-check-double"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section><!-- End About Us Section -->