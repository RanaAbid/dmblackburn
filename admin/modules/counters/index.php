<?php
$page_title = "Counters";
include "../../includes/header.php";
$counter_id = 1;
$row = fetch_data($link, "SELECT * FROM tbl_counters WHERE counter_id = '$counter_id'");
?>
<!-- Page-content -->
<div class="main-container container-fluid">
    <div class="inner-body">
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">Counter Details</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Index</a></li>
                </ol>
            </div>
        </div>

        <!-- end page title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update Counter Details</h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <form action="save.php?counter_id=<?= $counter_id ?>" method="POST" enctype="multipart/form-data">
                                <h6 class="text-left">Counter 01</h6>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <p class="mg-b-10">Title</p>
                                            <input type="text" class="form-control" id="counter_1_text" name="counter_1_text" placeholder="i.e Teachers" value="<?= $row[0]['counter_1_text'] ?? '' ?>" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <p class="mg-b-10">Number</p>
                                            <input type="number" class="form-control" name="counter_1_num" id="counter_1_num" value="<?php if ($counter_id > 0) echo $row[0]['counter_1_num'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text-left">Counter 02</h6>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <p class="mg-b-10">Title</p>
                                            <input type="text" class="form-control" id="counter_2_text" name="counter_2_text" placeholder="i.e Teachers" value="<?= $row[0]['counter_2_text'] ?? '' ?>" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <p class="mg-b-10">Number</p>
                                            <input type="number" class="form-control" name="counter_2_num" id="counter_2_num" value="<?php if ($counter_id > 0) echo $row[0]['counter_2_num'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text-left">Counter 03</h6>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <p class="mg-b-10">Title</p>
                                            <input type="text" class="form-control" id="counter_3_text" name="counter_3_text" placeholder="i.e Teachers" value="<?= $row[0]['counter_3_text'] ?? '' ?>" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <p class="mg-b-10">Number</p>
                                            <input type="number" class="form-control" name="counter_3_num" id="counter_3_num" value="<?php if ($counter_id > 0) echo $row[0]['counter_3_num'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <h6 class="text-left">Counter 04</h6>
                                <div class="row mb-3">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <p class="mg-b-10">Title</p>
                                            <input type="text" class="form-control" id="counter_4_text" name="counter_4_text" placeholder="i.e Teachers" value="<?= $row[0]['counter_4_text'] ?? '' ?>" />
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <p class="mg-b-10">Number</p>
                                            <input type="number" class="form-control" name="counter_4_num" id="counter_4_num" value="<?php if ($counter_id > 0) echo $row[0]['counter_4_num'] ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12 text-end">
                                        <input type="hidden" name="add_edit">
                                        <button type="submit" id="dzSubmit" class="btn btn-success w-md"><?= $counter_id > 0 ? 'Update' : 'Save' ?></button>
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