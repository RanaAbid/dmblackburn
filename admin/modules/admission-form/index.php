<?php
$page_title = "Admission Form";
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
            <div class="col-xl-12">
                <!-- div -->
                <div class="card custom-card" id="tabs-style43">
                    <div class="card-body">
                        <div class="main-content-label mg-b-5">
                            Vertical Tabs
                        </div>
                        <p class="text-muted card-sub-title">It is Very Easy to Customize and it uses in your website apllication.</p>
                        <div class="text-wrap">
                            <div class="example">
                                <div class="d-md-flex">
                                    <div class="">
                                        <div class="panel panel-primary tabs-style-4">
                                            <div class="tab-menu-heading">
                                                <div class="tabs-menu ">
                                                    <!-- Tabs -->
                                                    <ul class="nav panel-tabs me-3">
                                                        <li class=""><a href="#tab21" class="active" data-bs-toggle="tab"> Child's Details</a></li>
                                                        <li><a href="#tab22" data-bs-toggle="tab"> Name of First Parent/Guardian Living at Home Address Above</a></li>
                                                        <li><a href="#tab23" data-bs-toggle="tab"> Name of Second Parent/Guardian</a></li>
                                                        <li><a href="#tab24" data-bs-toggle="tab"> Emergency Contact Details</a></li>
                                                        <li><a href="#tab25" data-bs-toggle="tab"> Supplementary Details</a></li>
                                                        <li><a href="#tab26" data-bs-toggle="tab"> Permission</a></li>
                                                        <li><a href="#tab27" data-bs-toggle="tab"> Declaration</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tabs-style-4 w-100">
                                        <div class="panel-body tabs-menu-body">
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tab21">
                                                    <div class="row justify-content-center">
                                                        <div class="col-12">
                                                            <div class="kitba-checkout-form-main-space">
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_date" class="form-label">Date of Birth *</label>
                                                                            <input type="date" class="form-control form-control-lg" id="txt_date" name="txt_date" placeholder="Date of Birth" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="exampleFormControlInput1" class="form-label">Gender *</label>
                                                                            <select class="form-select form-select-lg mb-3" name="gender" aria-label=".form-select-lg example" required>
                                                                                <option selected value="">Select Gender</option>
                                                                                <option value="1">Male</option>
                                                                                <option value="2">Female</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_f_name" class="form-label">First Name *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_f_name" name="txt_f_name" placeholder="Enter First Name" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_surname" class="form-label">Surname *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_surname" name="txt_surname" placeholder="Enter Surname" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-12">
                                                                        <div class="mb-3">
                                                                            <label for="txt_address" class="form-label">Address *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_address" name="txt_address" placeholder="Enter Address" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_postcode" class="form-label">Postcode *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_postcode" name="txt_postcode" placeholder="Enter PostCode" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_choice_name" class="form-label">Preferred choice of name if any</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_choice_name" name="txt_choice_name" placeholder="Enter choice of name if any">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box">
                                                                    <div class="col-sm-12">
                                                                        <div class="">
                                                                            <label for="exampleFormControlInput1" class="form-label">Application For *</label>
                                                                            <select class="form-select form-select-lg mb-3" name="application_for" aria-label=".form-select-lg example" required>
                                                                                <option selected value="">Please select standard</option>
                                                                                <option value="1">Nursery</option>
                                                                                <option value="2">Year 1</option>
                                                                                <option value="1">Nursery</option>
                                                                                <option value="2">Year 1</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab22">
                                                    <p> Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
                                                    <p> Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
                                                    <p class="mb-0">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                                                </div>
                                                <div class="tab-pane" id="tab23">
                                                    <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
                                                    <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
                                                    <p class="mb-0">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. </p>
                                                </div>
                                                <div class="tab-pane" id="tab24">
                                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
                                                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
                                                    <p class="mb-0">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus </p>
                                                </div>
                                                <div class="tab-pane" id="tab25">
                                                    <p class="mb-0">Test 25</p>
                                                </div>
                                                <div class="tab-pane" id="tab26">
                                                    <p class="mb-0">Test 26</p>
                                                </div>
                                                <div class="tab-pane" id="tab27">
                                                    <p class="mb-0">Test127</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /div -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end page content -->
<?php
include "../../includes/footer.php";
?>