<?php
$page_title = "Hero Section";
include "../../includes/header.php";
$storeFolder = '../../assets/uploads/hero-section';
$id = isset($_GET['id']) ? $_GET['id'] : '0';
if ($id > 0) {
    $row = fetch_data($link, "SELECT * FROM tbl_media WHERE id='$id' AND media_type='hero-image'");
}
?>
<!-- Page-content -->
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0"><?php echo $page_title; ?></h4>
                    <div class="page-title-right">
                        <a href="index.php" class="btn btn-primary waves-effect waves-light">Back</a>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add New Banner</h4>
                        <p class="card-title-desc">File size less than 1MB</p>
                    </div>
                    <div class="card-body">
                        <div>
                            <form action="save.php?id=<?= $id ?>" method="POST" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <label class="form-label" for="input-file-now">Banner Image</label>
                                        <input type="file" id="input-file-now" name="banner_image" class="dropify dropify-event" data-allowed-file-extensions='["png", "jpg", "jpeg", "webp"]' <?php if ($id > 0 && $row[0]['media_name'] != "") { ?> data-default-file="<?= $storeFolder .'/'. $row[0]['media_name'] ?>" <?php } else { ?> required <?php } ?>/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <label class="form-label" for="slider_url">Slider URL</label>
                                        <input class="form-control" id="slider_url" name="slider_url" value="<?= $row[0]['url'] ?? '' ?>" />
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
        </div>
        <!-- End Form Layout -->
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
<?php
include "../../includes/footer.php";
?>