<?php include("../includes/header.php"); 
$page_title = "Ethos Values";
$ethos_id = isset($_GET['ethos_id']) ? $_GET['ethos_id'] : '1';
if ($ethos_id > 0) {
    $row = fetch_data($link, "SELECT * FROM tbl_ethos_values WHERE ethos_id='$ethos_id'");
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
                        <a href="<?=$app_path?>">Home</a>
                        <span class="dvdr"><i class="icofont-simple-right"></i></span>
                        <span><?php echo "$page_title" ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="app-download pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-10">
                <div class="section-heading text-center mb-70">
                    <h2 class="section-title mt--8 mb-25">Ethos & Values</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-xl-12 col-lg-12 col-md-12 mb-3">
                <div class="app-download-txt mb-50 mb-md-0">
                    <?=$row[0]['first_desc']?>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div class="staff-details-img w_100 mb-40">
                    <img src="<?=$app_path.'admin/assets/uploads/ethos-values/'.$row[0]['left_img']?>" alt="image">
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7">
                <div class="app-download-txt mb-50 mb-md-0">
                    <?=$row[0]['right_desc']?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("../includes/footer.php"); ?>