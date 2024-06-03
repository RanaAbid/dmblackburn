<?php
$page_title = "Parents Information";
include "../../includes/header.php";
$storeFolder = '../../assets/uploads/parents-info/';
$parents_id = isset($_GET['parents_id']) ? $_GET['parents_id'] : '1';
if ($parents_id > 0) {
    $row = fetch_data($link, "SELECT * FROM tbl_parents_info WHERE parents_id='$parents_id'");
}
?>
<!-- Page-content -->
<div class="main-container container-fluid">
    <div class="inner-body">
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">Parents Page Details</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Parents Info</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Index</li>
                </ol>
            </div>
        </div>

        <!-- end page title -->
        <div class="row mb-2">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><?= $parents_id > 0 ? 'Update' : 'Add' ?> Parents Page Details</h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <form action="save.php?parents_id=<?= $parents_id ?>" method="POST" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <p class="mg-b-10">Top Description</p>
                                            <textarea class="form-control tiny-mce" name="top_desc" id="top_desc" rows="4" placeholder="Description.."><?php if ($parents_id > 0) echo $row[0]['top_desc'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <p class="mg-b-10">Top Banner</p>
                                            <input type="file" id="top_img" name="top_img" class="dropify dropify-event" data-allowed-file-extensions='["png", "jpg", "jpeg", "webp"]' <?php if ($parents_id > 0 && $row[0]['top_img'] != "") { ?> data-default-file="<?= $storeFolder . $row[0]['top_img'] ?>" <?php } else { ?> required <?php } ?> />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <p class="mg-b-10">Middle Description</p>
                                            <textarea class="form-control tiny-mce" name="mid_desc" id="mid_desc" rows="4" placeholder="Description.."><?php if ($parents_id > 0) echo $row[0]['mid_desc'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <p class="mg-b-10">Middle Banner</p>
                                            <input type="file" id="mid_img" name="mid_img" class="dropify dropify-event" data-allowed-file-extensions='["png", "jpg", "jpeg", "webp"]' <?php if ($parents_id > 0 && $row[0]['mid_img'] != "") { ?> data-default-file="<?= $storeFolder . $row[0]['mid_img'] ?>" <?php } else { ?> required <?php } ?> />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <p class="mg-b-10">Bottom Description</p>
                                            <textarea class="form-control tiny-mce" name="end_desc" id="end_desc" rows="4" placeholder="Description.."><?php if ($parents_id > 0) echo $row[0]['end_desc'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <p class="mg-b-10">Bottom Banner</p>
                                            <input type="file" id="end_img" name="end_img" class="dropify dropify-event" data-allowed-file-extensions='["png", "jpg", "jpeg", "webp"]' <?php if ($parents_id > 0 && $row[0]['end_img'] != "") { ?> data-default-file="<?= $storeFolder . $row[0]['end_img'] ?>" <?php } else { ?> required <?php } ?> />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 text-end">
                                        <input type="hidden" name="add_edit">
                                        <button type="submit" id="dzSubmit" class="btn btn-primary w-md"><?= $parents_id > 0 ? 'Update' : 'Save' ?></button>
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