<?php
$page_title = "Our Staff";
include "../../includes/header.php";
$staff_id = isset($_GET['staff_id']) ? $_GET['staff_id'] : '0';
if ($staff_id > 0) {
    $row = fetch_data($link, "SELECT * FROM tbl_staff WHERE staff_id='$staff_id'");
}
?>
<div class="main-container container-fluid">
    <div class="inner-body">
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">Staff Details</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Staff Management</a></li>
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
                        <h4 class="card-title"><?= $staff_id > 0 ? 'Update' : 'Add' ?> Staff Details</h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <form action="save.php?staff_id=<?= $staff_id ?>" method="POST" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <p class="mg-b-10">Name</p>
                                            <input type="text" class="form-control" name="staff_name" id="staff_name" value="<?php if ($staff_id > 0) echo $row[0]['staff_name'] ?>" required placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <p class="mg-b-10">Title</p>
                                            <input type="text" class="form-control" name="staff_title" id="staff_title" value="<?php if ($staff_id > 0) echo $row[0]['staff_title'] ?>" required placeholder="Title">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <p class="mg-b-10">Status</p>
                                            <select class="form-select" id="staff_status" name="staff_status" required>
                                                <option value="">Select Status</option>
                                                <option value="1" <?php if ($staff_id > 0 && $row[0]['staff_status'] == '1') echo "selected"; ?>>Active</option>
                                                <option value="0" <?php if ($staff_id > 0 && $row[0]['staff_status'] == '0') echo "selected"; ?>>In-active</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <p class="mg-b-10">Featured</p>
                                            <select class="form-select" id="staff_featured" name="staff_featured" required>
                                                <option value="">Select Status</option>
                                                <option value="1" <?php if ($staff_id > 0 && $row[0]['staff_featured'] == '1') echo "selected"; ?>>Yes</option>
                                                <option value="0" <?php if ($staff_id > 0 && $row[0]['staff_featured'] == '0') echo "selected"; ?>>No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <p class="mg-b-10">Staff Info 1</p>
                                            <input type="text" class="form-control" name="staff_info" id="staff_info" value="<?php if ($staff_id > 0) echo $row[0]['staff_info'] ?>" placeholder="Info">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <p class="mg-b-10">Staff Info 2</p>
                                            <input type="text" class="form-control" name="staff_info_2" id="staff_info_2" value="<?php if ($staff_id > 0) echo $row[0]['staff_info_2'] ?>" placeholder="Info">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <p class="mg-b-10">Staff Info 3</p>
                                            <input type="text" class="form-control" name="staff_info_3" id="staff_info_3" value="<?php if ($staff_id > 0) echo $row[0]['staff_info_3'] ?>" placeholder="Info">
                                        </div>
                                    </div>

                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 text-end">
                                        <input type="hidden" name="add_edit">
                                        <button type="submit" id="dzSubmit" class="btn btn-primary w-md"><?= $staff_id > 0 ? 'Update' : 'Save' ?></button>
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