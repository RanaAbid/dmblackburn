<?php
$page_title = "About Parents";
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
                <?= $row[0]['top_desc'] ?>
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
                <div class="section-heading text-center">
                    <h2 class="section-title mt--8">Heading</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="product-details-bottom-part p-50 px-50 mt-40">
                    <div class="col-12">
                        <ul class="nav product-details-nav mb-20" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="product-details-btn active" id="terms_dates-tab" data-bs-toggle="tab" data-bs-target="#terms_dates" type="button" role="tab" aria-controls="Terms Dates" aria-selected="true">Terms Date</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="product-details-btn" id="newsletter-tab" data-bs-toggle="tab" data-bs-target="#newsletter" type="button" role="tab" aria-controls="Newsletters" aria-selected="false">Newsletters</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="product-details-btn" id="school_ofsted-tab" data-bs-toggle="tab" data-bs-target="#school_ofsted" type="button" role="tab" aria-controls="School Ofsted" aria-selected="false">School Ofsted Report</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="product-details-btn" id="community-information" data-bs-toggle="tab" data-bs-target="#community" type="button" role="tab" aria-controls="community" aria-selected="false">Community Information</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="terms_dates" role="tabpanel" aria-labelledby="terms_dates-tab">
                                <h4 class="product-description-title color-9 mb-20">Terms Date :</h4>
                                <div class="mt--1 mb--9">
                                    <ul>
                                        <?php
                                        $terms = fetch_data($link, "SELECT * FROM tbl_terms WHERE term_status='1' ORDER BY added_on DESC");
                                        if (sizeof($terms) > 0) {
                                            foreach ($terms as $key => $term) {
                                        ?>
                                                <li class="product-description-feature d-flex align-items-center fz-16 lh-28">
                                                    <a href="<?= $app_path ?>/assets/uploads/our-terms-date/<?= $term['term_file'] ?>" class=" box-shadow2 p-2 mb-3 w-75" target="_blank">
                                                        <i class="icofont-dotted-right color-1"></i>
                                                        <?= $term['term_name'] ?>
                                                    </a>
                                                </li>
                                            <?php }
                                        } else {
                                            ?>
                                            <li class="product-description-feature d-flex align-items-center fz-16 lh-28">No Record Found!</li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="newsletter" role="tabpanel" aria-labelledby="newsletter-tab">
                                <div class="product-details-information mb--10">
                                    <h4 class="product-description-title color-9 mb-20">Newsletters :</h4>
                                    <div class="mt--1 mb--9">
                                        <ul>
                                            <?php
                                            $news = fetch_data($link, "SELECT * FROM tbl_newsletters WHERE news_status='1' ORDER BY added_on DESC");
                                            if (sizeof($news) > 0) {
                                                foreach ($news as $key => $new_) {
                                            ?>
                                                    <li class="product-description-feature d-flex align-items-center fz-16 lh-28">
                                                        <a href="<?= $app_path ?>/assets/uploads/newsletters/<?= $new_['news_file'] ?>" class=" box-shadow2 p-2 mb-3 w-75" target="_blank">
                                                            <i class="icofont-dotted-right color-1"></i>
                                                            <?= $new_['news_name'] ?>
                                                        </a>
                                                    </li>
                                                <?php }
                                            } else {
                                                ?>
                                                <li class="product-description-feature d-flex align-items-center fz-16 lh-28">No Record Found!</li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="school_ofsted" role="tabpanel" aria-labelledby="school_ofsted-tab">
                                <h4 class="product-description-title color-9 mb-20">School Ofsted Report :</h4>
                                <div class="mt--1 mb--9">
                                    <ul>
                                        <?php
                                        $reports = fetch_data($link, "SELECT * FROM tbl_school_ofsted_report WHERE report_status='1' ORDER BY added_on DESC");
                                        if (sizeof($reports) > 0) {
                                            foreach ($reports as $key => $report) {
                                        ?>
                                                <li class="product-description-feature d-flex align-items-center fz-16 lh-28">
                                                    <a href="<?= $app_path ?>/assets/uploads/school-ofsted-report/<?= $report['report_file'] ?>" class=" box-shadow2 p-2 mb-3 w-75" target="_blank">
                                                        <i class="icofont-dotted-right color-1"></i>
                                                        <?= $report['report_name'] ?>
                                                    </a>
                                                </li>
                                            <?php }
                                        } else {
                                            ?>
                                            <li class="product-description-feature d-flex align-items-center fz-16 lh-28">No Record Found!</li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="community" role="tabpanel" aria-labelledby="information-tab">
                                <h4 class="product-description-title color-9 mb-20">Community Information :</h4>
                                <div class="mt--1 mb--9">
                                    <ul>
                                        <?php
                                        $community_information = fetch_data($link, "SELECT * FROM tbl_community_information WHERE community_status='1' ORDER BY added_on DESC");
                                        if (sizeof($community_information) > 0) {
                                            foreach ($community_information as $key => $community) {
                                        ?>
                                                <li class="product-description-feature d-flex align-items-center fz-16 lh-28">
                                                    <a href="<?= $app_path ?>/assets/uploads/community-information/<?= $community['community_file'] ?>" class=" box-shadow2 p-2 mb-3 w-75" target="_blank">
                                                        <i class="icofont-dotted-right color-1"></i>
                                                        <?= $community['community_name'] ?>
                                                    </a>
                                                </li>
                                            <?php }
                                        } else {
                                            ?>
                                            <li class="product-description-feature d-flex align-items-center fz-16 lh-28">No Record Found!</li>
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
</div>
</div>
<?php include("../includes/footer.php"); ?>