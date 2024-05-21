<?php
include "../../includes/header-min.php";

if (isset($_GET['change_status'])) {
  $id = validate_string($link, $_GET['id']);
  $status = validate_string($link, $_GET['status']);
  if ($status == '1') {
    $status = '0';
  } else {
    $status = '1';
  }
  $query = "UPDATE tbl_media SET media_status='$status' WHERE id = '$id'";
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
