<?php
$page_title = "Admission Form";
include "../../includes/header.php";
?>


<!-- Page Content-->
<div class="main-container container-fluid">
    <div class="inner-body">
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5">Admission Form List</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Admission Form</a></li>
                    <li class="breadcrumb-item" aria-current="page">Index</li>
                </ol>
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
                            <table class="table table-bordered mb-0 table-bordered-custom dataTable">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center" width="7%">Sr No.</th>
                                        <th>Child Name</th>
                                        <th>Parent Name</th>
                                        <th>Application For</th>
                                        <th class="text-center" width="10%">Status</th>
                                        <th class="text-end" width="6%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $rows = fetch_data($link, "SELECT * FROM tbl_admission_form ORDER by added_on DESC");
                                    foreach ($rows as $key => $row) {
                                        if ($row['status'] == '1') {
                                            $status = '<span class="badge bg-success">Approved</span>';
                                        } else {
                                            $status = '<span class="badge bg-warning">Pending</span>';
                                        }

                                        if ($row['application_for'] == '1') {
                                            $category = '<span class="badge bg-success">Nursery</span>';
                                        } else {
                                            $category = '<span class="badge bg-warning">Year 1</span>';
                                        }
                                    ?>
                                        <tr>
                                            <td class="text-center align-middle"><?= $key + 1; ?></td>
                                            <td><?= $row['first_name']." ".$row['surname']?></td>
                                            <td><?= $row['guardian_first_name']." ".$row['guardian_surname']?></td>
                                            <td><?= $category; ?></td>
                                            <td class="text-center align-middle"><a onclick="JSconfirm('change_status.php?change_status=1&form_id=<?= $row['form_id']; ?>&status=<?= $row['status'] ?>','warning','Are you sure to change the status of selected record ?')"><?= $status ?></a></td>
                                            <td class="text-end text-center align-middle">
                                                <a href="form.php?form_id=<?= $row['form_id']; ?>"><i class="fas fa-eye tippy-btn" title="View Details" data-tippy-arrow="true" data-tippy-animation="fade"></i></a>
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
