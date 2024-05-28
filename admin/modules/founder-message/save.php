<?php
include "../../includes/header-min.php";
$storeFolder = '../../assets/uploads/parents-feedback/';
if (isset($_POST['add_edit'])) {
    $feedback_id = validate_string($link,$_GET['feedback_id']);
    extract($_POST);

    $name = validate_string($link,$name);
    $title = validate_string($link,$title);
    $feedback_detail = validate_ckeditor_data($link,$feedback_detail);
    
    if ($feedback_id > 0) {
        $query="UPDATE tbl_parents_feedback set `name`='$name', `title`='$title', `feedback_detail`='$feedback_detail', updated_on=NOW(), updated_by=$user_id WHERE `feedback_id` = '$feedback_id'";
        $chk = mysqli_query($link,$query);
    } else {
        $query = "INSERT INTO tbl_parents_feedback (`name`, `title`, `feedback_detail`, `added_on`, `added_by`) VALUES('$name', '$title', '$feedback_detail', NOW(),'$user_id')";       
        $chk = mysqli_query($link,$query);
    }
    
    if($chk) {
        if ($feedback_id > 0) {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Message Updated Successfully!";
            header('location:../founder-message/');
            exit();
        } else {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Message Added Successfully!";
            header('location:../founder-message/');
            exit();
        }
    } else {
        $_SESSION['toast_type'] = "error";
        $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
        header('location:../founder-message/');
        exit();
    }
}
if (isset($_GET['delete'])) {
    $feedback_id = validate_string($link,$_GET['feedback_id']);
    $query = "DELETE FROM tbl_parents_feedback WHERE feedback_id = '$feedback_id'";
    $chk = mysqli_query($link,$query);
    if ($chk) {
        $_SESSION['toast_type'] = "success";
        $_SESSION['toast_msg'] = "Deleted Successfully!";
        header('location:index.php');
        exit();
    } else {
        $_SESSION['toast_type'] = "error";
        $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
        header('location:index.php');
        exit();
    }
}
