<?php
$page_title = "Welcome Section";
include "../../includes/header.php";
$storeFolder = '../../assets/uploads/welcome-section/';
$welcome_id = isset($_GET['welcome_id']) ? $_GET['welcome_id'] : '1';
if ($welcome_id > 0) {
    $row = fetch_data($link, "SELECT * FROM tbl_welcome_section WHERE welcome_id='$welcome_id'");
}
?>
<!-- Page-content -->
<div class="main-container container-fluid">
    <div class="inner-body">
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">Welcome Section Details</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Welcome Section</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Index</li>
                </ol>
            </div>
        </div>

        <!-- end page title -->
        <div class="row mb-2">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><?= $welcome_id > 0 ? 'Update' : 'Add' ?> Welcome Section</h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <form action="save.php?welcome_id=<?= $welcome_id ?>" method="POST" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <p class="mg-b-10">Organization Name</p>
                                            <input type="text" class="form-control" name="org_name" id="org_name" value="<?php if ($welcome_id > 0) echo $row[0]['org_name'] ?>" required placeholder="Darul Madinah Blackburn">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <p class="mg-b-10">Short Description</p>
                                            <textarea class="form-control tiny-mce" name="short_desc" id="short_desc" rows="4" placeholder="Short Description.."><?php if ($welcome_id > 0) echo $row[0]['short_desc'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <p class="mg-b-10">Welcome Banner</p>
                                            <input type="file" id="welcome_img" name="welcome_img" class="dropify dropify-event" data-allowed-file-extensions='["png", "jpg", "jpeg", "webp"]' <?php if ($welcome_id > 0 && $row[0]['welcome_img'] != "") { ?> data-default-file="<?= $storeFolder . $row[0]['welcome_img'] ?>" <?php } else { ?> required <?php } ?> />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 text-end">
                                        <input type="hidden" name="add_edit">
                                        <button type="submit" id="dzSubmit" class="btn btn-success w-md"><?= $welcome_id > 0 ? 'Update' : 'Save' ?></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Layout -->
        <div class="row mb-2">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4 class="card-title">Our Core Values</h4>
                        <div class="text-end mb-2">
                            <a onclick="addCoreModal()" class="btn ripple btn-success btn-sm text-white">Add New</a>
                        </div>
                    </div>
                    <div class="card-body bg-light">
                        <div class="row" id="values_div">
                            <?php
                            $values = fetch_data($link, "SELECT * FROM tbl_core_values");
                            foreach ($values as $value) {
                                echo <<<HTML
                                    <div class="col-lg-6">
                                    <div class="card card-aside custom-card">
                                        <a href="javascript:void(0);" class="card-aside-column cover-image rounded-start-11" data-image-src="{$storeFolder}{$value['value_icon']}" style="background: url('{$storeFolder}{$value['value_icon']}') center center;"></a>
                                        <div class="card-body">
                                        <h5 class="main-content-label tx-dark tx-medium mg-b-10">{$value['value_title']}</h5>
                                        <div class="">{$value['short_desc']}</div>
                                        <div class="d-flex align-items-center pt-3 mt-auto">
                                            <div class="ms-auto text-muted">
                                            <a onclick="editCoreModal('{$value['value_id']}')" class="icon d-none d-md-inline-block ms-3"><i class="fas fa-edit tippy-btn me-1" title="Edit" data-tippy-arrow="true" data-tippy-animation="fade"></i></a>
                                            <a onclick="JSconfirm('save.php?delete=1&value_id={$value['value_id']}&imgname={$value['value_icon']}')" class="icon d-none d-md-inline-block ms-3"><i class="fas fa-trash-alt tippy-btn" title="Delete" data-tippy-arrow="true" data-tippy-animation="fade"></i></a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    HTML;
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
<?php
include "modals.php";
include "../../includes/footer.php";
?>
<script src="functions.js"></script>