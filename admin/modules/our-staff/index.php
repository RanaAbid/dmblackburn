<?php
$page_title = "Our Staff";
include "../../includes/header.php";
?>
<div class="main-container container-fluid">
    <div class="inner-body">
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5"><?php echo $page_title; ?></h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item" aria-current="page"><?php echo $page_title; ?></li>
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
                        <h4 class="card-title"><?php echo $page_title; ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered mb-0 table-bordered-custom">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center" width="7%">Sr No.</th>
                                        <th>Name</th>
                                        <th>Designation</th>
                                        <th class="text-center" width="10%">Status</th>
                                        <th class="text-end" width="6%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $rows = fetch_data($link, "SELECT * FROM tbl_media where media_type='hero-image' ORDER by id DESC");
                                    foreach ($rows as $key => $row) {
                                        if ($row['media_status'] == '1') {
                                            $status = '<span class="badge bg-success">Active</span>';
                                        } else {
                                            $status = '<span class="badge bg-warning">In-Active</span>';
                                        }
                                    ?>
                                        <tr>
                                            <td class="text-center align-middle"><?= $key + 1; ?></td>
                                            <td>
                                                <img class="wd-20p" src="<?= $storeFolder; ?>/<?= $row['media_name']; ?>" />
                                            </td>
                                            <td class="text-center align-middle"><a onclick="JSconfirm('change_status.php?change_status=1&id=<?= $row['id']; ?>&status=<?= $row['media_status'] ?>','warning','Are you sure to change the status of selected record ?')"><?= $status ?></a></td>
                                            <td class="text-end text-center align-middle">
                                                <a href="create.php?id=<?= $row['id']; ?>"><i class="fas fa-edit tippy-btn" title="Edit" data-tippy-arrow="true" data-tippy-animation="fade"></i></a>
                                                <a onclick="JSconfirm('save.php?delete=1&id=<?= $row['id']; ?>&imgname=<?= $row['media_name']; ?>')"><i class="fas fa-trash-alt tippy-btn" title="Delete" data-tippy-arrow="true" data-tippy-animation="fade"></i></a>
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



<!-- Page Content-->
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Our Departments</h4>

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
                        <h4 class="card-title">Department</h4>
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
                                    $rows = fetch_data($link, "SELECT * FROM tbl_department ORDER BY added_on DESC");
                                    foreach ($rows as $key => $row) {
                                        if ($row['department_status'] == '1') {
                                            $status = '<span class="badge bg-success">Active</span>';
                                        } else {
                                            $status = '<span class="badge bg-warning">In-Active</span>';
                                        }
                                        if ($row['department_featured'] == '1') {
                                            $feature = '<span class="badge bg-success">Active</span>';
                                        } else {
                                            $feature = '<span class="badge bg-warning">In-Active</span>';
                                        }
                                    ?>
                                        <tr>
                                            <td><?= $key + 1; ?></td>
                                            <td><?= $row['department_title']?></td>
                                            <td class="text-center"><a onclick="JSconfirm('change_status.php?change_status=1&id=<?= $row['department_id']; ?>&status=<?=$row['department_status']?>','warning','Are you sure to change the status of selected record ?')"><?= $status ?></a></td>
                                            <td class="text-center"><a onclick="JSconfirm('change_status.php?change_feature=1&id=<?= $row['department_id']; ?>&featured=<?=$row['department_featured']?>','warning','Are you sure to change the status of Featured record ?')"><?= $feature ?></a></td>
                                            <td class="text-end">
                                                <a href="create.php?id=<?= $row['department_id']; ?>"><i class="fas fa-edit tippy-btn" title="Edit" data-tippy-arrow="true" data-tippy-animation="fade"></i></a>
                                                <a onclick="JSconfirm('save.php?delete=1&id=<?= $row['department_id']; ?>')"><i class="fas fa-trash-alt tippy-btn" title="Delete" data-tippy-arrow="true" data-tippy-animation="fade"></i></a>
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