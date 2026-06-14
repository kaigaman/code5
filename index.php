<?php require_once "includes/config.php"; ?>
<?php $page_title = 'Webhosting &amp; Domain Registration @90,000Ugx per year! Our Services Include Web Designing - Cheap Webhosting - Domain Registration - Bulk sms Services - Registration Is Fast &amp; Secure On Our Reliable Servers.'; ?>
<?php include "includes/header.php"; ?>

<!--hero section start-->
    <section id="home-hero" class="position-relative" style="background-position: center -100px;">
        <div class="hero-area position-relative zindex-1 text-white overflow-hidden">
            <div class="swiper hero-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 pt-4 pb-5">
                                    <div class="hero1-content-wrap position-relative zindex-2 py-5">
                                        <h1 class="display-font">Faster <mark class="position-relative text-primary-2-light">Performance</mark><br> Web Hosting..</h1>
                                        <p class="lead">Very affordable, reliable and secure web hosting.</p>
                                        <div class="hero-btns mb-5">
                                            <a href="domains.php" class="template-btn primary-btn me-4">Get Started</a>
                                            <a href="hosting.php" class="template-btn outline-btn">Explore More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 pt-4 pb-5">
                                    <div class="hero1-content-wrap position-relative zindex-2 py-5">
                                        <h1 class="display-font">Register Your <mark class="position-relative text-primary-2-light">Domain</mark><br> Today at Great Prices</h1>
                                        <p class="lead">Find the perfect domain name for your website. .com, .org, .ug and more.</p>
                                        <div class="hero-btns mb-5">
                                            <a href="domains.php" class="template-btn primary-btn me-4">Search Domain</a>
                                            <a href="domain-transfer.php" class="template-btn outline-btn">Transfer Domain</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 pt-4 pb-5">
                                    <div class="hero1-content-wrap position-relative zindex-2 py-5">
                                        <h1 class="display-font">Complete <mark class="position-relative text-primary-2-light">Web Solutions</mark><br> Hosting, Design &amp; Security</h1>
                                        <p class="lead">From web hosting to website design, SSL certificates to email security — we've got you covered.</p>
                                        <div class="hero-btns mb-5">
                                            <a href="hosting.php" class="template-btn primary-btn me-4">View Plans</a>
                                            <a href="contact.php" class="template-btn outline-btn">Contact Us</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination hero-pagination"></div>
                <div class="swiper-button-next hero-next"></div>
                <div class="swiper-button-prev hero-prev"></div>
            </div>
            <img src="assets/img/shapes/circle.svg" alt="circle shape" class="circle-shape position-absolute zindex--1">
            <img src="assets/img/shapes/hero-circle-left.png" alt="circle" class="left-bottom-circle position-absolute zindex--1">
            <img src="assets/img/shapes/hero-right-bottom.svg" alt="rectangle shape" class="right-top position-absolute zindex-1">
            <img src="assets/img/shapes/hero-right-bottom.svg" alt="rectangle shape" class="right-bottom position-absolute zindex-1">
        </div>
        <div class="promo-area" style="margin-top:-120px">
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="promo-item bg-white rounded primary-shadow">
                            <div class="promo-top d-flex align-items-center mb-3">
                                <img src=" $args[0].Value -replace '\.png" alt="image" class="img-fluid" style="width:50px">
                                <h5 class="ms-3 mb-0 text-primary">Professional Support</h5>
                            </div>
                            <p class="mb-0">Expect high level technical support. We will be there to assist you all through.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="promo-item bg-white rounded primary-shadow">
                            <div class="promo-top d-flex align-items-center mb-3">
                                <img src="assets/img/icons/fast.svg" alt="image" class="img-fluid" style="width:50px">
                                <h5 class="ms-3 mb-0 text-primary">Fast and Secure Servers</h5>
                            </div>
                            <p class="mb-0">Site performance improvement Â· Better website security Â· High website uptime.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="promo-item bg-white rounded primary-shadow">
                            <div class="promo-top d-flex align-items-center mb-3">
                                <img src="assets/img/icons/affordable.svg" alt="image" class="img-fluid" style="width:50px">
                                <h5 class="ms-3 mb-0 text-primary">Affordable Hosting</h5>
                            </div>
                            <p class="mb-0">Our webhosting plans have everything you need to power your website.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    new Swiper('.hero-slider', {
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        speed: 800,
        pagination: {
            el: '.hero-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.hero-next',
            prevEl: '.hero-prev',
        },
    });

    new Swiper('.partnerSwiper', {
        slidesPerView: 2,
        spaceBetween: 20,
        loop: true,
        speed: 3000,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        breakpoints: {
            480: { slidesPerView: 3 },
            640: { slidesPerView: 4 },
            992: { slidesPerView: 5 },
            1200: { slidesPerView: 6 },
        },
    });
});
</script>

    <!--domain search-->
    <section class="domain-area light-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="domain-search-box bg-white position-relative zindex-2 primary-shadow rounded-10">
                        <div class="row justify-content-center">
                            <div class="col-xl-7 col-lg-10">
                                <h2 class="h3 text-center">Search for Your Perfect Domain Here</h2>
                                <form id="domainChecker" action="#" class="mt-4 domain-search-form position-relative d-flex align-items-center justify-content-between mb-3">
                                    <input type="text" name="domain" value="" placeholder="Search Domain Name">
                                    <button type="submit" class="template-btn primary-btn btn-small flex-shrink-0 border-0">Search Now</button>
                                </form>
                                <div id="domainSearchResults" class="text-center text-md-start pt-5 pt-md-0"></div>
                                <div class="domain-info mt-5 mt-sm-4 d-flex justify-content-center align-items-center">
                                    <div class="info-box rounded-3 text-center">
                                        <h5 class="primary-text mb-0">.com</h5>
                                        <span>40,000/yr</span>
                                    </div>
                                    <div class="info-box rounded-3 text-center">
                                        <h5 class="danger-text mb-0">.info</h5>
                                        <span>40,000/yr</span>
                                    </div>
                                    <div class="info-box rounded-3 text-center">
                                        <h5 class="success-text mb-0">.org</h5>
                                        <span>40,000/yr</span>
                                    </div>
                                    <div class="info-box rounded-3 text-center">
                                        <h5 class="blue-text mb-0">.biz</h5>
                                        <span>40,000/yr</span>
                                    </div>
                                    <div class="info-box rounded-3 text-center">
                                        <h5 class="info-text mb-0">.net</h5>
                                        <span>40,000/yr</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--pricing section start-->
    <!--pricing section-->
    <section class="pricing-section py-5 position-relative overflow-hidden">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <span class="badge mb-3 px-3 py-2 text-uppercase small fw-semibold" style="letter-spacing:0.08em;background:#eab308!important;color:#0b0b0b!important">Web Hosting Plans</span>
                    <h2 class="display-6 fw-bold mb-2 text-white">Most Affordable &amp; Reliable <span style="color:#eab308">Webhosting</span></h2>
                    <p class="text-white-50 mb-0">All-inclusive Linux hosting with cPanel, Softaculous, and 24/7 support. Start your online journey today.</p>
                </div>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Economy -->
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card bg-dark border-0">
                        <div class="pricing-card-header">
                            <div class="storage-badge">1 GB</div>
                            <h3 class="h5 mb-1 fw-bold">Economy</h3>
                            <div class="price my-3">
                                <span class="price-amount">50,000</span>
                                <span class="price-duration">Ugx/year</span>
                            </div>
                            <p class="small text-muted mb-0">Reliable Linux hosting with guaranteed resources and unmatched security.</p>
                        </div>
                        <ul class="pricing-features">
                            <li><i class="fa-solid fa-check-circle"></i>1 GB SSD Storage</li>
                            <li><i class="fa-solid fa-check-circle"></i>Email accounts</li>
                            <li><i class="fa-solid fa-check-circle"></i>Latest cPanel</li>
                            <li><i class="fa-solid fa-check-circle"></i>Softaculous Apps</li>
                            <li><i class="fa-solid fa-check-circle"></i>MariaDB</li>
                            <li><i class="fa-solid fa-check-circle"></i>Unlimited Bandwidth</li>
                            <li><i class="fa-solid fa-check-circle"></i>99.9% Network uptime</li>
                            <li><i class="fa-solid fa-check-circle"></i>Multiple php versions</li>
                            <li><i class="fa-solid fa-check-circle"></i>Enhanced Security</li>
                        </ul>
                        <div class="pricing-card-footer">
                            <a href="https://core.code5.ug/order/economy-web-hosting" class="btn btn-outline-primary w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Deluxe -->
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card bg-dark border-0">
                        <div class="pricing-card-header">
                            <div class="storage-badge">5 GB</div>
                            <h3 class="h5 mb-1 fw-bold">Deluxe</h3>
                            <div class="price my-3">
                                <span class="price-amount">80,000</span>
                                <span class="price-duration">Ugx/year</span>
                            </div>
                            <p class="small text-muted mb-0">Packed with great tools to protect your website against attacks.</p>
                        </div>
                        <ul class="pricing-features">
                            <li><i class="fa-solid fa-check-circle"></i>5 GB SSD Storage</li>
                            <li><i class="fa-solid fa-check-circle"></i>Email accounts</li>
                            <li><i class="fa-solid fa-check-circle"></i>Latest cPanel</li>
                            <li><i class="fa-solid fa-check-circle"></i>Softaculous Apps</li>
                            <li><i class="fa-solid fa-check-circle"></i>MariaDB</li>
                            <li><i class="fa-solid fa-check-circle"></i>Unlimited Bandwidth</li>
                            <li><i class="fa-solid fa-check-circle"></i>99.9% Network uptime</li>
                            <li><i class="fa-solid fa-check-circle"></i>Multiple php versions</li>
                            <li><i class="fa-solid fa-check-circle"></i>Enhanced Security</li>
                        </ul>
                        <div class="pricing-card-footer">
                            <a href="https://core.code5.ug/order/deluxe-web-hosting" class="btn btn-outline-primary w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Premium - Popular -->
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card bg-dark border-0 pricing-popular">
                        <div class="popular-badge">Most Popular</div>
                        <div class="pricing-card-header">
                            <div class="storage-badge">10 GB</div>
                            <h3 class="h5 mb-1 fw-bold">Premium</h3>
                            <div class="price my-3">
                                <span class="price-amount">120,000</span>
                                <span class="price-duration">Ugx/year</span>
                            </div>
                            <p class="small text-muted mb-0">You will have a great experience while using your hosting package.</p>
                        </div>
                        <ul class="pricing-features">
                            <li><i class="fa-solid fa-check-circle"></i>10 GB SSD Storage</li>
                            <li><i class="fa-solid fa-check-circle"></i>Email accounts</li>
                            <li><i class="fa-solid fa-check-circle"></i>Latest cPanel</li>
                            <li><i class="fa-solid fa-check-circle"></i>Softaculous Apps</li>
                            <li><i class="fa-solid fa-check-circle"></i>MariaDB</li>
                            <li><i class="fa-solid fa-check-circle"></i>Unlimited Bandwidth</li>
                            <li><i class="fa-solid fa-check-circle"></i>99.9% Network uptime</li>
                            <li><i class="fa-solid fa-check-circle"></i>Multiple php versions</li>
                            <li><i class="fa-solid fa-check-circle"></i>Enhanced Security</li>
                        </ul>
                        <div class="pricing-card-footer">
                            <a href="https://core.code5.ug/order/premium-web-hosting" class="btn btn-primary w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Ultra -->
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card bg-dark border-0">
                        <div class="pricing-card-header">
                            <div class="storage-badge">15 GB</div>
                            <h3 class="h5 mb-1 fw-bold">Ultra</h3>
                            <div class="price my-3">
                                <span class="price-amount">150,000</span>
                                <span class="price-duration">Ugx/year</span>
                            </div>
                            <p class="small text-muted mb-0">Easy to use, fast and secure. Best website hosting technology.</p>
                        </div>
                        <ul class="pricing-features">
                            <li><i class="fa-solid fa-check-circle"></i>15 GB SSD Storage</li>
                            <li><i class="fa-solid fa-check-circle"></i>Email accounts</li>
                            <li><i class="fa-solid fa-check-circle"></i>Latest cPanel</li>
                            <li><i class="fa-solid fa-check-circle"></i>Softaculous Apps</li>
                            <li><i class="fa-solid fa-check-circle"></i>MariaDB</li>
                            <li><i class="fa-solid fa-check-circle"></i>Unlimited Bandwidth</li>
                            <li><i class="fa-solid fa-check-circle"></i>99.9% Network uptime</li>
                            <li><i class="fa-solid fa-check-circle"></i>Multiple php versions</li>
                            <li><i class="fa-solid fa-check-circle"></i>Enhanced Security</li>
                        </ul>
                        <div class="pricing-card-footer">
                            <a href="https://core.code5.ug/order/ultra-web-hosting" class="btn btn-outline-primary w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Corporate -->
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card bg-dark border-0">
                        <div class="pricing-card-header">
                            <div class="storage-badge">20 GB</div>
                            <h3 class="h5 mb-1 fw-bold">Corporate</h3>
                            <div class="price my-3">
                                <span class="price-amount">230,000</span>
                                <span class="price-duration">Ugx/year</span>
                            </div>
                            <p class="small text-muted mb-0">NVMe drives for lightning speed and performance.</p>
                        </div>
                        <ul class="pricing-features">
                            <li><i class="fa-solid fa-check-circle"></i>20 GB SSD Storage</li>
                            <li><i class="fa-solid fa-check-circle"></i>Email accounts</li>
                            <li><i class="fa-solid fa-check-circle"></i>Latest cPanel</li>
                            <li><i class="fa-solid fa-check-circle"></i>Softaculous Apps</li>
                            <li><i class="fa-solid fa-check-circle"></i>MariaDB</li>
                            <li><i class="fa-solid fa-check-circle"></i>Unlimited Bandwidth</li>
                            <li><i class="fa-solid fa-check-circle"></i>99.9% Network uptime</li>
                            <li><i class="fa-solid fa-check-circle"></i>Multiple php versions</li>
                            <li><i class="fa-solid fa-check-circle"></i>Enhanced Security</li>
                        </ul>
                        <div class="pricing-card-footer">
                            <a href="https://core.code5.ug/order/corporate-web-hosting" class="btn btn-outline-primary w-100">Add to Cart</a>
                        </div>
                    </div>
                </div>
                <!-- Custom -->
                <div class="col-lg-4 col-md-6">
                    <div class="pricing-card bg-dark border-0">
                        <div class="pricing-card-header">
                            <div class="storage-badge">Custom</div>
                            <h3 class="h5 mb-1 fw-bold">Custom Package</h3>
                            <div class="price my-3">
                                <span class="price-amount">Let's Talk</span>
                                <span class="price-duration">&nbsp;</span>
                            </div>
                            <p class="small text-muted mb-0">Packed with great features, one-click software install, 24/7 support.</p>
                        </div>
                        <ul class="pricing-features">
                            <li><i class="fa-solid fa-check-circle"></i>Custom SSD Storage</li>
                            <li><i class="fa-solid fa-check-circle"></i>Email accounts</li>
                            <li><i class="fa-solid fa-check-circle"></i>Latest cPanel</li>
                            <li><i class="fa-solid fa-check-circle"></i>Softaculous Apps</li>
                            <li><i class="fa-solid fa-check-circle"></i>MariaDB</li>
                            <li><i class="fa-solid fa-check-circle"></i>Unlimited Bandwidth</li>
                            <li><i class="fa-solid fa-check-circle"></i>99.9% Network uptime</li>
                            <li><i class="fa-solid fa-check-circle"></i>Multiple php versions</li>
                            <li><i class="fa-solid fa-check-circle"></i>Enhanced Security</li>
                        </ul>
                        <div class="pricing-card-footer">
                            <a href="https://core.code5.ug/order/custom-web-hosting" class="btn btn-outline-primary w-100">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--feature section start-->
    <section class="feature-area pt-5 pb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="feature-left pe-5">
                        <h4>All the Hosting Features you need to power your website.</h4>
                        <div class="text-center px-5">
                            <img src="assets/img/cloud-hosting/server-1.png" alt="feature image" class="img-fluid" >
                        </div>
                        <div class="feature-bottom text-end">
                            <img src="assets/img/shapes/arrow.svg" class="img-fluid" alt="arrow">
                            <a href="hosting-2.html" class="template-btn primary-btn ms-3">More Features</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="feature-right">
                        <div class="feature-item d-flex align-items-center bg-white deep-shadow">
                            <div class="promo-top flex-shrink-0">
                                <img src="assets/img/icons/control-panel.svg" alt="cpanel" class="img-fluid" style="width:3.1875rem">
                            </div>
                            <div class="promo-right ms-4">
                                <h5>cPanel</h5>
                                <p class="mb-0">cPanel is a popular control panel that helps you manage your website using a friendly web-based interface.</p>
                            </div>
                        </div>
                        <div class="feature-item d-flex align-items-center bg-white deep-shadow">
                            <div class="promo-top flex-shrink-0">
                                <img src="assets/img/icons/backup-green.svg" alt="backup" class="img-fluid" style="width:3.1875rem">
                            </div>
                            <div class="promo-right ms-4">
                                <h5>Daily Offsite Backups</h5>
                                <p class="mb-0">We run daily incremental backups onsite, plus full backups stored offsite in at least one other secure location.</p>
                            </div>
                        </div>
                        <div class="feature-item d-flex align-items-center bg-white deep-shadow">
                            <div class="promo-top flex-shrink-0">
                                <img src="assets/img/icons/performance.svg" alt="backup" class="img-fluid" style="width:3.1875rem">
                            </div>
                            <div class="promo-right ms-4">
                                <h5>Performance</h5>
                                <p class="mb-0">Safety, performance, reliability and stability are equally important. We strive to maintain 99.99% uptime for your website.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                </div>
            </div>
        </div>
    </section>

    <!--consult section start-->
    <section class="consult-area position-relative zindex-1 overflow-hidden" data-background="assets/img/consult-bg.png">
        <img src="assets/img/shapes/section-curve.png" alt="curve" class="position-absolute curve w-100">
        <div class="consult-overlay bg-secondary-gradient pt-60">
            <div class="container">
                <div class="row align-items-start justify-content-between">
                    <div class="col-lg-7 col-xl-6 position-relative">
                        <div class="consult-left">
                            <h3 class="text-white">Reasons For Choosing<br>Code5.</h3>
                            <ul class="consult-list mt-5">
                                <li class="d-flex">
                                    <span class="icon-box position-relative d-inline-flex align-items-center justify-content-center"><i class="fa-solid fa-check"></i></span>
                                    <div class="list-content ms-4">
                                        <h4 class="mb-3 mt-1">All-inclusive web hosting</h4>
                                        <p>Our web hosting plans include everything you need to power your website. Fast, Reliable and Affordable.</p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <span class="icon-box position-relative d-inline-flex align-items-center justify-content-center"><i class="fa-solid fa-check"></i></span>
                                    <div class="list-content ms-4">
                                        <h4 class="mb-3 mt-1">Safe and Secure</h4>
                                        <p>We take security very seriously, all software is upgraded within hours of new patches being released.</p>
                                    </div>
                                </li>
                                <li class="d-flex">
                                    <span class="icon-box position-relative d-inline-flex align-items-center justify-content-center"><i class="fa-solid fa-check"></i></span>
                                    <div class="list-content ms-4">
                                        <h4 class="mb-3 mt-1">24/7 Technical Support</h4>
                                        <p>Don't just take our word for it. We're the web hosting provider of choice for many happy customers.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <img src="assets/img/shapes/migrate-shape-1.svg" alt="frame" class="position-absolute frame-shape left-bottom zindex-1 soft-light" style="left:-100px">
                    </div>
                    <div class="col-lg-5 position-relative">
                        <img src="assets/img/shapes/migrate-frame.svg" alt="frame" class="position-absolute frame-shape right-top zindex-1" style="top:-30px;right:-30px">
                        <div class="consult-right pb-3">
                            <img src="assets/img/consult-man.png" alt="image" class="position-relative img-fluid rounded-3 p-1 mb-3 zindex-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--services section start-->
    <section class="service-section light-bg pt-60 pb-60 overflow-hidden position-relative zindex-1">
        <img src="assets/img/shapes/service-shape.png" alt="not found" class="position-absolute right-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="section-title text-center text-lg-start">
                        <h3>Reliable Premium Services</h3>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="explore-btn text-center text-lg-end mt-3 mt-lg-0">
                        <a href="hosting.html" class="template-btn primary-btn">All Services
                            <span>
                                  <svg width="13" height="8" viewBox="0 0 13 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" clip-rule="evenodd" d="M8.24451 0.234639C8.39471 0.0844779 8.59841 0.00012207 8.8108 0.00012207C9.02319 0.00012207 9.22689 0.0844779 9.3771 0.234639L12.581 3.43857C12.7312 3.58877 12.8155 3.79247 12.8155 4.00486C12.8155 4.21725 12.7312 4.42095 12.581 4.57116L9.3771 7.77508C9.22603 10.92099 9.0237 8.00172 8.81368 7.9999C8.60367 7.99807 8.40277 7.91383 8.25426 7.76533C8.10576 7.61682 8.02152 7.41592 8.01969 7.20591C8.01787 6.99589 8.0986 6.79356 8.24451 6.64249L10.0812 4.80584H0.800982C0.588548 4.80584 0.384815 4.72145 0.234602 4.57124C0.0843889 0.42103 0 4.21729 0 4.00486C0 3.79243 0.0843889 3.58869 0.234602 3.43848C0.384815 3.28827 0.588548 3.20388 0.800982 3.20388H10.0812L8.24451 1.36723C8.09435 1.21702 8.00999 1.01332 8.00999 0.800933C8.00999 0.588541 8.09435 0.384845 8.24451 0.234639Z" fill="white"/>
                                  </svg>
                              </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="services-bottom mt-40">
                <div class="row g-4 justify-content-center">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card bg-white deep-shadow rounded-2 text-center">
                            <div class="icon-wrapper clearfix">
                                <img src="assets/img/icons/cloud-backup.svg" alt="hosting" class="img-fluid col-4">
                            </div>
                            <div class="card-content">
                                <a href="code-guard.html">
                                    <h3 class="h4 mb-4">Cloud Backup</h3>
                                </a>
                                <p class="mb-4">Making cloud storage part of your backup strategy is about keeping your data safe and secure. Ensure that you always have a secondary backup of your valuable data.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card bg-white deep-shadow rounded-2 text-center">
                            <div class="icon-wrapper clearfix">
                                <img src="assets/img/icons/dedicated-server.svg" alt="hosting" class="img-fluid col-4">
                            </div>
                            <div class="card-content">
                                <a href="dedicated-server.html">
                                    <h3 class="h4 mb-4">Dedicated Servers</h3>
                                </a>
                                <p class="mb-4">If you are looking for a Cloud or Bare Metal server for your applications or systems that require more control, CPU and RAM we have the right solutions.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card bg-white deep-shadow rounded-2 text-center">
                            <div class="icon-wrapper clearfix">
                                <img src="assets/img/icons/vps-server.svg" alt="hosting" class="img-fluid col-4">
                            </div>
                            <div class="card-content">
                                <a href="vps-hosting.html">
                                    <h3 class="h4 mb-4">VPS Hosting</h3>
                                </a>
                                <p class="mb-4">With the VPS, you have the ability to add and modify software as desired same as on a dedicated server. With Full 'root' access you have complete freedom.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--application area started-->
    <section class="h5-application pt-5 pb-40 position-relative zindex-1 overflow-hidden">
        <div class="container">
            <div class="h5-apps-wrapper position-relative zindex-2">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="mn-title text-center mb-4">
                            <h3 class="position-relative text-white">Integrated with more than 100+ applications <mark class="position-relative text-primary-2-light">you love <img src="assets/img/shapes/line-shape-orange.png" alt="line-shape" class="position-absolute line-shape"></mark></h3>
                            <p class="mb-0 text-white">Complete control over your Wordpress Installation. Powered by 100% SSD storage</p>
                        </div>
                    </div>
                </div>
                <div class="position-relative zindex-1">
                    <img src="assets/img/shapes/frame.svg" alt="frame" class="position-absolute frame-shape zindex--1" style="top:-50px;right:-50px">
                    <div class="row g-4 justify-content-center">
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                            <div class="hm2-app-item text-center bg-white deep-shadow rounded-2">
                                <div class="feagure-img">
                                    <img src="assets/img/brands/wordpress.png" alt="wordpress" class="img-fluid w-25">
                                </div>
                                <div class="app-content mt-4">
                                    <a href="#">
                                        <h3 class="h6 mb-3">WordPress Hosting</h3>
                                    </a>
                                    <p class="mb-20">WordPress has grown to become the most popular which also makes it the
                                        number hackers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                            <div class="hm2-app-item text-center bg-white deep-shadow rounded-2">
                                <div class="feagure-img">
                                    <img src="assets/img/brands/joomla.png" alt="joomla" class="img-fluid w-25">
                                </div>
                                <div class="app-content mt-4">
                                    <a href="#">
                                        <h3 class="h6 mb-3">Joomla Hosting</h3>
                                    </a>
                                    <p class="mb-20">We are committed to delivering <br> blazing fast load times for <br> Joomla website</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                            <div class="hm2-app-item text-center bg-white deep-shadow rounded-2">
                                <div class="feagure-img">
                                    <img src="assets/img/brands/drupal.png" alt="drupal" class="img-fluid w-25">
                                </div>
                                <div class="app-content mt-4">
                                    <a href="#">
                                        <h3 class="h6 mb-3">Drupal Hosting</h3>
                                    </a>
                                    <p class="mb-20">Easily setup your website on our high-speed server and enjoy faster performance.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                            <div class="hm2-app-item text-center bg-white deep-shadow rounded-2">
                                <div class="feagure-img">
                                    <img src="assets/img/brands/magento.png" alt="magento" class="img-fluid w-25">
                                </div>
                                <div class="app-content mt-4">
                                    <a href="#">
                                        <h3 class="h6 mb-3">Magento Hosting</h3>
                                    </a>
                                    <p class="mb-20">Our Platform is tuned for reliability. <br> With an average network uptime over 99.95%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--migrate hosting start-->
    <section class="migrate-hosting py-5 bg-white position-relative zindex-1">
        <img src="assets/img/shapes/migrate-shape-1.svg" alt="circle" class="position-absolute left-bottom soft-light">
        <img src="assets/img/shapes/migrate-frame.svg" alt="frame" class="position-absolute migrate-frame">
        <img src="assets/img/shapes/line-wave.svg" alt="frame" class="position-absolute line-wave soft-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-5">
                    <div class="migrate-content py-4 text-center text-lg-start">
                        <h4 class="mb-2 fw-bold text-black tempus-sans-itc-regular">Migrating from another host, we can help</h4>
                        <p>Moving from one web host to another can be challenging if you have to undertake it yourself. We provide you free migration services.</p>
                        <p>We will move all your existing data including email, databases, website and maintain any custom configurations prior to migration.</p>
                        <div class="migrate-btns">
                            <a href="domain-transfer.html" class="btn btn-outline-primary me-4">Get Started</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 or-line text-center">
                    <div class="position-relative h-100">
                        <span class="or position-absolute"><i class="fa fa-exchange"></i></span>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="migrate-content py-4 text-center text-lg-start">
                        <h4 class="mb-3 fw-bold text-black tempus-sans-itc-regular">Requirements for transferring a domain</h4>
                        <ul class="list mb-4">
                            <li class="list-item"><i class="fa fa-check"></i> The domain should be valid and registered.</li>
                            <li><i class="fa fa-check"></i> The domain has be atleast 60 days old.</li>
                            <li><i class="fa fa-check"></i> The domain should be unlocked.</li>
                            <li><i class="fa fa-check"></i> You have an authorization/EPP code from your current registrar.</li>
                        </ul>
                        <div class="migrate-btns">
                            <a href="domain-transfer.html" class="btn btn-outline-primary me-4">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Slider -->
    <section aria-label="Partners" class="py-5 bg-white partners-slider">
        <div class="container">
            <div class="swiper partnerSwiper">
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="assets/img/partners/imunify360.svg" alt="Imunify360" class="partner-logo"></div>
                    <div class="swiper-slide"><img src="assets/img/partners/cpanel.svg" alt="cPanel" class="partner-logo"></div>
                    <div class="swiper-slide"><img src="assets/img/partners/cloudlinux.svg" alt="CloudLinux" class="partner-logo"></div>
                    <div class="swiper-slide"><img src="assets/img/partners/cloudflare.svg" alt="Cloudflare" class="partner-logo"></div>
                    <div class="swiper-slide"><img src="assets/img/partners/softaculous.svg" alt="Softaculous" class="partner-logo"></div>
                    <div class="swiper-slide"><img src="assets/img/partners/spamassassin.svg" alt="SpamAssassin" class="partner-logo"></div>
                    <div class="swiper-slide"><img src="assets/img/partners/almalinux.svg" alt="AlmaLinux" class="partner-logo"></div>
                    <div class="swiper-slide"><img src="assets/img/partners/imunifyav.svg" alt="ImunifyAV+" class="partner-logo"></div>
                    <div class="swiper-slide"><img src="assets/img/partners/jetbackup.svg" alt="JetBackup" class="partner-logo"></div>
                    <div class="swiper-slide"><img src="assets/img/partners/litespeed.svg" alt="LiteSpeed" class="partner-logo"></div>
                    <div class="swiper-slide"><img src="assets/img/partners/kernelcare.svg" alt="KernelCare" class="partner-logo"></div>
                    <div class="swiper-slide"><img src="assets/img/partners/magicspam.svg" alt="MagicSpam" class="partner-logo"></div>
                    <div class="swiper-slide"><img src="assets/img/partners/acronis.svg" alt="Acronis" class="partner-logo"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Partners Slider -->

<?php include "includes/footer.php"; ?>
