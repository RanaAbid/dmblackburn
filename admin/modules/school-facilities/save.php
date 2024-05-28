<?php
include "../../includes/header-min.php";
$storeFolder = '../../assets/uploads/school-facilities/';
if (isset($_POST['add_edit'])) {
    $facility_id = validate_string($link,$_GET['facility_id']);
    extract($_POST);

    $facility_name = validate_string($link,$facility_name);
    $facility_detail = validate_ckeditor_data($link,$facility_detail);
    
    if ($facility_id > 0) {
        $query="UPDATE tbl_school_facilities set `facility_name`='$facility_name', `facility_detail`='$facility_detail', updated_on=NOW(), updated_by=$user_id WHERE `facility_id` = '$facility_id'";
        $chk = mysqli_query($link,$query);
        $last_id = $facility_id;
    } else {
        $query = "INSERT INTO tbl_school_facilities (`facility_name`, `facility_detail`, `added_on`, `added_by`) VALUES('$facility_name', '$facility_detail', NOW(),'$user_id')";       
        $chk = mysqli_query($link,$query);
        $last_id = mysqli_insert_id($link);
    }
    
    if($chk) {
        if(is_uploaded_file($_FILES['facility_img']['tmp_name'])){
            //create name of file
            $file_name = $last_id.rand()."_facility_banner";
            //folder path to save the file
            $path_to_save = $storeFolder;
            //upload the file in above path folder
            $res = upload_file($_FILES['facility_img'], $file_name, $path_to_save, "facility_img", "facility_id", $last_id, "tbl_school_facilities", $link);
            if($res=="err=ok"){
            } else {
                $_SESSION['toast_type'] = "error";
                $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
                header('location:../school-facilities/');
                exit();
            }
        }

        if ($facility_id > 0) {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Facility Updated Successfully!";
            header('location:../school-facilities/');
            exit();
        } else {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Facility Added Successfully!";
            header('location:../school-facilities/');
            exit();
        }
    } else {
        $_SESSION['toast_type'] = "error";
        $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
        header('location:../school-facilities/');
        exit();
    }
}
if (isset($_GET['delete'])) {
    $facility_id = validate_string($link,$_GET['facility_id']);
    
    unlink( $storeFolder."/".$_GET['imgname'] );
    
    $query = "DELETE FROM tbl_school_facilities WHERE facility_id = '$facility_id'";
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
