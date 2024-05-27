<?php
$page_title = "Social Media Management";
include "../../includes/header.php";

$id = isset($_GET['id']) ? $_GET['id'] : '0';
if ($id > 0) {
    $row = fetch_data($link, "SELECT * FROM tbl_department WHERE department_id='$id'");
}
?>
<!-- Page-content -->
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Our-Departments</h4>

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
                        <h4 class="card-title mb-0">Our-Departments</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mt-4 mt-xl-0">
                                    <form action="save.php?id=<?= $id ?>" method="POST">
                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <label class="form-label" for="department_title">Department Title</label>
                                                <input class="form-control" id="department_title" name="department_title" value="<?= $row[0]['department_title'] ?? '' ?>" required/>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-12">
                                                <label class="form-label" for="department_description">Description</label>
                                                <textarea class="form-control" type="department_description" value=""  name="department_description" required rows="2"><?= $row[0]['department_description'] ?? '' ?></textarea>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <label class="form-label" for="department_read_more">Read More URL</label>
                                                <input class="form-control" type="text" id="department_read_more" name="department_read_more" value="<?= $row[0]['department_read_more'] ?? '' ?>"/>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label" for="department_status">Status</label>
                                                <select class="form-select" id="department_status" name="department_status" required>
                                                    <option value="">Select Status</option>
                                                    <option value="1" <?php if ($id > 0 && $row[0]['department_status'] == '1') echo "selected";?>>Active</option>
                                                    <option value="0" <?php if ($id > 0 && $row[0]['department_status'] == '0') echo "selected";?>>In-active</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-6">
                                                <label class="form-label" for="department_featured">Featured</label>
                                                <select class="form-select" id="department_featured" name="department_featured" required>
                                                    <option value="">Select Featured</option>
                                                    <option value="1" <?php if ($id > 0 && $row[0]['department_featured'] == '1') echo "selected";?>>Active</option>
                                                    <option value="0" <?php if ($id > 0 && $row[0]['department_featured'] == '0') echo "selected";?>>In-active</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="row mt-4">
                                            <div class="col-12 text-end">
                                                <input type="hidden" name="add_edit">
                                                <button type="submit" class="btn btn-primary w-md"><?= $id > 0 ? 'Update' : 'Save' ?></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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