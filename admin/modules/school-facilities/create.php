<?php
$page_title = "School Facilities";
include "../../includes/header.php";
$storeFolder = '../../assets/uploads/school-facilities';
$facility_id = isset($_GET['facility_id']) ? $_GET['facility_id'] : '0';
if ($facility_id > 0) {
    $row = fetch_data($link, "SELECT * FROM tbl_school_facilities WHERE facility_id='$facility_id'");
}
?>
<!-- Page-content -->
<div class="main-container container-fluid">
    <div class="inner-body">
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">Facility Details</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Facility </a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </div>
            <div class="d-flex">
                <div class="justify-content-center">
                    <a href="index.php" class="btn btn-success waves-effect waves-light">Back</a>
                </div>

            </div>
        </div>

        <!-- end page title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><?= $facility_id > 0 ? 'Update' : 'Add' ?> Facility</h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <form action="save.php?facility_id=<?= $facility_id ?>" method="POST" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <p class="mg-b-10">Facility Name</p>
                                            <input type="text" class="form-control" name="facility_name" id="facility_name" value="<?php if ($facility_id > 0) echo $row[0]['facility_name'] ?>" required placeholder="Facility Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <p class="mg-b-10">Facility Details</p>
                                            <textarea class="form-control tiny-mce" name="facility_detail" id="facility_detail" rows="4" placeholder="Message Detailed Description.."><?php if ($facility_id > 0) echo $row[0]['facility_detail'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <label class="form-label" for="facility_img">Facility Banner</label>
                                            <input type="file" id="facility_img" name="facility_img" class="dropify dropify-event" data-allowed-file-extensions='["png", "jpg", "jpeg", "webp"]' <?php if ($facility_id > 0 && $row[0]['facility_img'] != "") { ?> data-default-file="<?= $storeFolder . '/' . $row[0]['facility_img'] ?>" <?php } else { ?> required <?php } ?> />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 text-end">
                                        <input type="hidden" name="add_edit">
                                        <button type="submit" id="dzSubmit" class="btn btn-success w-md"><?= $facility_id > 0 ? 'Update' : 'Save' ?></button>
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