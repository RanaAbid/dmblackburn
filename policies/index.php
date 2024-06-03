<?php 
$page_title = "Our Policies";
include("../includes/header.php");
?>
<!-- banner begin -->
<div class="banner breadcrumb-banner pt-190 pb-200">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-txt">
                    <h1 class="breadcrumb-title"><?=$page_title?></h1>
                    <div class="breadcrumb-txt">
                        <a href="index.html">Home</a>
                        <span class="dvdr"><i class="icofont-simple-right"></i></span>
                        <span><?=$page_title?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->
<div class="benefits pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2 class="section-title mt--8"><?=$page_title?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="product-details-bottom-part p-50 px-50 mt-40">
                    <div class="col-12">
                        <div class="mt--1 mb--9">
                            <ul>
                                <?php
                                    $policies = fetch_data($link, "SELECT * FROM tbl_policies WHERE policy_status='1' ORDER BY added_on DESC");
                                    if(sizeof($policies)>0){
                                        foreach ($policies as $key => $policy) {
                                ?>
                                        <li class="product-description-feature d-flex align-items-center fz-16 lh-28">
                                            <a href="<?= $app_path ?>/assets/uploads/our-policies/<?=$policy['policy_file']?>" class=" box-shadow2 p-2 mb-3 w-75" target="_blank">
                                                <i class="icofont-dotted-right color-1"></i>
                                                <?=$policy['policy_name']?>
                                            </a>
                                        </li>
                                <?php } 
                                    } else { 
                                ?>
                                    <li class="product-description-feature d-flex align-items-center fz-16 lh-28">No Policy Found!</li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php include("../includes/footer.php"); ?>