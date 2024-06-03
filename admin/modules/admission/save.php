<?php
include "../../includes/header-min.php";
$storeFolder = '../../assets/uploads/admission/';
if (isset($_POST['add_edit'])) {
    $admission_id = validate_string($link,$_GET['admission_id']);
    extract($_POST);

    $nursery_desc = validate_ckeditor_data($link,$nursery_desc);
    $school_desc = validate_ckeditor_data($link,$school_desc);
    $funding_desc = validate_ckeditor_data($link,$funding_desc);
    
    if ($admission_id > 0) {
        $query="UPDATE tbl_admission set `nursery_desc`='$nursery_desc', `school_desc`='$school_desc', `funding_desc`='$funding_desc', updated_on=NOW(), updated_by=$user_id WHERE `admission_id` = '$admission_id'";
        $chk = mysqli_query($link,$query);
        $last_id = $admission_id;
    } else {
        $query = "INSERT INTO tbl_admission (`nursery_desc`, `school_desc`, `funding_desc`, `added_on`, `added_by`) VALUES('$nursery_desc', '$school_desc', '$funding_desc', NOW(), '$user_id')";       
        $chk = mysqli_query($link,$query);
        $last_id = mysqli_insert_id($link);
    }
    
    if($chk) {
        if(is_uploaded_file($_FILES['nursery_img']['tmp_name'])){
            //create name of file
            $file_name = $last_id.rand()."_nursery_banner";
            //folder path to save the file
            $path_to_save = $storeFolder;
            //upload the file in above path folder
            $res = upload_file($_FILES['nursery_img'], $file_name, $path_to_save, "nursery_img", "admission_id", $last_id, "tbl_admission", $link);
            if($res=="err=ok"){
            } else {
                $_SESSION['toast_type'] = "error";
                $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
                header('location:../admission/');
                exit();
            }
        }

        if(is_uploaded_file($_FILES['school_img']['tmp_name'])){
            //create name of file
            $file_name = $last_id.rand()."_school_banner";
            //folder path to save the file
            $path_to_save = $storeFolder;
            //upload the file in above path folder
            $res = upload_file($_FILES['school_img'], $file_name, $path_to_save, "school_img", "admission_id", $last_id, "tbl_admission", $link);
            if($res=="err=ok"){
            } else {
                $_SESSION['toast_type'] = "error";
                $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
                header('location:../admission/');
                exit();
            }
        }

        if(is_uploaded_file($_FILES['funding_img']['tmp_name'])){
            //create name of file
            $file_name = $last_id.rand()."_funding_banner";
            //folder path to save the file
            $path_to_save = $storeFolder;
            //upload the file in above path folder
            $res = upload_file($_FILES['funding_img'], $file_name, $path_to_save, "funding_img", "admission_id", $last_id, "tbl_admission", $link);
            if($res=="err=ok"){
            } else {
                $_SESSION['toast_type'] = "error";
                $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
                header('location:../admission/');
                exit();
            }
        }

        if ($admission_id > 0) {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Data Updated Successfully!";
            header('location:../admission/');
            exit();
        } else {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Data Added Successfully!";
            header('location:../admission/');
            exit();
        }
    } else {
        $_SESSION['toast_type'] = "error";
        $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
        header('location:../admission/');
        exit();
    }
}