<?php
$page_title = "Community Information";
include "../../includes/header.php";
$storeFolder = '../../assets/uploads/community-information/';
$community_id = isset($_GET['community_id']) ? $_GET['community_id'] : '0';
if ($community_id > 0) {
    $row = fetch_data($link, "SELECT * FROM tbl_community_information WHERE community_id='$community_id'");
}
?>
<div class="main-container container-fluid">
    <div class="inner-body">
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">Community Information Details</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Community Information Management</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
            </div>
            <div class="d-flex">
                <div class="justify-content-center">
                    <a href="index.php" class="btn btn-primary waves-effect waves-light">Back</a>
                </div>

            </div>
        </div>
        <!-- end page title -->
        <div class="row mb-2">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><?= $community_id > 0 ? 'Update' : 'Add' ?> Community Information Details</h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <form action="save.php?community_id=<?= $community_id ?>" method="POST" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <p class="mg-b-10">Community Information Name</p>
                                            <input type="text" class="form-control" name="community_name" id="community_name" value="<?php if ($community_id > 0) echo $row[0]['community_name'] ?>" required placeholder="Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <p class="mg-b-10">Community Information File</p>
                                            <input type="file" id="community_file" name="community_file" class="dropify dropify-event" data-allowed-file-extensions='["png", "jpg", "jpeg", "webp", "pdf", "docx", "xlxs"]' <?php if ($community_id > 0 && $row[0]['community_file'] != "") { ?> data-default-file="<?= $storeFolder . $row[0]['community_file'] ?>" <?php } else { ?> required <?php } ?> />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 text-end">
                                        <input type="hidden" name="add_edit">
                                        <button type="submit" id="dzSubmit" class="btn btn-primary w-md"><?= $community_id > 0 ? 'Update' : 'Save' ?></button>
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