<?php include("../includes/header.php"); ?>
<style>
    .admission-panel {
        box-shadow: rgb(16 147 86 / 53%) 0px 5px 15px;
        border: 1px solid #109356;
    }

    .form-control:focus {
        color: #055530;
        background-color: #fff;
        border-color: #046d3b;
        outline: 0;
        box-shadow: 0 0 0 .25rem rgb(36 197 122 / 51%);
    }

    .form-select:focus {
        border-color: #046d3b;
        outline: 0;
        box-shadow: 0 0 0 .25rem rgb(36 197 122 / 51%);
    }
</style>
<!-- banner begin -->
<div class="banner breadcrumb-banner pt-190 pb-200">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="banner-txt">
                    <h1 class="breadcrumb-title">Admission Form</h1>
                    <div class="breadcrumb-txt">
                        <a href="index.html">Home</a>
                        <span class="dvdr"><i class="icofont-simple-right"></i></span>
                        <span>Admission Form</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->
<div class="checkout pt-120 pb-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="section-heading text-center mb-70">
                    <h2 class="section-title mt--8 mb-25">Admission Form</h2>
                </div>
            </div>
        </div>
        <form class="checkout-item-wrapp" action="index.html">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="panel admission-panel mb-50">
                        <div class="panel-heading d-flex align-items-center justify-content-between px-40 bg-light-green">
                            <h3 class="panel-heading-txt-check mb-0 text-white">Child's Details</h3>
                        </div>
                        <div class="panel-body-checkout">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="kitba-checkout-form-main-space">
                                        <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="txt_date" class="form-label">Date of Birth *</label>
                                                    <input type="date" class="form-control form-control-lg" id="txt_date" id="txt_date" placeholder="Date of Birth" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Gender *</label>
                                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required>
                                                        <option selected>Select Gender</option>
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
                                                    <input type="text" class="form-control form-control-lg" id="txt_f_name" id="txt_f_name" placeholder="Enter First Name" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="txt_surname" class="form-label">Surname *</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_surname" id="txt_surname" placeholder="Enter Surname" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                            <div class="col-sm-12">
                                                <div class="mb-3">
                                                    <label for="txt_address" class="form-label">Address *</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_address" id="txt_address" placeholder="Enter Address" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="txt_postcode" class="form-label">Postcode *</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_postcode" id="txt_postcode" placeholder="Enter PostCode" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="txt_choice_name" class="form-label">Preferred choice of name if any</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_choice_name" id="txt_choice_name" placeholder="Enter choice of name if any">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-sm-3 g-2 align-items-center input-box">
                                            <div class="col-sm-12">
                                                <div class="">
                                                    <label for="exampleFormControlInput1" class="form-label">Application For *</label>
                                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required>
                                                        <option selected>Please select standard</option>
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
                        <div class="panel-heading d-flex align-items-center justify-content-between px-40 bg-light-green">
                            <h3 class="panel-heading-txt-check mb-0 text-white">Name of First Parent/Guardian Living at Home Address Above</h3>
                        </div>
                        <div class="panel-body-checkout">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="kitba-checkout-form-main-space">
                                        <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                            <div class="col-sm-4">
                                                <div class="mb-3">
                                                    <label for="txt_title" class="form-label">Title *</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_title" id="txt_title" placeholder="Mr., Mrs. , etc." required>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="mb-3">
                                                    <label for="txt_guardian_name" class="form-label">First Name *</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_guardian_name" id="txt_guardian_name" placeholder="Enter Name of First Parent/Guardian" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="mb-3">
                                                    <label for="txt_guardian_name" class="form-label">Surname *</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_guardian_name" id="txt_guardian_name" placeholder="Enter Surname" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="txt_relation_child" class="form-label">Relationship to Child  *</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_relation_child" id="txt_relation_child" placeholder="Relation" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Parental Responsibility *</label>
                                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required>
                                                        <option selected>Parental Responsibility</option>
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
                                                    <input type="text" class="form-control form-control-lg" id="txt_telephone" id="txt_telephone" placeholder="Enter Home Telephone Number" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="txt_mobile" class="form-label">Mobile No.</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_mobile" id="txt_mobile" placeholder="Enter Mobile No." required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="txt_work_email" class="form-label">Email</label>
                                                    <input type="email" class="form-control form-control-lg" id="txt_work_email" id="txt_work_email" placeholder="Enter Email" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="txt_work_telephone" class="form-label">Work Telephone Number *</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_work_telephone" id="txt_work_telephone" placeholder="Enter Work Telephone Number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-sm-3 g-2 align-items-center input-box">
                                            <div class="col-sm-12">
                                                <div class="">
                                                    <label for="txt_work_place" class="form-label">Work Place *</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_work_place" id="txt_work_place" placeholder="Enter Work Place" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-heading d-flex align-items-center justify-content-between px-40 bg-light-green">
                            <h3 class="panel-heading-txt-check mb-0 text-white">Name of Second Parent/Guardian</h3>
                        </div>
                        <div class="panel-body-checkout">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="kitba-checkout-form-main-space">
                                        <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                            <div class="col-sm-4">
                                                <div class="mb-3">
                                                    <label for="txt_second_title" class="form-label">Title *</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_second_title" id="txt_second_title" placeholder="Mr., Mrs. , etc." required>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="mb-3">
                                                    <label for="txt_secondParent_name" class="form-label">First Name *</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_secondParent_name" id="txt_secondParent_name" placeholder="Enter First Name" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="mb-3">
                                                    <label for="txt_secondParent_surname" class="form-label">Surname *</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_secondParent_surname" id="txt_secondParent_surname" placeholder="Enter Surname" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="txt_secondParentrelation_child" class="form-label">Relationship to Child  *</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_secondParentrelation_child" id="txt_secondParentrelation_child" placeholder="Relation" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Parental Responsibility? *</label>
                                                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" required>
                                                        <option selected>Parental Responsibility</option>
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
                                                    <input type="text" class="form-control form-control-lg" id="txt_second_mobile" id="txt_second_mobile" placeholder="Enter Mobile Number">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="txt_second_telephone" class="form-label">Work Telephone Number</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_second_telephone" id="txt_second_telephone" placeholder="Enter Telephone Number">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="txt_second_work" class="form-label">Work Place</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_second_work" id="txt_work_email" placeholder="Enter Work Place">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="txt_second_address" class="form-label">Address (if different)</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_second_address" id="txt_second_address" placeholder="Enter Address (if different)">
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
                        <div class="panel-heading d-flex align-items-center justify-content-between px-40 bg-light-green">
                            <h3 class="panel-heading-txt-check mb-0 text-white">Emergency Contact Details</h3>
                        </div>
                        <div class="panel-body-checkout">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="kitba-checkout-form-main-space">
                                        <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="txt_doctor_name" class="form-label">Name of Doctor *</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_doctor_name" placeholder="Name of Doctor" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="txt_doctor_number" class="form-label">Telephone Number *</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_doctor_number" id="txt_doctor_number" placeholder="Enter Telephone Number" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="txt_emergency_address" class="form-label">Practice address *</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_emergency_address" id="txt_emergency_address" placeholder="Practice address" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="txt_emergency_PostCode" class="form-label">Post Code *</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_emergency_PostCode" id="txt_emergency_PostCode" placeholder="Post Code" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="txt_emergency_name" class="form-label">Name(s) *</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_emergency_name" id="txt_emergency_name" placeholder="Enter Name(s)" required>
                                                    <small>Other local contacts in case of emergency or illness at school</small>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="txt_emergency_no" class="form-label">Telephone Number</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_emergency_no" id="txt_emergency_no" placeholder="Enter Telephone Number" required>
                                                    <small>Telephone Number</small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                            <div class="col-sm-12">
                                                <div class="mb-3">
                                                    <label for="txt_password" class="form-label">Emergency Password *</label>
                                                    <input type="password" class="form-control form-control-lg" id="txt_password" id="txt_password" placeholder="Enter Password" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="txt_person1" class="form-label">Person 1 *</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_person1" id="txt_person1" placeholder="Enter Name of Authorized person" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="txt_relation1" class="form-label">Person 1 *</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_relation1" id="txt_relation1" placeholder="Enter Relationship to child" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-sm-3 g-2 align-items-center input-box mb-20">
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="txt_person2" class="form-label">Person 2</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_person2" id="txt_person2" placeholder="Enter Name of Authorized person" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mb-3">
                                                    <label for="txt_relation2" class="form-label">Person 2</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_relation2" id="txt_relation2" placeholder="Enter Relationship to child" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-sm-3 g-2 align-items-center input-box">
                                            <div class="col-sm-6">
                                                <div class="">
                                                    <label for="txt_person3" class="form-label">Person 3</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_person3" id="txt_person3" placeholder="Enter Name of Authorized person" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="">
                                                    <label for="txt_relation3" class="form-label">Person 3</label>
                                                    <input type="text" class="form-control form-control-lg" id="txt_relation3" id="txt_relation3" placeholder="Enter Relationship to child" required>
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
        </form>
    </div>
</div>
<?php include("../includes/footer.php"); ?>