<?php 
$page_title = "Admission";
include("../includes/header.php");
$admission_id = isset($_GET['admission_id']) ? $_GET['admission_id'] : '1';
if ($admission_id > 0) {
    $row = fetch_data($link, "SELECT * FROM tbl_admission WHERE admission_id='$admission_id'");
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
                        <span><?php echo $page_title ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->
<!-- staff begin -->
<div class="our-staff pt-120 pb-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="section-heading text-center mb-70">
                    <h2 class="section-title mt--8 mb-25">Welcome to Darul Madinah School and Nursery</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="staff-details-img w_100 mb-40">
                    <img src="<?= $app_path ?>admin/assets/uploads/admission/<?= $row[0]['nursery_img'] ?>" alt="image">
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="part-txt pl-40 mb-40">
                    <div class="staff-work-history mb-60">
                        <h3 class="staff-details-title mt--3">Nursery Admissions</h3>
                        <p class="staff-details-txt"><?= $row[0]['nursery_desc'] ?></p>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="staff-details-img w_100 mb-40">
                    <img src="<?= $app_path ?>admin/assets/uploads/admission/<?= $row[0]['school_img'] ?>" alt="image">
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="part-txt pl-40 mb-40">
                    <div class="staff-work-history mb-60">
                        <h3 class="staff-details-title mt--3">School Admissions:</h3>
                        <p class="staff-details-txt"><?= $row[0]['school_desc'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center mb-40">
            <div class="col-xl-6 col-lg-8">
                <div class="card box-shadow1 border-0">
                    <a href="<?= $app_path ?>admission/form/">
                        <div class="card-body">
                            <h5 class="card-title text-center text-white mb-0">Admission Form</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="staff-details-img w_100 mb-40">
                <img src="<?= $app_path ?>admin/assets/uploads/admission/<?= $row[0]['funding_img'] ?>" alt="image">
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                <div class="part-txt pl-40 mb-40">
                    <div class="staff-work-history mb-60">
                        <h3 class="staff-details-title mt--3">Funding:</h3>
                        <p class="staff-details-txt"><?= $row[0]['funding_desc'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- staff end -->
<?php include("../includes/footer.php"); ?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>