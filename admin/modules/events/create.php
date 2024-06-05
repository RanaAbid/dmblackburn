<?php
$page_title = "Campus Activity & Events";
include "../../includes/header.php";
$storeFolder = '../../assets/uploads/activity-events';
$event_id = isset($_GET['event_id']) ? $_GET['event_id'] : '0';
if ($event_id > 0) {
    $row = fetch_data($link, "SELECT * FROM tbl_activity_events WHERE event_id='$event_id'");
}
?>
<!-- Page-content -->
<div class="main-container container-fluid">
    <div class="inner-body">
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">Campus Activity & Event Details</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Campus Activity & Events</a></li>
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
                        <h4 class="card-title"><?= $event_id > 0 ? 'Update' : 'Add' ?> Activity & Event Details</h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <form action="save.php?event_id=<?= $event_id ?>" method="POST" enctype="multipart/form-data">
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <p class="mg-b-10">Event Title</p>
                                            <input type="text" class="form-control" name="event_title" id="event_title" value="<?php if ($event_id > 0) echo $row[0]['event_title'] ?>" required placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <p class="mg-b-10">Event Date</p>
                                            <input type="date" class="form-control" name="event_date" id="event_date" value="<?php if ($event_id > 0) echo $row[0]['event_date'] ?>" required placeholder="Date">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <p class="mg-b-10">Short Description</p>
                                            <textarea class="form-control" name="event_short_desc" name="event_short_desc" rows="4" placeholder="Short Description.."><?php if ($event_id > 0) echo $row[0]['short_desc'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <p class="mg-b-10">Event Description</p>
                                            <textarea class="form-control tiny-mce" name="event_desc" id="event_desc" rows="4" placeholder="Event Detailed Description.."><?php if ($event_id > 0) echo $row[0]['description'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-12">
                                        <label class="form-label" for="input-file-now">Event Banner</label>
                                        <input type="file" id="input-file-now" name="event_img" class="dropify dropify-event" data-allowed-file-extensions='["png", "jpg", "jpeg", "webp"]' <?php if ($event_id > 0 && $row[0]['event_img'] != "") { ?> data-default-file="<?= $storeFolder . '/' . $row[0]['event_img'] ?>" <?php } else { ?> required <?php } ?> />
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 text-end">
                                        <input type="hidden" name="add_edit">
                                        <button type="submit" id="dzSubmit" class="btn btn-success w-md"><?= $event_id > 0 ? 'Update' : 'Save' ?></button>
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