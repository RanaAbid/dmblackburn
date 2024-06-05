<?php
include("../includes/header-min.php");
// Get form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$message_subject = $_POST['message_subject'];
$message = $_POST['message'];

// Insert data into database
$sql = "INSERT INTO tbl_contacts (first_name, last_name, email, phone_number, `message`) 
        VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$message')";

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
