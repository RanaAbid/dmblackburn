<?php
$page_title = "Campus Activity & Events";
include "../../includes/header.php";
?>
<!-- Page Content-->
<div class="main-container container-fluid">
    <div class="inner-body">
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">Campus Activity & Events</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Campus Activity & Events</a></li>
                    <li class="breadcrumb-item" aria-current="page">Index</li>
                </ol>
            </div>
            <div class="d-flex">
                <div class="justify-content-center">
                    <a href="create.php" class="btn btn-primary waves-effect waves-light">Add New</a>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Campus Activity & Events</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0 table-bordered-custom dataTable w-100">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center" width="7%">Sr No.</th>
                                        <th>Event Title</th>
                                        <th width="10%">Date</th>
                                        <th class="text-center" width="10%">Status</th>
                                        <th class="text-end" width="6%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $rows = fetch_data($link, "SELECT * FROM tbl_activity_events ORDER by event_date DESC");
                                    foreach ($rows as $key => $row) {
                                        if ($row['event_status'] == '1') {
                                            $status = '<span class="badge bg-success">Active</span>';
                                        } else {
                                            $status = '<span class="badge bg-warning">In-Active</span>';
                                        }
                                    ?>
                                        <tr>
                                            <td class="text-center align-middle"><?= $key + 1; ?></td>
                                            <td><?=$row['event_title']?></td>
                                            <td><?=show_date($row['event_date'])?></td>
                                            <td class="text-center align-middle"><a onclick="JSconfirm('change_status.php?change_status=1&event_id=<?= $row['event_id']; ?>&status=<?= $row['event_status'] ?>','warning','Are you sure to change the status of selected event?')"><?= $status ?></a></td>
                                            <td class="text-end text-center align-middle">
                                                <a href="create.php?event_id=<?= $row['event_id']; ?>"><i class="fas fa-edit tippy-btn" title="Edit" data-tippy-arrow="true" data-tippy-animation="fade"></i></a>
                                                <a onclick="JSconfirm('save.php?delete=1&event_id=<?= $row['event_id']; ?>&imgname=<?= $row['event_img']; ?>')"><i class="fas fa-trash-alt tippy-btn" title="Delete" data-tippy-arrow="true" data-tippy-animation="fade"></i></a>
                                            </td>
                                        </tr>
                                    <?php
                                    } ?>
                                </tbody>
                            </table>
                            <!--end /table-->
                        </div>
                        <!--end /table responsive-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page content -->
<?php
include "../../includes/footer.php";
?>