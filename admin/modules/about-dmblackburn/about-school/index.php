<?php
$page_title = "Our Projects";
include "../../includes/header.php";
?>
<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0"><?= $page_title ?></h4>

                    <div class="page-title-right">
                        <a href="create.php" class="btn btn-primary waves-effect waves-light">Add New</a>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"><?= $page_title ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th width="6%">Sr No.</th>
                                        <th>Title</th>
                                        <th class="text-center" width="10%">Status</th>
                                        <th class="text-center" width="10%">Featured</th>
                                        <th class="text-end" width="6%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $rows = fetch_data($link, "SELECT * FROM tbl_project ORDER BY added_on DESC");
                                    foreach ($rows as $key => $row) {
                                        if ($row['project_status'] == '1') {
                                            $status = '<span class="badge bg-success">Active</span>';
                                        } else {
                                            $status = '<span class="badge bg-warning">In-Active</span>';
                                        }
                                        if ($row['project_featured'] == '1') {
                                            $feature = '<span class="badge bg-success">Active</span>';
                                        } else {
                                            $feature = '<span class="badge bg-warning">In-Active</span>';
                                        }
                                    ?>
                                        <tr>
                                            <td><?= $key + 1; ?></td>
                                            <td><?= $row['project_title']?></td>
                                            <td class="text-center"><a onclick="JSconfirm('change_status.php?change_status=1&id=<?= $row['project_id']; ?>&status=<?=$row['project_status']?>','warning','Are you sure to change the status of selected record ?')"><?= $status ?></a></td>
                                            <td class="text-center"><a onclick="JSconfirm('change_status.php?change_feature=1&id=<?= $row['project_id']; ?>&featured=<?=$row['project_featured']?>','warning','Are you sure to change the status of Featured record ?')"><?= $feature ?></a></td>
                                            <td class="text-end">
                                                <a href="add-details.php?id=<?= $row['project_id']; ?>"><i class="fa fa-bars" title="Add Details"></i></a>
                                                <a href="create.php?id=<?= $row['project_id']; ?>"><i class="fas fa-edit tippy-btn" title="Edit" data-tippy-arrow="true" data-tippy-animation="fade"></i></a>
                                                <a onclick="JSconfirm('save.php?delete=1&id=<?= $row['project_id']; ?>')"><i class="fas fa-trash-alt tippy-btn" title="Delete" data-tippy-arrow="true" data-tippy-animation="fade"></i></a>
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
<script type="text/javascript">
    $(document).ready(function() {
        $('#datatable').DataTable();
    });
</script>