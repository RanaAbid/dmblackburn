<?php include("../includes/header.php"); 
$page_title = "Parents Information";
?>
<!-- banner begin -->
<div class="banner breadcrumb-banner pt-190 pb-200">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-txt">
                    <h1 class="breadcrumb-title"><?php echo "$page_title" ?></h1>
                    <div class="breadcrumb-txt">
                        <a href="index.html">Home</a>
                        <span class="dvdr"><i class="icofont-simple-right"></i></span>
                        <span><?php echo "$page_title" ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->
<div class="gallery p-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-heading text-center mb-70">
                    <h2 class="section-title mt--8 mb-25">Our School Gallery</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="control-panel d-flex justify-content-center mb-50 mt--1">
                    <div class="controls d-inline-flex" id="controls">
                        <button class="gallery-filter-btn color-4 mr-20 pb-17 active" data-filter="*">Show all</button>
                        <button class="gallery-filter-btn color-5 mx-20 pb-17" data-filter=".painting">Painting</button>
                        <button class="gallery-filter-btn color-6 mx-20 pb-17" data-filter=".study">Study</button>
                        <button class="gallery-filter-btn color-7 mx-20 pb-17" data-filter=".photography">Photography</button>
                        <button class="gallery-filter-btn color-8 ml-20 pb-17" data-filter=".writing">Writing</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-0 gallery-images" style="position: relative; height: 850.188px;">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 gallery-image painting" style="position: absolute; left: 0px; top: 0px;">
                <div class="img w_100">
                    <img src="<?= $app_path ?>assets/images/gallery-img-1.jpg" alt="image">
                </div>
                <div class="gallery-txt p-absolute text-center d-flex flex-column align-items-center justify-content-center">
                    <a class="gallery-popup mb-20" href="<?= $app_path ?>assets/images/gallery-img-1.jpg">
                        <img src="<?= $app_path ?>assets/images/expand.png" alt="View">
                    </a>
                    <h3 class="gallery-title mt--3 mb-10"><a href="class-details.html">Tiny Treasures</a></h3>
                    <p class="gallery-sub-title mb--2">By: Smart school psd</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 gallery-image writing study" style="position: absolute; left: 432px; top: 0px;">
                <div class="img w_100">
                    <img src="<?= $app_path ?>assets/images/gallery-img-2.jpg" alt="image">
                </div>
                <div class="gallery-txt p-absolute text-center d-flex flex-column align-items-center justify-content-center">
                    <a class="gallery-popup mb-20" href="<?= $app_path ?>assets/images/gallery-img-2.jpg">
                        <img src="<?= $app_path ?>assets/images/expand.png" alt="View">
                    </a>
                    <h3 class="gallery-title mt--3 mb-10"><a href="class-details.html">Kiddle Place</a></h3>
                    <p class="gallery-sub-title mb--2">By: Smart school psd</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 gallery-image painting" style="position: absolute; left: 864px; top: 0px;">
                <div class="img w_100">
                    <img src="<?= $app_path ?>assets/images/gallery-img-3.jpg" alt="image">
                </div>
                <div class="gallery-txt p-absolute text-center d-flex flex-column align-items-center justify-content-center">
                    <a class="gallery-popup mb-20" href="<?= $app_path ?>assets/images/gallery-img-3.jpg">
                        <img src="<?= $app_path ?>assets/images/expand.png" alt="View">
                    </a>
                    <h3 class="gallery-title mt--3 mb-10"><a href="class-details.html">Toys And Tots </a></h3>
                    <p class="gallery-sub-title mb--2">By: Smart school psd</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 gallery-image writing study" style="position: absolute; left: 0px; top: 425.094px;">
                <div class="img w_100">
                    <img src="<?= $app_path ?>assets/images/gallery-img-4.jpg" alt="image">
                </div>
                <div class="gallery-txt p-absolute text-center d-flex flex-column align-items-center justify-content-center">
                    <a class="gallery-popup mb-20" href="<?= $app_path ?>assets/images/gallery-img-4.jpg">
                        <img src="<?= $app_path ?>assets/images/expand.png" alt="View">
                    </a>
                    <h3 class="gallery-title mt--3 mb-10"><a href="class-details.html">Perfect Playtime </a></h3>
                    <p class="gallery-sub-title mb--2">By: Smart school psd</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 gallery-image painting" style="position: absolute; left: 432px; top: 425.094px;">
                <div class="img w_100">
                    <img src="<?= $app_path ?>assets/images/gallery-img-5.jpg" alt="image">
                </div>
                <div class="gallery-txt p-absolute text-center d-flex flex-column align-items-center justify-content-center">
                    <a class="gallery-popup mb-20" href="<?= $app_path ?>assets/images/gallery-img-5.jpg">
                        <img src="<?= $app_path ?>assets/images/expand.png" alt="View">
                    </a>
                    <h3 class="gallery-title mt--3 mb-10"><a href="class-details.html">Cuddles n’ Chuckles</a></h3>
                    <p class="gallery-sub-title mb--2">By: Smart school psd</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 gallery-image photography" style="position: absolute; left: 864px; top: 425.094px;">
                <div class="img w_100">
                    <img src="<?= $app_path ?>assets/images/gallery-img-6.jpg" alt="image">
                </div>
                <div class="gallery-txt p-absolute text-center d-flex flex-column align-items-center justify-content-center">
                    <a class="gallery-popup mb-20" href="<?= $app_path ?>assets/images/gallery-img-6.jpg">
                        <img src="<?= $app_path ?>assets/images/expand.png" alt="View">
                    </a>
                    <h3 class="gallery-title mt--3 mb-10"><a href="class-details.html">Cuddles n’ Chuckles</a></h3>
                    <p class="gallery-sub-title mb--2">By: Smart school psd</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 gallery-image study hidden" style="position: absolute; left: 0px; top: 850.188px;">
                <div class="img w_100">
                    <img src="<?= $app_path ?>assets/images/gallery-img-1_7.jpg" alt="image">
                </div>
                <div class="gallery-txt p-absolute text-center d-flex flex-column align-items-center justify-content-center">
                    <a class="gallery-popup mb-20" href="<?= $app_path ?>assets/images/gallery-img-1_7.jpg">
                        <img src="<?= $app_path ?>assets/images/expand.png" alt="View">
                    </a>
                    <h3 class="gallery-title mt--3 mb-10"><a href="class-details.html">Enjoy Freely</a></h3>
                    <p class="gallery-sub-title mb--2">By: Smart school psd</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 gallery-image painting hidden" style="position: absolute; left: 0px; top: 850.188px;">
                <div class="img w_100">
                    <img src="<?= $app_path ?>assets/images/gallery-img-1_8.jpg" alt="image">
                </div>
                <div class="gallery-txt p-absolute text-center d-flex flex-column align-items-center justify-content-center">
                    <a class="gallery-popup mb-20" href="<?= $app_path ?>assets/images/gallery-img-1_8.jpg">
                        <img src="<?= $app_path ?>assets/images/expand.png" alt="View">
                    </a>
                    <h3 class="gallery-title mt--3 mb-10"><a href="class-details.html">Confident Kid</a></h3>
                    <p class="gallery-sub-title mb--2">By: Smart school psd</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 gallery-image photography hidden" style="position: absolute; left: 0px; top: 850.188px;">
                <div class="img w_100">
                    <img src="<?= $app_path ?>assets/images/gallery-img-1_9.jpg" alt="image">
                </div>
                <div class="gallery-txt p-absolute text-center d-flex flex-column align-items-center justify-content-center">
                    <a class="gallery-popup mb-20" href="<?= $app_path ?>assets/images/gallery-img-1_9.jpg">
                        <img src="<?= $app_path ?>assets/images/expand.png" alt="View">
                    </a>
                    <h3 class="gallery-title mt--3 mb-10"><a href="class-details.html">Globe Info</a></h3>
                    <p class="gallery-sub-title mb--2">By: Smart school psd</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 gallery-image writing study hidden" style="position: absolute; left: 0px; top: 850.188px;">
                <div class="img w_100">
                    <img src="<?= $app_path ?>assets/images/gallery-img-1_10.jpg" alt="image">
                </div>
                <div class="gallery-txt p-absolute text-center d-flex flex-column align-items-center justify-content-center">
                    <a class="gallery-popup mb-20" href="<?= $app_path ?>assets/images/gallery-img-1_10.jpg">
                        <img src="<?= $app_path ?>assets/images/expand.png" alt="View">
                    </a>
                    <h3 class="gallery-title mt--3 mb-10"><a href="class-details.html">Writing Practice</a></h3>
                    <p class="gallery-sub-title mb--2">By: Smart school psd</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 gallery-image photography hidden" style="position: absolute; left: 0px; top: 850.188px;">
                <div class="img w_100">
                    <img src="<?= $app_path ?>assets/images/gallery-img-1_11.jpg" alt="image">
                </div>
                <div class="gallery-txt p-absolute text-center d-flex flex-column align-items-center justify-content-center">
                    <a class="gallery-popup mb-20" href="<?= $app_path ?>assets/images/gallery-img-1_11.jpg">
                        <img src="<?= $app_path ?>assets/images/expand.png" alt="View">
                    </a>
                    <h3 class="gallery-title mt--3 mb-10"><a href="class-details.html">Search Something</a></h3>
                    <p class="gallery-sub-title mb--2">By: Smart school psd</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 gallery-image painting study hidden" style="position: absolute; left: 0px; top: 850.188px;">
                <div class="img w_100">
                    <img src="<?= $app_path ?>assets/images/gallery-img-1_12.jpg" alt="image">
                </div>
                <div class="gallery-txt p-absolute text-center d-flex flex-column align-items-center justify-content-center">
                    <a class="gallery-popup mb-20" href="<?= $app_path ?>assets/images/gallery-img-1_12.jpg">
                        <img src="<?= $app_path ?>assets/images/expand.png" alt="View">
                    </a>
                    <h3 class="gallery-title mt--3 mb-10"><a href="class-details.html">Awesome Reading</a></h3>
                    <p class="gallery-sub-title mb--2">By: Smart school psd</p>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-12">
                <div class="gallery-btn text-center mt-70" id="load-photos" style="">
                    <button class="def-btn">View All Photos</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("../includes/footer.php"); ?>