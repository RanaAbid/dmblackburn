<?php
$page_title = "Our Policy";
include "../../includes/header.php";
$storeFolder = '../../assets/uploads/our-policies/';
$policy_id = isset($_GET['policy_id']) ? $_GET['policy_id'] : '0';
if ($policy_id > 0) {
    $row = fetch_data($link, "SELECT * FROM tbl_policies WHERE policy_id='$policy_id'");
}
?>
<div class="main-container container-fluid">
    <div class="inner-body">
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">Policy Details</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Policies Management</a></li>
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
        <div class="row mb-2">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><?= $policy_id > 0 ? 'Update' : 'Add' ?> Policy Details</h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <form action="save.php?policy_id=<?= $policy_id ?>" method="POST" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <p class="mg-b-10">Name</p>
                                            <input type="text" class="form-control" name="policy_name" id="policy_name" value="<?php if ($policy_id > 0) echo $row[0]['policy_name'] ?>" required placeholder="Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <p class="mg-b-10">Policy File</p>
                                            <input type="file" id="policy_file" name="policy_file" class="dropify dropify-event" data-allowed-file-extensions='["png", "jpg", "jpeg", "webp", "pdf", "docx", "xlxs"]' <?php if ($policy_id > 0 && $row[0]['policy_file'] != "") { ?> data-default-file="<?= $storeFolder . $row[0]['policy_file'] ?>" <?php } else { ?> required <?php } ?> />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 text-end">
                                        <input type="hidden" name="add_edit">
                                        <button type="submit" id="dzSubmit" class="btn btn-success w-md"><?= $policy_id > 0 ? 'Update' : 'Save' ?></button>
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