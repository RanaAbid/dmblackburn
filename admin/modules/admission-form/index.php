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
                    <a href="create.php" class="btn btn-success waves-effect waves-light">Add New</a>
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
                                                    <div class="row justify-content-center">
                                                        <div class="col-12">
                                                            <div class="kitba-checkout-form-main-space">
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-4">
                                                                        <div class="mb-3">
                                                                            <label for="txt_title" class="form-label">Title *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_title" name="txt_title" placeholder="Mr., Mrs. , etc." required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="mb-3">
                                                                            <label for="txt_guardian_name" class="form-label">First Name *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_guardian_name" name="txt_guardian_name" placeholder="Enter Name of First Parent/Guardian" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="mb-3">
                                                                            <label for="txt_guardian_name" class="form-label">Surname *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_guardian_surname" name="txt_guardian_surname" placeholder="Enter Surname" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_relation_child" class="form-label">Relationship to Child *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_relation_child" name="txt_relation_child" placeholder="Relation" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="exampleFormControlInput1" class="form-label">Parental Responsibility *</label>
                                                                            <select class="form-select form-select-lg mb-3" name="parental_responsibility" aria-label=".form-select-lg example" required>
                                                                                <option selected value="">Parental Responsibility</option>
                                                                                <option value="1">Yes</option>
                                                                                <option value="0">No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_telephone" class="form-label">Home Telephone Number *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_telephone" name="txt_telephone" placeholder="Enter Home Telephone Number" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_mobile" class="form-label">Mobile No.</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_mobile" name="txt_mobile" placeholder="Enter Mobile No." required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_work_email" class="form-label">Email</label>
                                                                            <input type="email" class="form-control form-control-lg" id="txt_work_email" name="txt_work_email" placeholder="Enter Email" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_work_telephone" class="form-label">Work Telephone Number *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_work_telephone" name="txt_work_telephone" placeholder="Enter Work Telephone Number" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box">
                                                                    <div class="col-sm-12">
                                                                        <div class="">
                                                                            <label for="txt_work_place" class="form-label">Work Place *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_work_place" name="txt_work_place" placeholder="Enter Work Place" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab23">
                                                    <div class="row justify-content-center">
                                                        <div class="col-12">
                                                            <div class="kitba-checkout-form-main-space">
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-4">
                                                                        <div class="mb-3">
                                                                            <label for="txt_second_title" class="form-label">Title *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_second_title" name="txt_second_title" placeholder="Mr., Mrs. , etc." required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="mb-3">
                                                                            <label for="txt_secondParent_name" class="form-label">First Name *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_secondParent_name" name="txt_secondParent_name" placeholder="Enter First Name" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="mb-3">
                                                                            <label for="txt_secondParent_surname" class="form-label">Surname *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_secondParent_surname" name="txt_secondParent_surname" placeholder="Enter Surname" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_second_parent_relation_child" class="form-label">Relationship to Child *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_second_parent_relation_child" name="txt_second_parent_relation_child" placeholder="Relation" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="exampleFormControlInput1" class="form-label">Parental Responsibility? *</label>
                                                                            <select class="form-select form-select-lg mb-3" name="parental_responsibility2" aria-label=".form-select-lg example" required>
                                                                                <option selected value="">Parental Responsibility</option>
                                                                                <option value="1">Yes</option>
                                                                                <option value="0">No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_second_mobile" class="form-label">Mobile Phone Number</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_second_mobile" name="txt_second_mobile" placeholder="Enter Mobile Number">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_second_telephone" class="form-label">Work Telephone Number</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_second_telephone" name="txt_second_telephone" placeholder="Enter Telephone Number">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_second_work" class="form-label">Work Place</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_second_work" name="txt_second_work" placeholder="Enter Work Place">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_second_address" class="form-label">Address (if different)</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_second_address" name="txt_second_address" placeholder="Enter Address (if different)">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box">
                                                                    <div class="col-sm-12">
                                                                        <div class="">
                                                                            <label for="txt_work_place" class="form-label">Other children in the family name(s) and date of birth</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_work_place" id="txt_work_place" placeholder="Enter Detail">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab24">
                                                    <div class="row justify-content-center">
                                                        <div class="col-12">
                                                            <div class="kitba-checkout-form-main-space">
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_doctor_name" class="form-label">Name of Doctor *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_doctor_name" name="txt_doctor_name" placeholder="Name of Doctor" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_doctor_number" class="form-label">Telephone Number *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_doctor_number" name="txt_doctor_number" placeholder="Enter Telephone Number" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_emergency_address" class="form-label">Practice address *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_emergency_address" name="txt_emergency_address" placeholder="Practice address" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_emergency_PostCode" class="form-label">Post Code *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_emergency_PostCode" name="txt_emergency_PostCode" placeholder="Post Code" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_emergency_name" class="form-label">Name(s) *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_emergency_name" name="txt_emergency_name" placeholder="Enter Name(s)" required>
                                                                            <small>Other local contacts in case of emergency or illness at school</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_emergency_no" class="form-label">Telephone Number</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_emergency_no" name="txt_emergency_no" placeholder="Enter Telephone Number" required>
                                                                            <small>Telephone Number</small>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-12">
                                                                        <div class="mb-3">
                                                                            <label for="txt_password" class="form-label">Emergency Password *</label>
                                                                            <input type="password" class="form-control form-control-lg" id="txt_password" name="txt_password" placeholder="Enter Password" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_person1" class="form-label">Person 1 *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_person1" name="txt_person1" placeholder="Enter Name of Authorized person" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_relation1" class="form-label">Person 1 *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_relation1" name="txt_relation1" placeholder="Enter Relationship to child" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_person2" class="form-label">Person 2</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_person2" name="txt_person2" placeholder="Enter Name of Authorized person" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_relation2" class="form-label">Person 2</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_relation2" name="txt_relation2" placeholder="Enter Relationship to child" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box">
                                                                    <div class="col-sm-6">
                                                                        <div class="">
                                                                            <label for="txt_person3" class="form-label">Person 3</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_person3" name="txt_person3" placeholder="Enter Name of Authorized person" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="">
                                                                            <label for="txt_relation3" class="form-label">Person 3</label>
                                                                            <input type="text" class="form-control form-control-lg" id="txt_relation3" name="txt_relation3" placeholder="Enter Relationship to child" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab25">
                                                    <div class="row justify-content-center">
                                                        <div class="col-12">
                                                            <div class="kitba-checkout-form-main-space">
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_doctor_name" class="form-label">Has your child had any serious illnesses or injuries? *</label>
                                                                            <select class="form-select form-select-lg mb-3" name="illnesses" aria-label=".form-select-lg example" required>
                                                                                <option selected value="">Please Select</option>
                                                                                <option value="1">Yes</option>
                                                                                <option value="0">No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_illnesses" class="form-label">If yes - Please details</label>
                                                                            <input type="text" class="form-control form-control-lg" id="illnesses_details" name="illnesses_details" placeholder="Enter Details">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_immunization" class="form-label">Has your child completed an immunization program to date? *</label>
                                                                            <select class="form-select form-select-lg mb-3" name="immunization" aria-label=".form-select-lg example" required>
                                                                                <option selected value="">Please Select</option>
                                                                                <option value="1">Yes</option>
                                                                                <option value="0">No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_immunization" class="form-label">If yes - Please details</label>
                                                                            <input type="text" class="form-control form-control-lg" id="immunization_details" name="immunization_details" placeholder="Enter Details">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_allergies" class="form-label">Has your child any known allergies and medical conditions? *</label>
                                                                            <select class="form-select form-select-lg mb-3" name="allergies" aria-label=".form-select-lg example" required>
                                                                                <option selected value="">Please Select</option>
                                                                                <option value="1">Yes</option>
                                                                                <option value="0">No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_allergies" class="form-label">If yes - Please details</label>
                                                                            <input type="text" class="form-control form-control-lg" id="allergies_details" name="allergies_details" placeholder="Enter Details">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_special_needs" class="form-label">Does your child have any particular or special needs *</label>
                                                                            <select class="form-select form-select-lg mb-3" name="special_needs" aria-label=".form-select-lg example" required>
                                                                                <option selected value="">Please Select</option>
                                                                                <option value="1">Yes</option>
                                                                                <option value="0">No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="special_needs_details" class="form-label">If yes - Please details</label>
                                                                            <input type="text" class="form-control form-control-lg" id="special_needs_details" name="special_needs_details" placeholder="Enter Details">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_fears" class="form-label">Does your child have any fears? *</label>
                                                                            <select class="form-select form-select-lg mb-3" name="fears" aria-label=".form-select-lg example" required>
                                                                                <option selected value="">Please Select</option>
                                                                                <option value="1">Yes</option>
                                                                                <option value="2">No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="fears_details" class="form-label">If yes - Please details</label>
                                                                            <input type="text" class="form-control form-control-lg" id="fears_details" name="fears_details" placeholder="Enter Details">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="txt_drink" class="form-label">Does your child drink milk/eat dairy product? *</label>
                                                                            <select class="form-select form-select-lg mb-3" name="drink" aria-label=".form-select-lg example" required>
                                                                                <option selected value="">Please Select</option>
                                                                                <option value="1">Yes</option>
                                                                                <option value="2">No</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="drink_details" class="form-label">If yes - Please details</label>
                                                                            <input type="text" class="form-control form-control-lg" id="drink_details" name="drink_details" placeholder="Enter Details">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box">
                                                                    <div class="col-sm-6">
                                                                        <div>
                                                                            <label for="languages" class="form-label">Languages spoken at home *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="languages" name="languages" placeholder="Languages spoken at home" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div>
                                                                            <label for="religion" class="form-label">Please state child’s religion/culture * </label>
                                                                            <input type="text" class="form-control form-control-lg" id="religion" name="religion" placeholder="Enter Relationship to child" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab26">
                                                    <div class="row justify-content-center">
                                                        <div class="col-12">
                                                            <div class="kitba-checkout-form-main-space">
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-4 mb-3">
                                                                        <p>There is CCTV being recorded for safety and security purposes.I agree to mychild being recorded on the CCTV system for the above purposes.</p>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="mb-3">
                                                                            <label for="signature1" class="form-label">Signature *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="signature1" name="signature1" placeholder="Enter Signature" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="mb-3">
                                                                            <label for="date1" class="form-label">Date *</label>
                                                                            <input type="date" class="form-control form-control-lg" id="date1" name="date1" placeholder="Enter Date" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-4 mb-3">
                                                                        <p>Occasionally we may take the child away from the premises for a walk,to the mosque, leisure centre post box or the park.I give my permission for my child to take part in the seactivities</p>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="mb-3">
                                                                            <label for="signature2" class="form-label">Signature *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="signature2" name="signature2" placeholder="Enter Signature" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="mb-3">
                                                                            <label for="date2" class="form-label">Date *</label>
                                                                            <input type="date" class="form-control form-control-lg" id="date2" name="date2" placeholder="Enter Date" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-4 mb-3">
                                                                        <p>Photographs are used to track children’s learning, in newsletters,displays,websites,pre-school public ationsand local newspapers I give my permission for my child to be photographed for the above reasons</p>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="mb-3">
                                                                            <label for="signature3" class="form-label">Signature *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="signature3" name="signature3" placeholder="Enter Signature" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="mb-3">
                                                                            <label for="date3" class="form-label">Date *</label>
                                                                            <input type="date" class="form-control form-control-lg" id="date3" name="date3" placeholder="Enter Date" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-4 mb-3">
                                                                        <p>I give my permission for a trained first aider to administer first aid to mychild.</p>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="mb-3">
                                                                            <label for="signature4" class="form-label">Signature *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="signature4" name="signature4" placeholder="Enter Signature" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="mb-3">
                                                                            <label for="date4" class="form-label">Date *</label>
                                                                            <input type="date" class="form-control form-control-lg" id="date4" name="date4" placeholder="Enter Date" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <p>Any other information you think would be helpful for us to know about your child.</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="helpful_information" class="form-label">Other helpful information</label>
                                                                            <input type="text" class="form-control form-control-lg" id="helpful_information" name="helpful_information" placeholder="Enter Details">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box">
                                                                    <div class="col-sm-12">
                                                                        <p>Your child will be placed on the waiting list and contacted when a place becomes available.</p>
                                                                        <p class="mb-0">Thank you for telling us about your child, we look forward to your child joining us and enjoying their time at Dar ul Madinah Slough</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tab27">
                                                    <div class="row justify-content-center">
                                                        <div class="col-12">
                                                            <div class="kitba-checkout-form-main-space">
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-4 mb-3">
                                                                        <p>I confirm all the details completed in this form are true and accurate. I will inform Dar ul Madinah of any changes immediately.</p>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="mb-3">
                                                                            <label for="sign" class="form-label">Sign *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="sign" name="sign" placeholder="Enter Sign" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-4">
                                                                        <div class="mb-3">
                                                                            <label for="date5" class="form-label">Date *</label>
                                                                            <input type="date" class="form-control form-control-lg" id="date5" name="date5" placeholder="Enter Date" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="print_name" class="form-label">Print Name *</label>
                                                                            <input type="text" class="form-control form-control-lg" id="print_name" name="print_name" placeholder="Enter Print Name" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-6">
                                                                        <div class="mb-3">
                                                                            <label for="parent_career" class="form-label">Parent/Career</label>
                                                                            <input type="text" class="form-control form-control-lg" id="parent_career" name="parent_career" placeholder="Enter Parent/Career" required>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row g-sm-3 g-2 align-items-center input-box">
                                                                    <div class="col-sm-12">
                                                                        <p class="mb-0">Any information given to the pre-school as part of this application/registration form will be treated with the strictest of confidence. Any Data collected will be, fairly and lawfully processed, for limited purposes, adequate, relevant and not excessive, accurate, not kept longer than is necessary, processed in accordance with the data’s subjects rights, held securely and not transferred to other organizations unless required to do so by Ofsted, health and safety legislation or other legal obligations.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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