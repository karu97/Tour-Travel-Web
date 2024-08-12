<?php
/*
Template Name: Listing Page
*/
get_header();

?>

<main>
    <!--? Hero Area Start-->
    <div class="slider-area hero-bg2 hero-overly">
        <div class="single-slider hero-overly  slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-10">
                        <!-- Hero Caption -->
                        <div class="hero__caption hero__caption2 pt-200">
                            <h1>Explore what you are finding</h1>
                        </div>
                        <!--Hero form -->
                        <form action="#" class="search-box mb-100">
                            <div class="input-form">
                                <input type="text" placeholder="What are you finding?">
                            </div>
                            <div class="select-form">
                                <div class="select-itms">
                                    <select name="select" id="select1">
                                        <option value="">In where?</option>
                                        <option value="">Catagories One</option>
                                        <option value="">Catagories Two</option>
                                        <option value="">Catagories Three</option>
                                        <option value="">Catagories Four</option>
                                    </select>
                                </div>
                            </div>
                            <div class="search-form">
                                <a href="#"><i class="ti-search"></i> Search</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- listing Area Start -->
    <div class="listing-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <!--? Left content -->
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <div class="small-section-tittle2 mb-45">
                                <h4>Advanced Filter</h4>
                            </div>
                        </div>
                    </div>
                    <!-- Job Category Listing start -->
                    <div class="category-listing mb-50">
                        <!-- single one -->
                        <div class="single-listing">
                            <!-- Select City items start -->
                            <div class="select-job-items2">
                                <select name="select2">
                                    <option value="">City</option>
                                    <option value="">Dhaka</option>
                                    <option value="">india</option>
                                    <option value="">UK</option>
                                    <option value="">US</option>
                                    <option value="">Pakistan</option>
                                </select>
                            </div>
                            <!--  Select City items End-->
                            <!-- Select State items start -->
                            <div class="select-job-items2">
                                <select name="select2">
                                    <option value="">State</option>
                                    <option value="">Dhaka</option>
                                    <option value="">Mirpur</option>
                                    <option value="">Danmondi</option>
                                    <option value="">Rampura</option>
                                    <option value="">Htizill</option>
                                </select>
                            </div>
                            <!--  Select State items End-->
                            <!-- Select km items start -->
                            <div class="select-job-items2">
                                <select name="select2">
                                    <option value="">Near 1 km</option>
                                    <option value="">2 km</option>
                                    <option value="">3 km</option>
                                    <option value="">4 km</option>
                                    <option value="">5 km</option>
                                    <option value="">6 km</option>
                                </select>
                            </div>
                            <!--  Select km items End-->
                            <!-- select-Categories start -->
                            <div class="select-Categories pt-80 pb-30">
                                <div class="small-section-tittle2 mb-20">
                                    <h4>Price range</h4>
                                </div>
                                <label class="container">$50 - $150
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">$150 - $300
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">$300 - $500
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">$500 - $1000
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">$1000 - Above
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <!-- select-Categories End -->
                            <!-- select-Categories start -->
                            <div class="select-Categories">
                                <div class="small-section-tittle2 mb-20">
                                    <h4>Tags</h4>
                                </div>
                                <label class="container">Wireless Internet
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Accepts Credit Cards
                                    <input type="checkbox" checked="checked active">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Smoking Allowed
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Parking Street
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container">Coupons
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <!-- select-Categories End -->
                        </div>
                    </div>
                    <!-- Job Category Listing End -->
                </div>
                <!--?  Right content -->
                <div class="col-xl-8 col-lg-8 col-md-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="count mb-35">
                                <span>5432 Listings are available</span>
                            </div>
                        </div>
                    </div>
                    <!--? Popular Directory Start -->
                    <div class="popular-directorya-area fix">
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Single -->
                                <div class="properties properties2 mb-30">
                                    <div class="properties__card">
                                        <div class="properties__img overlay1">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/properties1.png" alt=""></a>
                                            <div class="img-text">
                                                <span>$$$</span>
                                                <span>Closed</span>
                                            </div>
                                            <div class="icon">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/categori_icon1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="properties__caption">
                                            <h3><a href="#">Urban areas</a></h3>
                                            <p>Let's uncover the best places to eat, drink</p>
                                        </div>
                                        <div
                                            class="properties__footer d-flex justify-content-between align-items-center">
                                            <div class="restaurant-name">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/restaurant-icon.png" alt="">
                                                <h3>Food & Restaurant</h3>
                                            </div>
                                            <div class="heart">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/heart1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- Single -->
                                <div class="properties properties2 mb-30">
                                    <div class="properties__card">
                                        <div class="properties__img overlay1">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/properties2.png" alt=""></a>
                                            <div class="img-text">
                                                <span>$$$</span>
                                                <span>Closed</span>
                                            </div>
                                            <div class="icon">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/categori_icon1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="properties__caption">
                                            <h3><a href="#">Urban areas</a></h3>
                                            <p>Let's uncover the best places to eat, drink</p>
                                        </div>
                                        <div
                                            class="properties__footer d-flex justify-content-between align-items-center">
                                            <div class="restaurant-name">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/restaurant-icon.png" alt="">
                                                <h3>Food & Restaurant</h3>
                                            </div>
                                            <div class="heart">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/heart1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- Single -->
                                <div class="properties properties2 mb-30">
                                    <div class="properties__card">
                                        <div class="properties__img overlay1">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/properties3.png" alt=""></a>
                                            <div class="img-text">
                                                <span>$$$</span>
                                                <span>Closed</span>
                                            </div>
                                            <div class="icon">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/categori_icon1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="properties__caption">
                                            <h3><a href="#">Urban areas</a></h3>
                                            <p>Let's uncover the best places to eat, drink</p>
                                        </div>
                                        <div
                                            class="properties__footer d-flex justify-content-between align-items-center">
                                            <div class="restaurant-name">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/restaurant-icon.png" alt="">
                                                <h3>Food & Restaurant</h3>
                                            </div>
                                            <div class="heart">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/heart1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- Single -->
                                <div class="properties properties2 mb-30">
                                    <div class="properties__card">
                                        <div class="properties__img overlay1">
                                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/properties3.png" alt=""></a>
                                            <div class="img-text">
                                                <span>$$$</span>
                                                <span>Closed</span>
                                            </div>
                                            <div class="icon">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/categori_icon1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="properties__caption">
                                            <h3><a href="#">Urban areas</a></h3>
                                            <p>Let's uncover the best places to eat, drink</p>
                                        </div>
                                        <div
                                            class="properties__footer d-flex justify-content-between align-items-center">
                                            <div class="restaurant-name">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/restaurant-icon.png" alt="">
                                                <h3>Food & Restaurant</h3>
                                            </div>
                                            <div class="heart">
                                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/gallery/heart1.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--? Popular Directory End -->
                    <!--Pagination Start  -->
                    <div class="pagination-area text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="single-wrap d-flex justify-content-center">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-start " id="myDIV">
                                                <li class="page-item"><a class="page-link" href="#"><span
                                                            class="ti-angle-left"></span></a></li>
                                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                                <li class="page-item"><a class="page-link" href="#"><span
                                                            class="ti-angle-right"></span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Pagination End  -->
                </div>
            </div>
        </div>
    </div>
    <!-- listing-area Area End -->



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

<?php get_footer(); ?>   