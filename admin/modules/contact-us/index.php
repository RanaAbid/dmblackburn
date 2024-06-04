<?php
$page_title = "Contact Us";
include "../../includes/header.php";
?>
<!-- Page Content-->
<div class="main-container container-fluid">
    <div class="inner-body">
        <div class="page-header">
            <div>
                <h2 class="main-content-title tx-24 mg-b-5"><?php echo "$page_title" ?></h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><?php echo "$page_title" ?></a></li>
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
                        <h4 class="card-title"><?php echo "$page_title" ?></h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0 table-bordered-custom dataTable w-100">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="text-center" width="7%">Sr No.</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Message</th>
                                        <th>Added On</th>
                                        <th class="text-end" width="6%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $rows = fetch_data($link, "SELECT * FROM tbl_contacts ORDER by created_at DESC");
                                    foreach ($rows as $key => $row) {
                                    ?>
                                        <tr>
                                            <td class="text-center align-middle"><?= $key + 1; ?></td>
                                            <td><?=$row['first_name']?></td>
                                            <td><?=$row['last_name']?></td>
                                            <td><?=$row['email']?></td>
                                            <td><?=$row['phone_number']?></td>
                                            <td><?=$row['message']?></td>
                                            <td><?=$row['created_at']?></td>
                                            <td class="text-end text-center align-middle">
                                                <a onclick="JSconfirm('save.php?delete=1&contact_id=<?= $row['contact_id']; ?>')"><i class="fas fa-trash-alt tippy-btn" title="Delete" data-tippy-arrow="true" data-tippy-animation="fade"></i></a>
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