<?php
$page_title = "Parents Information";
include("../includes/header.php");
$parents_id = isset($_GET['parents_id']) ? $_GET['parents_id'] : '1';
if ($parents_id > 0) {
    $row = fetch_data($link, "SELECT * FROM tbl_parents_info WHERE parents_id='$parents_id'");
}
?>
<!-- banner begin -->
<div class="banner breadcrumb-banner pt-190 pb-200">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-txt">
                    <h1 class="breadcrumb-title"><?php echo $page_title ?></h1>
                    <div class="breadcrumb-txt">
                        <a href="index.html">Home</a>
                        <span class="dvdr"><i class="icofont-simple-right"></i></span>
                        <span><?php echo $page_title ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->
<div class="parents pt-60 pb-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-heading text-center mb-30">
                    <h2 class="section-title mt--8 mb-25">The Power of Parental Partnerships: Nurturing Early Learning at Darul Madinah</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-7 col-lg-7">
                <p class="text-justify"><?= strip_tags($row[0]['top_desc']) ?></p>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="staff-details-img w_100 mb-40">
                    <img src="<?= $app_path ?>admin/assets/uploads/parents-info/<?= $row[0]['top_img'] ?>" alt="image">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="benefits pb-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-heading text-center mb-30">
                    <h2 class="section-title mt--8 mb-25">Ways to Partner with Us for Your Child’s Benefit:</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <div class="staff-details-img w_100 mb-40">
                    <img src="<?= $app_path ?>admin/assets/uploads/parents-info/<?= $row[0]['mid_img'] ?>" alt="image">
                </div>
            </div>
            <div class="col-xl-8 col-lg-8">
                <p class="text-justify"><?= strip_tags($row[0]['mid_desc']) ?></p>
            </div>
        </div>
    </div>
</div>
<div class="parentMeeting pb-60">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-heading text-center mb-30">
                    <h2 class="section-title mt--8 mb-25">Ways to Partner with Us for Your Child’s Benefit:</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <p class="text-justify"><?= strip_tags($row[0]['end_desc']) ?></p>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="staff-details-img w_100 mb-40">
                    <img src="<?= $app_path ?>admin/assets/uploads/parents-info/<?= $row[0]['end_img'] ?>" alt="image">
                </div>
            </div>


        </div>
    </div>
</div>
<?php include("../includes/footer.php"); ?>