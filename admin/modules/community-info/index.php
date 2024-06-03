<?php
$page_title = "Community Information";
include "../../includes/header.php";
?>
<!-- Page Content-->
<div class="main-container container-fluid">
    <div class="inner-body">
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">Community Information</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Community Information</a></li>
                    <li class="breadcrumb-item" aria-current="page">Index</li>
                </ol>
            </div>
            <div class="d-flex">
                <div class="justify-content-center">
                    <a href="create.php" class="btn btn-primary waves-effect waves-light">Add New</a>
                </div>

            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Community Information Details</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0 dataTable">
                                <thead class="thead-light">
                                    <tr>
                                        <th width="6%">Sr No.</th>
                                        <th>Community Info</th>
                                        <th class="text-center" width="10%">Status</th>
                                        <th class="text-end" width="6%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $rows = fetch_data($link, "SELECT * FROM tbl_community_information ORDER BY added_on DESC");
                                    foreach ($rows as $key => $row) {
                                        if ($row['community_status'] == '1') {
                                            $status = '<span class="badge bg-success">Active</span>';
                                        } else {
                                            $status = '<span class="badge bg-warning">In-Active</span>';
                                        }
                                    ?>
                                        <tr>
                                            <td><?= $key + 1; ?></td>
                                            <td><?= $row['community_name']?></td>
                                            <td class="text-center"><a onclick="JSconfirm('change_status.php?change_status=1&community_id=<?= $row['community_id']; ?>&status=<?=$row['community_status']?>','warning','Are you sure to change the status of selected record ?')"><?= $status ?></a></td>
                                            <td class="text-end">
                                                <a href="create.php?community_id=<?= $row['community_id']; ?>"><i class="fas fa-edit tippy-btn" title="Edit" data-tippy-arrow="true" data-tippy-animation="fade"></i></a>
                                                <a onclick="JSconfirm('save.php?delete=1&community_id=<?= $row['community_id']; ?>&imgname=<?= $row['community_file']; ?>')"><i class="fas fa-trash-alt tippy-btn" title="Delete" data-tippy-arrow="true" data-tippy-animation="fade"></i></a>
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