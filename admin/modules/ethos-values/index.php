<?php
$page_title = "Ethos Values";
include "../../includes/header.php";
$storeFolder = '../../assets/uploads/ethos-values/';
$ethos_id = isset($_GET['ethos_id']) ? $_GET['ethos_id'] : '1';
if ($ethos_id > 0) {
    $row = fetch_data($link, "SELECT * FROM tbl_ethos_values WHERE ethos_id='$ethos_id'");
}
?>
<!-- Page-content -->
<div class="main-container container-fluid">
    <div class="inner-body">
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">Ethos Values Details</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Ethos Values</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Index</li>
                </ol>
            </div>
        </div>

        <!-- end page title -->
        <div class="row mb-2">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><?= $ethos_id > 0 ? 'Update' : 'Add' ?>Ethos Values</h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <form action="save.php?ethos_id=<?= $ethos_id ?>" method="POST" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <p class="mg-b-10">First Description</p>
                                            <textarea class="form-control tiny-mce" name="first_desc" id="first_desc" rows="4" placeholder="Description.."><?php if ($ethos_id > 0) echo $row[0]['first_desc'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <p class="mg-b-10">Left Banner</p>
                                            <input type="file" id="left_img" name="left_img" class="dropify dropify-event" data-allowed-file-extensions='["png", "jpg", "jpeg", "webp"]' <?php if ($ethos_id > 0 && $row[0]['left_img'] != "") { ?> data-default-file="<?= $storeFolder . $row[0]['left_img'] ?>" <?php } else { ?> required <?php } ?> />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <p class="mg-b-10">Right Description</p>
                                            <textarea class="form-control tiny-mce" name="right_desc" id="right_desc" rows="4" placeholder="Description.."><?php if ($ethos_id > 0) echo $row[0]['right_desc'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 text-end">
                                        <input type="hidden" name="add_edit">
                                        <button type="submit" id="dzSubmit" class="btn btn-primary w-md"><?= $ethos_id > 0 ? 'Update' : 'Save' ?></button>
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