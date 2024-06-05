<?php
$page_title = "Gallery";
include "../../includes/header.php";
$storeFolder = '../../assets/uploads/gallery';
$gallery_id = isset($_GET['gallery_id']) ? $_GET['gallery_id'] : '0';
if ($gallery_id > 0) {
    $row = fetch_data($link, "SELECT * FROM tbl_gallery WHERE gallery_id='$gallery_id'");
}
?>
<!-- Page-content -->
<div class="main-container container-fluid">
    <div class="inner-body">
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">Gallery</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Gallery</a></li>
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
                        <h4 class="card-title">Add New Image</h4>
                        <p class="card-title-desc">File size less than 1MB</p>
                    </div>
                    <div class="card-body">
                        <div>
                            <form action="save.php?gallery_id=<?= $gallery_id ?>" method="POST" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <p class="mg-b-10">Category</p>
                                        <input class="form-control" id="gallery_category" name="gallery_category" value="<?= $row[0]['gallery_category'] ?? '' ?>" />
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <p class="mg-b-10">Image</p>
                                        <input type="file" id="gallery_img" name="gallery_img" class="dropify dropify-event" data-allowed-file-extensions='["png", "jpg", "jpeg", "webp"]' multiple <?php if ($gallery_id > 0 && $row[0]['gallery_img'] != "") { ?> data-default-file="<?= $storeFolder .'/'. $row[0]['gallery_img'] ?>" <?php } else { ?> required <?php } ?>/>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <p class="mg-b-10">Image Description</p>
                                        <textarea class="form-control" name="img_desc" id="img_desc" rows="4" placeholder="Description.."><?php if ($gallery_id > 0) echo $row[0]['img_desc'] ?></textarea>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 text-end">
                                        <input type="hidden" name="add_edit">
                                        <button type="submit" id="dzSubmit" class="btn btn-success w-md"><?= $gallery_id > 0 ? 'Update' : 'Save' ?></button>
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