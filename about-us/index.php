<?php
$page_title = "About Darul Madinah Blackburn";
include("../includes/header.php");
$school_id = isset($_GET['school_id']) ? $_GET['school_id'] : '1';
if ($school_id > 0) {
    $row = fetch_data($link, "SELECT * FROM tbl_about_school WHERE school_id='$school_id'");
}
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

<div class="feature p-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="section-heading text-center mb-70">
                    <h2 class="section-title mt--8 mb-25">Welcome to Darul Madinah Blackburn</h2>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
                <div class="part-txt mb-70">
                    <div class="section-heading mb-70">
                        <?= $row[0]['top_desc'] ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="part-img pl-20 w_100">
                    <img src="<?= $app_path ?>admin/assets/uploads/about-school/<?= $row[0]['top_img'] ?>" alt="image">
                </div>
            </div>
        </div>
        <div class="row align-items-center mt-3">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="part-img pr-20 w_100">
                    <img src="<?= $app_path ?>admin/assets/uploads/about-school/<?= $row[0]['end_img'] ?>" alt="image">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="part-txt mb-70">
                    <div class="section-heading mb-70">
                        <?= $row[0]['end_desc'] ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                                        <img src="<?= $app_path ?>assets/images/quote.png" alt="“">
                                    </div>
                                    <h2 class="feedback-title mt--3 mb-17"><?= $feedback['title'] ?></h2>
                                </div>
                                <p class="feedback-txt mb-25">“<?= strip_tags($feedback['feedback_detail']) ?>”</p>
                                <div class="divider bg-white rounded-pill mb-20"></div>
                                <h4 class="client-name mt--2 mb--2"><?= $feedback['name'] ?></h4>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- blog begin -->
<?php
}
?>
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
                                <h3><?= $staff['staff_name'] ?></h3>
                                <p class="text-white heading-sub-txt"><?= $staff['staff_title'] ?></p>
                            </div>
                        </div>
                        <div class="face face2">
                            <div class="content">
                                <p class="heading-sub-txt"><?= $staff['staff_info'] ?></p>
                                <p class="heading-sub-txt"><?= $staff['staff_info_2'] ?></p>
                                <p class="heading-sub-txt"><?= $staff['staff_info_3'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="gallery-btn text-center">
                    <a href="<?= $app_path ?>our-staff/" class="def-btn">View All Staff</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("../includes/footer.php"); ?>