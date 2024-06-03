<?php
$page_title = "Our Staff"; 
include("../includes/header.php"); 
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
                $rows = fetch_data($link, "SELECT * FROM tbl_staff WHERE staff_status='1' ORDER BY added_on DESC");
                foreach ($rows as $key => $row) {
            ?>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                    <div class="card-staff">
                        <div class="face face1">
                            <div class="content text-center">
                                <h3><?=$row['staff_name']?></h3>
                                <p class="text-white heading-sub-txt"><?=$row['staff_title']?></p>
                            </div>
                        </div>
                        <div class="face face2">
                            <div class="content">
                                <p class="heading-sub-txt"><?=$row['staff_info']?></p>
                                <p class="heading-sub-txt"><?=$row['staff_info_2']?></p>
                                <p class="heading-sub-txt"><?=$row['staff_info_3']?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php include("../includes/footer.php"); ?>