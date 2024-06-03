<?php
include "../../includes/header-min.php";
$storeFolder = '../../assets/uploads/parents-info/';
if (isset($_POST['add_edit'])) {
    $parents_id = validate_string($link,$_GET['parents_id']);
    extract($_POST);

    $top_desc = validate_ckeditor_data($link,$top_desc);
    $mid_desc = validate_ckeditor_data($link,$mid_desc);
    $end_desc = validate_ckeditor_data($link,$end_desc);
    
    if ($parents_id > 0) {
        $query="UPDATE tbl_parents_info set `top_desc`='$top_desc', `mid_desc`='$mid_desc', `end_desc`='$end_desc', updated_on=NOW(), updated_by=$user_id WHERE `parents_id` = '$parents_id'";
        $chk = mysqli_query($link,$query);
        $last_id = $parents_id;
    } else {
        $query = "INSERT INTO tbl_parents_info (`top_desc`, `mid_desc`, `end_desc`, `added_on`, `added_by`) VALUES('$top_desc', '$mid_desc', '$end_desc', NOW(), '$user_id')";       
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
            $res = upload_file($_FILES['top_img'], $file_name, $path_to_save, "top_img", "parents_id", $last_id, "tbl_parents_info", $link);
            if($res=="err=ok"){
            } else {
                $_SESSION['toast_type'] = "error";
                $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
                header('location:../parents-info/');
                exit();
            }
        }

        if(is_uploaded_file($_FILES['mid_img']['tmp_name'])){
            //create name of file
            $file_name = $last_id.rand()."_mid_banner";
            //folder path to save the file
            $path_to_save = $storeFolder;
            //upload the file in above path folder
            $res = upload_file($_FILES['mid_img'], $file_name, $path_to_save, "mid_img", "parents_id", $last_id, "tbl_parents_info", $link);
            if($res=="err=ok"){
            } else {
                $_SESSION['toast_type'] = "error";
                $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
                header('location:../parents-info/');
                exit();
            }
        }

        if(is_uploaded_file($_FILES['end_img']['tmp_name'])){
            //create name of file
            $file_name = $last_id.rand()."_end_banner";
            //folder path to save the file
            $path_to_save = $storeFolder;
            //upload the file in above path folder
            $res = upload_file($_FILES['end_img'], $file_name, $path_to_save, "end_img", "parents_id", $last_id, "tbl_parents_info", $link);
            if($res=="err=ok"){
            } else {
                $_SESSION['toast_type'] = "error";
                $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
                header('location:../parents-info/');
                exit();
            }
        }

        if ($parents_id > 0) {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Data Updated Successfully!";
            header('location:../parents-info/');
            exit();
        } else {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Data Added Successfully!";
            header('location:../parents-info/');
            exit();
        }
    } else {
        $_SESSION['toast_type'] = "error";
        $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
        header('location:../parents-info/');
        exit();
    }
}