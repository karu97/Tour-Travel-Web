<?php
/*
Template Name: Directory Details
*/
get_header();

?>
<main>
    <!--? Hero Area Start-->
    <div class="slider-area hero-bg3 hero-overly">
        <div class="single-slider   slider-height2 d-flex align-items-end">
            <div class="container">
                <div class="directory-details-head">
                    <section class="wantToWork-area">
                        <div class="wants-wrapper w-padding3">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-xl-8">
                                    <div class="details-cap d-flex">
                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/categori_icon1.png" alt="">
                                        </div>
                                        <div class="properties__caption">
                                            <h3><a href="#">Urban areas</a></h3>
                                            <p>Let's uncover the best places to eat, drink</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4">
                                    <div class="double-btn f-right  d-flex flex-wrap">
                                        <a href="#" class="border-btn w-btn wantToWork-btn mr-20"><i
                                                class="fas fa-globe"></i>Website</a>
                                        <a href="#" class="btn w-btn wantToWork-btn"><i class="fas fa-phone"></i>Call
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <!-- Directory Details start -->
    <div class="directory-details pt-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="small-tittle mb-20">
                        <h2>Description</h2>
                    </div>
                    <div class="directory-cap mb-40">
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be
                            sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                            generators on the Internet tend to repeat predefined chunks as necessary, making this the
                            first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined
                            with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                        </p>
                    </div>
                    <div class="small-tittle mb-20">
                        <h2>Description</h2>
                    </div>
                    <div class="gallery-img">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery1.png" class="mb-30" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery2.png" class="mb-30" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery3.png" class="mb-30" alt="">
                            </div>
                            <div class="col-lg-6">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/gallery4.png" class="mb-30" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="map">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/map.png" alt="">
                    </div>
                    <div class="form-wrapper pt-80">
                        <div class="row ">
                            <div class="col-xl-12">
                                <div class="small-tittle mb-30">
                                    <h2>Contact</h2>
                                </div>
                            </div>
                        </div>
                        <form id="contact-form" action="#" method="POST">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-box user-icon mb-15">
                                        <input type="text" name="name" placeholder="Your name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box email-icon mb-15">
                                        <input type="text" name="email" placeholder="Email address">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-box message-icon mb-15">
                                        <textarea name="message" id="message" placeholder="Comment"></textarea>
                                    </div>
                                    <div class="submit-info">
                                        <button class="submit-btn2" type="submit">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Directory Details End -->
    <!--? Popular Locations Start 01-->
    <div class="popular-location border-bottom section-padding40">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-80">
                        <h2>News & Updates</h2>
                        <p>Let's uncover the best places to eat, drink, and shop nearest to you.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="single-location mb-30">
                        <div class="location-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/home-blog1.png" alt="">
                        </div>
                        <div class="location-details">
                            <a href="#" class="location-btn">Tips</a>
                            <ul>
                                <li>12 March I by Alan</li>
                            </ul>
                            <p><a href="blog_details.html">The Best SPA Salons For Your Relaxation</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="single-location mb-30">
                        <div class="location-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/home-blog2.png" alt="">
                        </div>
                        <div class="location-details">
                            <a href="#" class="location-btn">Tips</a>
                            <ul>
                                <li>12 March I by Alan</li>
                            </ul>
                            <p><a href="blog_details.html">The Best SPA Salons For Your Relaxation</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Locations End -->
    <!--? Want To work 02-->
    <section class="wantToWork-area">
        <div class="container">
            <div class="wants-wrapper w-padding2">
                <div class="row justify-content-between">
                    <div class="col-xl-8 col-lg-8 col-md-7">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo2_footer.png" alt="" class="mb-20">
                            <p>Users and submit their own items. You can create different packages and by connecting
                                with your
                                PayPal or Stripe account charge users for registration to your directory portal.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-5">
                        <div class="footer-social f-right sm-left">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Want To work End -->
    <!--? Want To work 01-->
    <section class="wantToWork-area">
        <div class="container">
            <div class="wants-wrapper">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-7 col-lg-9 col-md-8">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <div class="main-menu2">
                                <nav>
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="explore.html">Explore</a></li>
                                        <li><a href="pages.html">Pages</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4">
                        <a href="#" class="btn f-right sm-left">Add Listing</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Want To work End -->
</main>