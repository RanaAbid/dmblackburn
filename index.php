<?php include("includes/header.php"); ?>
<!-- banner begin -->
<div class="kitba-banner-area">
    <div class="slider-active swiper-container">
        <div class="swiper-wrapper">
            <?php 
                $sliders = fetch_data($link, "SELECT * FROM tbl_media where media_type='hero-image' ORDER by id DESC");
                foreach ($sliders as $key => $slider) {
            ?>
                <div class="swiper-slide bg_cover" data-background="<?= $app_path ?>admin/assets/uploads/hero-section/<?=$slider['media_name']?>">
                    <div class="banner-2">
                        <div class="single-banner-slide kitba-slide-height">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="banner-txt">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- banner end -->
<?php
$welcome = fetch_data($link, "SELECT * FROM tbl_welcome_section");
if (sizeof($welcome) > 0) {
?>
<div class="feature pt-120 pb-50">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="part-txt mb-70">
                    <div class="section-heading mb-40">
                        <h2 class="section-title mt--8 mb-25">Welcome to <?=$welcome[0]['org_name']?></h2>
                        <p class="heading-sub-txt mt--1 mb--8 text-justify"><?=$welcome[0]['short_desc']?></p>
                    </div>
                    <?php
                        $values = fetch_data($link, "SELECT * FROM tbl_core_values ORDER BY sort_order ASC");
                        if (sizeof($values) > 0) {
                    ?>
                        <div class="row r-gap-40 has-gradient-service mb-30 mb-lg-0">
                            <?php foreach ($values as $value) : ?>
                                <div class="col-xl-6 col-md-6">
                                    <div class="feature-box d-flex">
                                        <div class="feature-part-icon mr-30">
                                            <img src="<?=$app_path?>admin/assets/uploads/welcome-section/<?=$value['value_icon']?>" class="filter-shadow-1" alt="Icon">
                                        </div>
                                        <div class="feature-txt">
                                            <h3 class="feature-sub-title mt--7 mb--8"><a href="javascript:void(0);"><?=$value['value_title']?></a></h3>
                                            <div class="divider mt-10 mb-20 bg-gradient-1 rounded-pill"></div>
                                            <p class="mt--6 mb--8"><?=$value['short_desc']?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php }?>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="feature-img-2 spacetopbottomxs">
                    <img src="<?=$app_path?>admin/assets/uploads/welcome-section/<?=$welcome[0]['welcome_img']?>" alt="Image">
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<div class="about pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-6 col-lg-7 col-md-8 col-sm-12">
                <h2 class="about-title mt--8 mb-25">About Admission</h2>
                <p class="fw-bolds mt--1 mb-16">Enthusastcay deminate competitive oportunities through transparent and Compelngly seize andvirschemas through intermandated.</p>
                <p class="mb-35">Enthusastcay deminate competitive oportunities through transparent and action Compelngly seize andvirschemas through intermandated creative adiea sources Enthusiasticay plagiarize clientcentered and relationships.</p>
                <span class="about-list d-block  mb-15"><span class="mr-15"><i class="icofont-check-alt"></i></span>Donec facilisis aliquet ultrices. Cras ut ultricies.</span>
                <span class="about-list d-block"><span class="mr-15"><i class="icofont-check-alt"></i></span>Fusce euismod at massa eget blandit quisque.</span>
                <div class="btn-box pt-50">
                    <a href="<?= $app_path ?>admission/form/" class="def-btn">Admission Now</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- counter begin -->
<?php
$counters = fetch_data($link, "SELECT * FROM tbl_counters");
if (sizeof($counters) > 0) {
?>
<div class="counter-2 pb-80 pt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="counter-box-2 mb-40 bg-gradient-1 h-0 p-50p d-flex flex-column justify-content-center align-items-center">
                    <div class="counter-icon mb-25">
                        <img src="assets/images/counter-icon-5.png" class="filter-shadow-1" alt="Icon">
                    </div>
                    <div class="counter-part-txt text-center p-relative">
                        <h2 class="counter-txt odometer mb-10" data-count="<?=$counters[0]['counter_1_num']?>">0</h2>
                        <p class="counter-sub-txt mb-0"><?=$counters[0]['counter_1_text']?></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="counter-box-2 mb-40 bg-gradient-3 h-0 p-50p d-flex flex-column justify-content-center align-items-center">
                    <div class="counter-icon mb-25">
                        <img src="assets/images/counter-icon-6.png" class="filter-shadow-3" alt="Icon">
                    </div>
                    <div class="counter-part-txt text-center p-relative">
                        <h2 class="counter-txt odometer mb-10" data-count="<?=$counters[0]['counter_2_num']?>">0</h2>
                        <p class="counter-sub-txt mb-0"><?=$counters[0]['counter_2_text']?></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="counter-box-2 mb-40 bg-gradient-2 h-0 p-50p d-flex flex-column justify-content-center align-items-center">
                    <div class="counter-icon mb-25">
                        <img src="assets/images/counter-icon-7.png" class="filter-shadow-2" alt="Icon">
                    </div>
                    <div class="counter-part-txt text-center p-relative">
                        <h2 class="counter-txt odometer mb-10" data-count="<?=$counters[0]['counter_3_num']?>">0</h2>
                        <p class="counter-sub-txt mb-0"><?=$counters[0]['counter_3_text']?></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="counter-box-2 mb-40 bg-gradient-4 h-0 p-50p d-flex flex-column justify-content-center align-items-center">
                    <div class="counter-icon mb-25">
                        <img src="assets/images/counter-icon-8.png" class="filter-shadow-4" alt="Icon">
                    </div>
                    <div class="counter-part-txt text-center p-relative">
                        <h2 class="counter-txt odometer mb-10" data-count="<?=$counters[0]['counter_4_num']?>">0</h2>
                        <p class="counter-sub-txt mb-0"><?=$counters[0]['counter_4_text']?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php } ?>
<!-- counter end -->

<!-- facility begin -->
<?php
$facilities = fetch_data($link, "SELECT * FROM tbl_school_facilities WHERE facility_status='1' ORDER BY added_on DESC");
if (sizeof($facilities) > 0) {
?>
<div class="facility pt-120 pb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="section-heading text-center mb-60">
                    <h2 class="section-title text-white mt--8 mb-25">School Facilities</h2>
                    <p class="heading-sub-txt text-white mt--1 mb--8">Here is what you can expect from a house cleaning from a Handy professional. Download the app to share further cleaning details and instructions!</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php foreach ($facilities as $facility) : ?>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                    <div class="facility-card facility-card-one mb-40" style="background: url(<?=$app_path?>admin/assets/uploads/school-facilities/<?=$facility['facility_img']?>) center center no-repeat;">
                        <div class="facility-img-area"></div>
                        <div class="facility-card-txt d-flex flex-column align-items-center text-center p-50 px-50">
                            <h3 class="facility-title mt--2 mb-25">
                                <a href="javascript:void(0);"><?=$facility['facility_name']?></a>
                            </h3>
                            <p class="facility-txt mt--4 mb--8"><?=$facility['facility_detail']?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
<?php } ?>
<!-- facility end -->

<!-- staff begin -->
<div class="our-staff pt-120 pb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2 class="section-title mb-0">Meet Our Staffs</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php 
                $staffs = fetch_data($link, "SELECT * FROM tbl_staff WHERE staff_status='1' ORDER BY added_on DESC LIMIT 4");
                foreach ($staffs as $key => $staff) {
            ?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="card-staff">
                        <div class="face face1">
                            <div class="content text-center">
                                <h3><?=$staff['staff_name']?></h3>
                                <p class="text-white heading-sub-txt"><?=$staff['staff_title']?></p>
                            </div>
                        </div>
                        <div class="face face2">
                            <div class="content">
                                <p class="heading-sub-txt"><?=$staff['staff_info']?></p>
                                <p class="heading-sub-txt"><?=$staff['staff_info_2']?></p>
                                <p class="heading-sub-txt"><?=$staff['staff_info_3']?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="gallery-btn text-center">
                    <a href="<?=$app_path?>our-staff/" class="def-btn">View All Staff</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- staff end -->
<?php
$feedbacks = fetch_data($link, "SELECT * FROM tbl_parents_feedback WHERE feedback_status='1' ORDER BY added_on DESC");
if (sizeof($feedbacks) > 0) {
?>
<div class="testimonial pt-120 pb-120">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="client-feedback pr-70 pl-30">
                    <?php foreach ($feedbacks as $feedback) : ?>
                        <div class="single-feedback">
                            <div class="feedback-title-area">
                                <div class="quote-icon mb-30">
                                    <img src="<?=$app_path?>assets/images/quote.png" alt="“">
                                </div>
                                <h2 class="feedback-title mt--3 mb-17"><?=$feedback['title']?></h2>
                            </div>
                            <p class="feedback-txt mb-25">“<?=strip_tags($feedback['feedback_detail'])?>”</p>
                            <div class="divider bg-white rounded-pill mb-20"></div>
                            <h4 class="client-name mt--2 mb--2"><?=$feedback['name']?></h4>
                        </div>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog begin -->
<?php
}
$events = fetch_data($link, "SELECT * FROM tbl_activity_events WHERE event_status='1' ORDER BY event_date DESC");
if (sizeof($events) > 0) {
?>
    <div class="latest-news pb-80 pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="section-heading text-center mb-70">
                        <h2 class="section-title mt--9 mb-25">CAMPUS ACTIVITIES & EVENTS</h2>
                        <p class="heading-sub-txt mt--1 mb--8">Here is what you can expect from a house cleaning from a Handy professional. Download the app to share further cleaning details and instructions!</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php foreach ($events as $event) : ?>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog-card mb-40">
                            <div class="part-img w_100">
                                <a href="javascript:void(0);"><img src="<?= $app_path ?>/admin/assets/uploads/activity-events/<?= $event['event_img'] ?>" alt="Image"></a>
                                <span class="lv-part-blog-calendar-date">
                                    <i class="icofont-calendar"></i> <?= show_date($event['event_date']) ?>
                                </span>
                            </div>
                            <div class="blog-card-txt p-40 px-30">
                                <h3 class="blog-title mt--2 mb-20"><a href="javascript:void(0);"><?= $event['event_title'] ?></a>
                                </h3>
                                <p class="mb--8"><?= $event['short_desc'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
<?php } ?>
<!-- blog end -->

<?php include("includes/footer.php"); ?>