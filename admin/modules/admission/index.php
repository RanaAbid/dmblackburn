<?php
$page_title = "Admission";
include "../../includes/header.php";
$storeFolder = '../../assets/uploads/admission/';
$admission_id = isset($_GET['admission_id']) ? $_GET['admission_id'] : '1';
if ($admission_id > 0) {
    $row = fetch_data($link, "SELECT * FROM tbl_admission WHERE admission_id='$admission_id'");
}
?>
<!-- Page-content -->
<div class="main-container container-fluid">
    <div class="inner-body">
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">Admission Page Details</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Admission</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Index</li>
                </ol>
            </div>
        </div>

        <!-- end page title -->
        <div class="row mb-2">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><?= $admission_id > 0 ? 'Update' : 'Add' ?> Admission Details</h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <form action="save.php?admission_id=<?= $admission_id ?>" method="POST" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <p class="mg-b-10">Nursery Admissions Description</p>
                                            <textarea class="form-control tiny-mce" name="nursery_desc" id="nursery_desc" rows="4" placeholder="Description.."><?php if ($admission_id > 0) echo $row[0]['nursery_desc'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <p class="mg-b-10">Nursery Banner</p>
                                            <input type="file" id="nursery_img" name="nursery_img" class="dropify dropify-event" data-allowed-file-extensions='["png", "jpg", "jpeg", "webp"]' <?php if ($admission_id > 0 && $row[0]['nursery_img'] != "") { ?> data-default-file="<?= $storeFolder . $row[0]['nursery_img'] ?>" <?php } else { ?> required <?php } ?> />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <p class="mg-b-10">School Admissions Description</p>
                                            <textarea class="form-control tiny-mce" name="school_desc" id="school_desc" rows="4" placeholder="Description.."><?php if ($admission_id > 0) echo $row[0]['school_desc'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <p class="mg-b-10">School Banner</p>
                                            <input type="file" id="school_img" name="school_img" class="dropify dropify-event" data-allowed-file-extensions='["png", "jpg", "jpeg", "webp"]' <?php if ($admission_id > 0 && $row[0]['school_img'] != "") { ?> data-default-file="<?= $storeFolder . $row[0]['school_img'] ?>" <?php } else { ?> required <?php } ?> />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <p class="mg-b-10">Funding Description</p>
                                            <textarea class="form-control tiny-mce" name="funding_desc" id="funding_desc" rows="4" placeholder="Description.."><?php if ($admission_id > 0) echo $row[0]['funding_desc'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <p class="mg-b-10">Funding Banner</p>
                                            <input type="file" id="funding_img" name="funding_img" class="dropify dropify-event" data-allowed-file-extensions='["png", "jpg", "jpeg", "webp"]' <?php if ($admission_id > 0 && $row[0]['funding_img'] != "") { ?> data-default-file="<?= $storeFolder . $row[0]['funding_img'] ?>" <?php } else { ?> required <?php } ?> />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 text-end">
                                        <input type="hidden" name="add_edit">
                                        <button type="submit" id="dzSubmit" class="btn btn-success w-md"><?= $admission_id > 0 ? 'Update' : 'Save' ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Layout -->
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
<?php
include "../../includes/footer.php";
?>