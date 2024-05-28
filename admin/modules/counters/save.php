<?php
include "../../includes/header-min.php";

$counter_id = validate_string($link, $_GET['counter_id']);

$counter_1_text = validate_string($link, $_POST['counter_1_text']);
$counter_1_num = validate_string($link, $_POST['counter_1_num']);

$counter_2_text = validate_string($link, $_POST['counter_2_text']);
$counter_2_num = validate_string($link, $_POST['counter_2_num']);

$counter_3_text = validate_string($link, $_POST['counter_3_text']);
$counter_3_num = validate_string($link, $_POST['counter_3_num']);

$counter_4_text = validate_string($link, $_POST['counter_4_text']);
$counter_4_num = validate_string($link, $_POST['counter_4_num']);

$query = "UPDATE tbl_counters set counter_1_text='$counter_1_text', counter_1_num='$counter_1_num', counter_2_text='$counter_2_text', counter_2_num='$counter_2_num', counter_3_text='$counter_3_text', counter_3_num='$counter_3_num', counter_4_text='$counter_4_text', counter_4_num='$counter_4_num', updated_by='$user_id', updated_on=NOW()  WHERE `counter_id` = '$counter_id'";
$chk = mysqli_query($link, $query);

if ($chk) {
    $_SESSION['toast_type'] = "success";
    $_SESSION['toast_msg'] = "Website Counter Updated Successfully!";
    header('location:index.php');
    exit();
} else {
    $_SESSION['toast_type'] = "error";
    $_SESSION['toast_msg'] = "Oops! Something Went Wrong on updating, Please try again";
    header('location:index.php');
    exit();
}
