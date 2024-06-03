<?php 
$page_title = "Gallery";
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
<div class="gallery pb-120 pt-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="section-heading text-center mb-70">
                    <h2 class="section-title mt--8 mb-25">Our School Gallery</h2>
                    <p class="heading-sub-txt mt--1 mb--8">Here is what you can expect from a house cleaning from a Handy professional. Download the app to share further cleaning details and instructions!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery-container m-auto">
        <div class="row g-0">
            <div class="col-12">
                <div class="control-panel d-flex justify-content-center mb-50 mt--1">
                    <div class="controls d-inline-flex" id="controls">
                        <button class="gallery-filter-btn active color-4 mr-20 pb-17" data-filter="*">Show all</button>
                        <?php 
                            $rows = fetch_data($link, "SELECT distinct(gallery_category) FROM tbl_gallery ORDER BY gallery_category ASC");
                            foreach ($rows as $key => $row) {
                        ?>
                            <button class="gallery-filter-btn color-5 mx-20 pb-17" data-filter=".<?=$row['gallery_category']?>"><?=$row['gallery_category']?></button>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-0 gallery-images">
            <?php 
                $rows = fetch_data($link, "SELECT * FROM tbl_gallery WHERE gallery_status='1'");
                foreach ($rows as $key => $row) {
            ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 gallery-image gallery-image-2 <?=$row['gallery_category']?>">
                    <div class="img">
                        <img src="<?=$app_path?>admin/assets/uploads/gallery/<?=$row['gallery_img']?>" alt="image">
                    </div>
                    <div class="gallery-txt p-absolute text-center d-flex flex-column align-items-center justify-content-center">
                        <a class="gallery-popup mb-20" href="<?=$app_path?>admin/assets/uploads/gallery/<?=$row['gallery_img']?>">
                            <img src="<?=$app_path?>assets/images/expand.png" alt="View">
                        </a>
                        <p class="gallery-sub-title mb--2"><?=$row['img_desc']?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="gallery-btn text-center pt-70" id="load-photos">
                    <button class="def-btn">View All Photos</button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("../includes/footer.php"); ?>