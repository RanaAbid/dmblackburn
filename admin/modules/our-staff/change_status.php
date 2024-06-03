<?php
include "../../includes/header-min.php";
if (isset($_GET['change_status'])) {
  $staff_id = validate_string($link, $_GET['staff_id']);
  $status = validate_string($link, $_GET['status']);
  if ($status == '1') {
    $status = '0';
  } else {
    $status = '1';
  }
  $query = "UPDATE tbl_staff SET staff_status='$status' WHERE staff_id = '$staff_id'";
  $chk = mysqli_query($link, $query);
  if ($chk) {
    $_SESSION['toast_type'] = "success";
    $_SESSION['toast_msg'] = "Status Updated Successfully!";
    header('location:index.php');
    exit();
  } else {
    $_SESSION['toast_type'] = "error";
    $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
    header('location:index.php');
    exit();
  }
}
if (isset($_GET['change_feature'])) {
  $staff_id = validate_string($link, $_GET['staff_id']);
  $featured = validate_string($link, $_GET['featured']);
  if ($featured == '1') {
    $featured = '0';
  } else {
    $featured = '1';
  }
  $query = "UPDATE tbl_staff SET staff_featured='$featured' WHERE staff_id = '$staff_id'";
  $chk = mysqli_query($link, $query);
  if ($chk) {
    $_SESSION['toast_type'] = "success";
    $_SESSION['toast_msg'] = "Featured Updated Successfully!";
    header('location:index.php');
    exit();
  } else {
    $_SESSION['toast_type'] = "error";
    $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
    header('location:index.php');
    exit();
  }
}
