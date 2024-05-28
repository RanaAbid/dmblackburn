<?php
$page_title = "About Us";
include "../../../includes/header.php";
$storeFolder = "";
$id = isset($_GET['id']) ? $_GET['id'] : '0';
if ($id > 0) {
    $row = fetch_data($link, "SELECT * FROM tbl_about WHERE about_id='$id'");
    $storeFolder = '../../assets/uploads/about-us/';
}
?>

<!-- Page-content -->
<div class="main-container container-fluid">
    <div class="inner-body">
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5"><?php echo "$page_title" ?></h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo "$page_title" ?></li>
                </ol>
            </div>
            <div class="d-flex">
                <div class="justify-content-center">
                    <a href="index.php" class="btn btn-primary waves-effect waves-light">Back</a>
                </div>

            </div>
        </div>

        <!-- end page title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">About</h4>
                    </div>
                    <div class="card-body">
                        <form action="save.php?id=<?= $id ?>" method="POST" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label class="form-label fw-bold" for="school_status">Select School</label>
                                    <select class="form-select" id="school_status" name="school_status" required>
                                        <option value="">Select School</option>
                                        <option value="1" <?php if ($id > 0 && $row[0]['school_status'] == '1') echo "selected"; ?>>Nursery</option>
                                        <option value="0" <?php if ($id > 0 && $row[0]['school_status'] == '0') echo "selected"; ?>>Primary</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label class="form-label fw-bold" for="school_status">Status</label>
                                    <select class="form-select" id="school_status" name="school_status" required>
                                        <option value="">Select Status</option>
                                        <option value="1" <?php if ($id > 0 && $row[0]['school_status'] == '1') echo "selected"; ?>>Active</option>
                                        <option value="0" <?php if ($id > 0 && $row[0]['school_status'] == '0') echo "selected"; ?>>In-active</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-6">
                                    <label class="form-label fw-bold" for="input-file-now">School Image</label>
                                    <input type="file" id="input-file-now" name="about_image" class="dropify dropify-event" data-allowed-file-extensions='["png", "jpg", "jpeg", "webp"]' <?php if ($id > 0 && $row[0]['about_image'] != "") { ?> data-default-file="<?= $storeFolder . $row[0]['about_image'] ?>" <?php } ?> />
                                    <input type="hidden" name="delete_file" id="delete_file" value="0" />
                                    <input type="hidden" name="file_name" id="file_name" value="<?php if ($id > 0) echo $row[0]['about_image'] ?>" />
                                </div>
                                <div class="col-6">
                                    <label class="form-label fw-bold" for="input-file-now">Banner Image</label>
                                    <input type="file" id="input-file-now" name="banner_image" class="dropify dropify-event" data-allowed-file-extensions='["png", "jpg", "jpeg", "webp"]' <?php if ($id > 0 && $row[0]['banner_image'] != "") { ?> data-default-file="<?= $storeFolder . $row[0]['banner_image'] ?>" <?php } ?> />
                                    <input type="hidden" name="delete_file" id="delete_file" value="0" />
                                    <input type="hidden" name="file_name" id="file_name" value="<?php if ($id > 0) echo $row[0]['banner_image'] ?>" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <label class="form-label fw-bold" for="school_description">Description</label>
                                    <textarea id="school_description" class="form-control tiny-mce" value="" name="school_description"><?= $row[0]['school_description'] ?? '' ?></textarea>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-12 text-end">
                                    <input type="hidden" name="add_edit">
                                    <button type="submit" id="dzSubmit" class="btn btn-primary w-md"><?= $id > 0 ? 'Update' : 'Save' ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Layout -->
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->

<?php
include "../../../includes/footer.php";
?>