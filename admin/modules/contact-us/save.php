<?php
include "../../includes/header-min.php";
// echo $_GET['delete'];
// exit();
if (isset($_GET['delete'])) {
    $contact_id = validate_string($link,$_GET['contact_id']);
    
    $query = "DELETE FROM tbl_contacts WHERE contact_id = '$contact_id'";
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
