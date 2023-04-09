<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mental Health - Home</title>
    <?php include "headerfiles.html" ?>
</head>
<body>
<div class="boxed_wrapper">
    <?php include "publicheader.html" ?>
    <!-- banner-section -->
    <section class="banner-section">
        <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
            <div class="slide-item">
                <div class="image-layer" style="background-image:url(assets/images/banner/banner-1.jpg)"></div>
                <div class="shape" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h3>Clinical Psychology</h3>
                        <h1>Experts In Mental Health.</h1>

                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url(assets/images/banner/banner-2.jpg)"></div>
                <div class="shape" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h3>Clinical Psychology</h3>
                        <h1>Experts In Mental Helth.</h1>

                    </div>
                </div>
            </div>
            <div class="slide-item">
                <div class="image-layer" style="background-image:url(assets/images/banner/banner-3.jpg)"></div>
                <div class="shape" style="background-image: url(assets/images/shape/shape-1.png);"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h3>Clinical Psychology</h3>
                        <h1>Experts In Mental Helth.</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->


    <!-- about-section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_1">
                        <div class="image-box">
                            <figure class="image image-1"><img src="assets/images/resource/about-1.jpg" alt=""></figure>
                            <figure class="image image-2"><img src="assets/images/resource/about-2.jpg" alt=""></figure>
                            <div class="shape" style="background-image: url(assets/images/shape/shape-2.png);"></div>
                            <span class="text">10 years experience</span>
                            <div class="video-btn">
                                <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image"
                                   data-caption=""><i class="flaticon-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_1">
                        <div class="content-box">
                            <div class="sec-title">
                                <h2>We are Ready to Help Improve Your <span>Treatment.</span></h2>
                            </div>
                            <div class="text">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                    suffered alteration in some form, by injected humour, or randomised words which
                                    don't look.</p>
                            </div>
                            <div class="inner-box">
                                <figure class="image-box"><img src="assets/images/resource/about-3.jpg" alt=""></figure>
                                <div class="inner">
                                    <h5><i class="flaticon-brain"></i>Grief & Loss Counseling</h5>
                                    <p>Duis semper venenatis sapien at con- sequat Morbi sollicitudin.</p>
                                </div>
                            </div>
                            <figure class="signature"><img src="assets/images/icons/signature-1.png" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->


    <!-- team-section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title centred">
                <i class="flaticon-brain-1"></i>
                <h6>We Provide</h6>
                <h2>Help Providers</h2>
            </div>
            <div class="row clearfix">
                <?php
                include "connection.php";
                $select = "select * from help_provider";
                $res = mysqli_query($conn, $select);
                while ($row = mysqli_fetch_array($res)) {
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms"
                             data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="text text-center">
                                    <h4><a href="hp_login.php"><?php echo ucwords($row['name']) ?></a></h4>

                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
                }
                ?>

            </div>
        </div>
    </section>
    <!-- team-section end -->


    <!-- cta-section -->
    <section class="cta-section bg-color-2">
        <span class="title-one">b</span>
        <span class="title-two">Psychologist</span>
        <div class="auto-container">
            <div class="inner-box clearfix">
                <div class="text pull-left">
                    <h2><i class="flaticon-brain"></i>Book For <span>Online</span> <br/>Appointments.</h2>
                </div>
                <div class="btn-box pull-right">
                    <a href="login.php" class="theme-btn btn-one">Book Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- cta-section end -->


    <?php include "footer.html"; ?>
</div>
<?php include "footer_scripts.html"; ?>
</body><!-- End of .page_wrapper -->
</html>
