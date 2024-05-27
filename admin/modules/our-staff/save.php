<?php
include "../../includes/header-min.php";
if (isset($_POST['add_edit'])) {
    $id = validate_string($link,$_GET['id']);
    extract($_POST);
    $department_title = validate_string($link,$department_title);
    $department_description = validate_string($link,$department_description);
    $department_status = validate_string($link,$department_status);
    $department_featured = validate_string($link,$department_featured);
    $department_read_more = validate_string($link,$department_read_more);

    if ($id > 0) {
         $query="UPDATE tbl_department set department_title='$department_title', department_status='$department_status',department_featured='$department_featured', department_description='$department_description',department_read_more='$department_read_more',updated_by='$user_id', updated_on=NOW() WHERE `department_id` = '$id'";
    } else {
         $query = "INSERT INTO tbl_department (department_title,department_status,department_description,department_featured,department_read_more,added_on,added_by) VALUES('$department_title', '$department_status', '$department_description','$department_featured','$department_read_more',NOW(),'$user_id')";       
    }
    $chk = mysqli_query($link,$query);
    if($chk) {
        if ($id > 0) {
            $_SESSION['toast_type'] = "success";
			$_SESSION['toast_msg'] = "Department Updated Successfully!";
			header('location:../our-departments/');
			exit();
        } else {
		    $_SESSION['toast_type'] = "success";
			$_SESSION['toast_msg'] = "Department Added Successfully!";
			header('location:../our-departments/');
			exit();
        }
	} else {
        $_SESSION['toast_type'] = "error";
        $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
        header('location:../our-departments/');
        exit();
    }
}
if (isset($_GET['delete'])) {
    $id = validate_string($link,$_GET['id']);
    $query = "DELETE FROM tbl_department WHERE department_id = '$id'";
    $chk = mysqli_query($link,$query);
    if ($chk) {
        $_SESSION['toast_type'] = "success";
        $_SESSION['toast_msg'] = "Deleted Successfully!";
        header('location:../our-departments/');
        exit();
    } else {
        $_SESSION['toast_type'] = "error";
        $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
        header('location:../our-departments/');
        exit();
    }
}
?>