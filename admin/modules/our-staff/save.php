<?php
include "../../includes/header-min.php";
if (isset($_POST['add_edit'])) {
    $staff_id = validate_string($link, $_GET['staff_id']);
    extract($_POST);
    $staff_name = validate_string($link, $staff_name);
    $staff_title = validate_string($link, $staff_title);
    $staff_status = validate_string($link, $staff_status);
    $staff_featured = validate_string($link, $staff_featured);
    $staff_info = validate_string($link, $staff_info);
    $staff_info_2 = validate_string($link, $staff_info_2);
    $staff_info_3 = validate_string($link, $staff_info_3);

    if ($staff_id > 0) {
        $query = "UPDATE tbl_staff set staff_name='$staff_name', staff_status='$staff_status',staff_featured='$staff_featured', staff_title='$staff_title',staff_info='$staff_info',staff_info_2='$staff_info_2', staff_info_3='$staff_info_3', updated_by='$user_id', updated_on=NOW() WHERE `staff_id` = '$staff_id'";
    } else {
        $query = "INSERT INTO tbl_staff (staff_name,staff_status,staff_title,staff_featured,staff_info,staff_info_2,staff_info_3,added_on,added_by) VALUES('$staff_name', '$staff_status', '$staff_title','$staff_featured','$staff_info','$staff_info_2','$staff_info_3',NOW(),'$user_id')";
    }
    $chk = mysqli_query($link, $query);
    if ($chk) {
        if ($staff_id > 0) {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Staff Updated Successfully!";
            header('location:../our-staff/');
            exit();
        } else {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Staff Added Successfully!";
            header('location:../our-staff/');
            exit();
        }
    } else {
        $_SESSION['toast_type'] = "error";
        $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
        header('location:../our-staff/');
        exit();
    }
}
if (isset($_GET['delete'])) {
    $staff_id = validate_string($link, $_GET['staff_id']);
    $query = "DELETE FROM tbl_staff WHERE staff_id = '$staff_id'";
    $chk = mysqli_query($link, $query);
    if ($chk) {
        $_SESSION['toast_type'] = "success";
        $_SESSION['toast_msg'] = "Deleted Successfully!";
        header('location:../our-staff/');
        exit();
    } else {
        $_SESSION['toast_type'] = "error";
        $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
        header('location:../our-staff/');
        exit();
    }
}
                        