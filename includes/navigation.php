<?php
$parts_url = explode("/", $actual_link);
$lastPart_url = end($parts_url);
$defaultURL = $app_path . "index.php#";
if ($page_title = "About Parents") {
    $defaultURL = $app_path . "about-parents/index.php?tab=";
}
?>
<?php 
$parts_url = explode("/", $actual_link);
$lastPart_url = end($parts_url);
$defaultURL = $app_path."index.php#";
if($currenPage=="contact"){
    $defaultURL = $app_path."index.php?tab=";
}
?>
<!-- header begin -->
<div class="header header-style-1 sticky-top">
    <div class="top-header d-none-sm">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9">
                    <div class="top-left">
                        <div class="d-sm-flex">
                            <div class="header-txt pr-30"><i class="icofont-clock-time"></i> 9:30am - 6:30pm Mon - Fri</div>
                            <div class="header-txt px-30"><a href="tel:+07957951765"><i class="icofont-phone"></i> +07957951765</a></div>
                            <div class="header-txt pl-30"><i class="icofont-google-map"></i> 50 Darvills Lane, Slough, SL1 2PH</div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3">
                    <div class="top-right">
                        <div class="d-flex justify-content-lg-end justify-content-center">
                            <a href="#" class="header-right-txt"><i class="icofont-facebook-messenger"></i></a>
                            <a href="#" class="header-right-txt"><i class="icofont-twitter"></i></a>
                            <a href="#" class="header-right-txt"><i class="icofont-vimeo"></i></a>
                            <a href="#" class="header-right-txt"><i class="icofont-skype"></i></a>
                            <a href="#" class="header-right-txt"><i class="icofont-rss"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-header">
        <div class="container">
            <div class="row g-0 align-items-center">
                <div class="col-xl-2 col-lg-2">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-6">
                            <div class="logo">
                                <a href="<?= $app_path ?>">
                                    <img src="<?= $app_path ?>assets/images/logo/logo.png" alt="KIDBA">
                                </a>
                            </div>
                        </div>
                        <div class="d-lg-none d-flex justify-content-end col-6">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="icofont-navigation-menu"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7">
                    <nav class="navbar navbar-expand-lg p-0">
                        <div class="container-fluid p-0">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto p-10">
                                    <li class="nav-item">
                                        <a href="<?= $app_path ?>">
                                            Home
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a id="classDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            About
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="classDropdown">
                                            <li><a href="<?= $app_path ?>about-us">About Us</a></li>
                                            <li><a href="<?= $app_path ?>ethos-values">Ethos and Values</a></li>
                                            <li><a href="<?= $app_path ?>our-staff">Our Staff</a></li>
                                            <li><a href="<?= $app_path ?>gallery">Gallery</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= $app_path ?>admission">
                                            Admissions
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a id="blogDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Parents
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="blogDropdown">
                                            <li><a href="<?= $app_path ?>parents-information">Parents information</a></li>
                                            <li><a href="<?= $app_path ?>about-parents">about parents</a></li>
                                            <li><a href="<?= $defaultURL ?>description-tab" class="parents-info">Terms Date</a></li>
                                            <li><a href="<?= $defaultURL ?>information-tab" class="parents-info">Newsletters</a></li>
                                            <li><a href="<?= $defaultURL ?>review-tab" class="parents-info">School Ofsted Report</a></li>
                                            <li><a href="<?= $defaultURL ?>community-information" class="parents-info">Community Information</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= $app_path ?>policies">Policies</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?= $app_path ?>contact-us">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
                <div class="col-xl-2 col-lg-3 d-lg-block d-none">
                    <div class="nav-btn d-flex justify-content-end">
                        <a href="<?= $app_path ?>admission/form/" class="def-btn">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header end -->

