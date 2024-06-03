<?php
include("../../includes/header-min.php");

// Get form data
$dob = validate_string($link, $_POST['txt_date']);
$gender = validate_string($link, $_POST['gender']);
$first_name = validate_string($link, $_POST['txt_f_name']);
$surname = validate_string($link, $_POST['txt_surname']);
$address = validate_string($link, $_POST['txt_address']);
$postcode = validate_string($link, $_POST['txt_postcode']);
$preferred_name = isset($_POST['txt_choice_name']) ? validate_string($link, $_POST['txt_choice_name']) : NULL;
$application_for = validate_string($link, $_POST['application_for']);
$guardian_title = validate_string($link, $_POST['txt_title']);
$guardian_first_name = validate_string($link, $_POST['txt_guardian_name']);
$guardian_surname = validate_string($link, $_POST['txt_guardian_surname']);
$relation_to_child = validate_string($link, $_POST['txt_relation_child']);
$parental_responsibility = validate_string($link, $_POST['parental_responsibility']);
$home_telephone = validate_string($link, $_POST['txt_telephone']);
$mobile_number = isset($_POST['txt_mobile']) ? validate_string($link, $_POST['txt_mobile']) : NULL;
$email = isset($_POST['txt_work_email']) ? validate_string($link, $_POST['txt_work_email']) : NULL;
$work_telephone = validate_string($link, $_POST['txt_work_telephone']);
$work_place = validate_string($link, $_POST['txt_work_place']);

// Escape user inputs for security

$txt_second_title = validate_string($link, $_POST['txt_second_title']);
$txt_secondParent_name = validate_string($link, $_POST['txt_secondParent_name']);
$txt_secondParent_surname = validate_string($link, $_POST['txt_secondParent_surname']);
$txt_second_parent_relation_child = validate_string($link, $_POST['txt_second_parent_relation_child']);
$parental_responsibility2 = validate_string($link, $_POST['parental_responsibility2']);
$txt_second_mobile = validate_string($link, $_POST['txt_second_mobile']);
$txt_second_telephone = validate_string($link, $_POST['txt_second_telephone']);
$txt_second_work = validate_string($link, $_POST['txt_second_work']);
$txt_second_address = validate_string($link, $_POST['txt_second_address']);
$txt_doctor_name = validate_string($link, $_POST['txt_doctor_name']);
$txt_doctor_number = validate_string($link, $_POST['txt_doctor_number']);
$txt_emergency_address = validate_string($link, $_POST['txt_emergency_address']);
$txt_emergency_PostCode = validate_string($link, $_POST['txt_emergency_PostCode']);
$txt_emergency_name = validate_string($link, $_POST['txt_emergency_name']);
$txt_emergency_no = validate_string($link, $_POST['txt_emergency_no']);
$txt_password = validate_string($link, $_POST['txt_password']);
$txt_person1 = validate_string($link, $_POST['txt_person1']);
$txt_relation1 = validate_string($link, $_POST['txt_relation1']);
$txt_person2 = validate_string($link, $_POST['txt_person2']);
$txt_relation2 = validate_string($link, $_POST['txt_relation2']);
$txt_person3 = validate_string($link, $_POST['txt_person3']);
$txt_relation3 = validate_string($link, $_POST['txt_relation3']);


$illnesses = validate_string($link, $_POST['illnesses']);
$illnesses_details = validate_string($link, $_POST['illnesses_details']);
$immunization = validate_string($link, $_POST['immunization']);
$immunization_details = validate_string($link, $_POST['immunization_details']);
$allergies = validate_string($link, $_POST['allergies']);
$allergies_details = validate_string($link, $_POST['allergies_details']);
$special_needs = validate_string($link, $_POST['special_needs']);
$special_needs_details = validate_string($link, $_POST['special_needs_details']);
$fears = validate_string($link, $_POST['fears']);
$fears_details = validate_string($link, $_POST['fears_details']);
$drink = validate_string($link, $_POST['drink']);
$drink_details = validate_string($link, $_POST['drink_details']);
$languages = validate_string($link, $_POST['languages']);
$religion = validate_string($link, $_POST['religion']);
$signature1 = validate_string($link, $_POST['signature1']);
$date1 = validate_string($link, $_POST['date1']);
$signature2 = validate_string($link, $_POST['signature2']);
$date2 = validate_string($link, $_POST['date2']);
$signature3 = validate_string($link, $_POST['signature3']);
$date3 = validate_string($link, $_POST['date3']);
$signature4 = validate_string($link, $_POST['signature4']);
$date4 = validate_string($link, $_POST['date4']);
$helpful_information = validate_string($link, $_POST['helpful_information']);
$sign = validate_string($link, $_POST['sign']);
$date5 = validate_string($link, $_POST['date5']);
$print_name = validate_string($link, $_POST['print_name']);
$parent_career = validate_string($link, $_POST['parent_career']);

// Create SQL query
$sql = "INSERT INTO tbl_admission_form (dob,gender,first_name,surname,`address`,postcode,preferred_name,application_for,guardian_title,guardian_first_name,guardian_surname,relation_to_child,parental_responsibility,home_telephone,mobile_number,email,work_telephone,work_place,second_title,secondParent_name,secondParent_surname,txt_second_parent_relation_child,parental_responsibility2,second_mobile,second_telephone,second_work,second_address,doctor_name,doctor_number,emergency_address,emergency_PostCode,emergency_name,emergency_no,emergency_password,person1,relation1,person2,relation2,person3,relation3,illnesses,illnesses_details,immunization,immunization_details,allergies,allergies_details,special_needs,special_needs_details,fears,fears_details,drink,drink_details,languages,religion,signature1,date1,signature2,date2,signature3,date3,signature4,date4,helpful_information,sign,date5,print_name,parent_career) VALUES ('$dob','$gender','$first_name','$surname','$address','$postcode','$preferred_name','$application_for','$guardian_title','$guardian_first_name','$guardian_surname','$relation_to_child','$parental_responsibility','$home_telephone','$mobile_number','$email','$work_telephone','$work_place','$txt_second_title','$txt_secondParent_name','$txt_secondParent_surname','$txt_second_parent_relation_child','$parental_responsibility2','$txt_second_mobile','$txt_second_telephone','$txt_second_work','$txt_second_address','$txt_doctor_name','$txt_doctor_number','$txt_emergency_address','$txt_emergency_PostCode','$txt_emergency_name','$txt_emergency_no','$txt_password','$txt_person1','$txt_relation1','$txt_person2','$txt_relation2','$txt_person3','$txt_relation3','$illnesses','$illnesses_details','$immunization','$immunization_details','$allergies','$allergies_details','$special_needs','$special_needs_details','$fears','$fears_details','$drink','$drink_details','$languages','$religion','$signature1','$date1','$signature2','$date2','$signature3','$date3','$signature4','$date4','$helpful_information','$sign','$date5','$print_name','$parent_career')";
$chk = mysqli_query($link, $sql);
if ($chk) {
    $_SESSION['toast_type'] = "success";
    $_SESSION['toast_msg'] = "Added Successfully!";
    header('location:index.php');
    exit();
} else {
    $_SESSION['toast_type'] = "error";
    $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
    header('location:index.php');
    exit();
}
?>