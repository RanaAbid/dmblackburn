<?php
include "../../includes/header-min.php";
$storeFolder = '../../assets/uploads/school-ofsted-report/';
if (isset($_POST['add_edit'])) {
    $report_id = validate_string($link, $_GET['report_id']);
    extract($_POST);
    $report_name = validate_string($link, $report_name);
    
    if ($report_id > 0) {
        $query = "UPDATE tbl_school_ofsted_report set report_name='$report_name', updated_by='$user_id', updated_on=NOW() WHERE `report_id` = '$report_id'";
        $chk = mysqli_query($link,$query);
        $last_id = $report_id;
    } else {
        $query = "INSERT INTO tbl_school_ofsted_report (report_name, report_status, added_on,added_by) VALUES('$report_name', '1', NOW(),'$user_id')";
        $chk = mysqli_query($link,$query);
        $last_id = mysqli_insert_id($link);
    }

    if ($chk) {
        if(is_uploaded_file($_FILES['report_file']['tmp_name'])){
            //create name of file
            $file_name = $last_id.rand()."_ofsted_report";
            //folder path to save the file
            $path_to_save = $storeFolder;
            //upload the file in above path folder
            $res = upload_file($_FILES['report_file'], $file_name, $path_to_save, "report_file", "report_id", $last_id, "tbl_school_ofsted_report", $link);
            if($res=="err=ok"){
            } else {
                $_SESSION['toast_type'] = "error";
                $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
                header('location:../school-ofsted-report/');
                exit();
            }
        }

        if ($report_id > 0) {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Report Updated Successfully!";
            header('location:../school-ofsted-report/');
            exit();
        } else {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Report Added Successfully!";
            header('location:../school-ofsted-report/');
            exit();
        }
    } else {
        $_SESSION['toast_type'] = "error";
        $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
        header('location:../school-ofsted-report/');
        exit();
    }
}

if (isset($_GET['delete'])) {
    $report_id = validate_string($link,$_GET['report_id']);
    
    unlink( $storeFolder."/".$_GET['imgname'] );
    $query = "DELETE FROM tbl_school_ofsted_report WHERE report_id = '$report_id'";
    
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
                        