<?php
include "../../includes/header-min.php";
$storeFolder = '../../assets/uploads/about-school/';
if (isset($_POST['add_edit'])) {
    $school_id = validate_string($link,$_GET['school_id']);
    extract($_POST);

    $top_desc = validate_ckeditor_data($link,$top_desc);
    $end_desc = validate_ckeditor_data($link,$end_desc);
    
    if ($school_id > 0) {
        $query="UPDATE tbl_about_school set `top_desc`='$top_desc', `end_desc`='$end_desc', updated_on=NOW(), updated_by=$user_id WHERE `school_id` = '$school_id'";
        $chk = mysqli_query($link,$query);
        $last_id = $school_id;
    } else {
        $query = "INSERT INTO tbl_about_school (`top_desc`, `end_desc`, `added_on`, `added_by`) VALUES('$top_desc', '$end_desc', NOW(), '$user_id')";       
        $chk = mysqli_query($link,$query);
        $last_id = mysqli_insert_id($link);
    }
    
    if($chk) {
        if(is_uploaded_file($_FILES['top_img']['tmp_name'])){
            //create name of file
            $file_name = $last_id.rand()."_top_banner";
            //folder path to save the file
            $path_to_save = $storeFolder;
            //upload the file in above path folder
            $res = upload_file($_FILES['top_img'], $file_name, $path_to_save, "top_img", "school_id", $last_id, "tbl_about_school", $link);
            if($res=="err=ok"){
            } else {
                $_SESSION['toast_type'] = "error";
                $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
                header('location:../about-school/');
                exit();
            }
        }

        if(is_uploaded_file($_FILES['end_img']['tmp_name'])){
            //create name of file
            $file_name = $last_id.rand()."_end_banner";
            //folder path to save the file
            $path_to_save = $storeFolder;
            //upload the file in above path folder
            $res = upload_file($_FILES['end_img'], $file_name, $path_to_save, "end_img", "school_id", $last_id, "tbl_about_school", $link);
            if($res=="err=ok"){
            } else {
                $_SESSION['toast_type'] = "error";
                $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
                header('location:../about-school/');
                exit();
            }
        }

        if ($school_id > 0) {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Data Updated Successfully!";
            header('location:../about-school/');
            exit();
        } else {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Data Added Successfully!";
            header('location:../about-school/');
            exit();
        }
    } else {
        $_SESSION['toast_type'] = "error";
        $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
        header('location:../about-school/');
        exit();
    }
}