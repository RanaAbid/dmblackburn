<?php
include "../../includes/header-min.php";
$storeFolder = '../../assets/uploads/welcome-section/';
if (isset($_POST['add_edit'])) {
    $welcome_id = validate_string($link,$_GET['welcome_id']);
    extract($_POST);

    $org_name = validate_string($link,$org_name);
    $short_desc = validate_ckeditor_data($link,$short_desc);
    
    if ($welcome_id > 0) {
        $query="UPDATE tbl_welcome_section set `org_name`='$org_name', `short_desc`='$short_desc', updated_on=NOW(), updated_by=$user_id WHERE `welcome_id` = '$welcome_id'";
        $chk = mysqli_query($link,$query);
        $last_id = $welcome_id;
    } else {
        $query = "INSERT INTO tbl_welcome_section (`org_name`, `short_desc`, `added_on`, `added_by`) VALUES('$org_name', '$short_desc', NOW(),'$user_id')";       
        $chk = mysqli_query($link,$query);
        $last_id = mysqli_insert_id($link);
    }
    
    if($chk) {
        if(is_uploaded_file($_FILES['welcome_img']['tmp_name'])){
            //create name of file
            $file_name = $last_id.rand()."_welcome_banner";
            //folder path to save the file
            $path_to_save = $storeFolder;
            //upload the file in above path folder
            $res = upload_file($_FILES['welcome_img'], $file_name, $path_to_save, "welcome_img", "welcome_id", $last_id, "tbl_welcome_section", $link);
            if($res=="err=ok"){
            } else {
                $_SESSION['toast_type'] = "error";
                $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
                header('location:../welcome-section/');
                exit();
            }
        }

        if ($welcome_id > 0) {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Data Updated Successfully!";
            header('location:../welcome-section/');
            exit();
        } else {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Data Added Successfully!";
            header('location:../welcome-section/');
            exit();
        }
    } else {
        $_SESSION['toast_type'] = "error";
        $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
        header('location:../welcome-section/');
        exit();
    }
}
if (isset($_GET['delete'])) {
    $value_id = validate_string($link,$_GET['value_id']);
    
    unlink( $storeFolder."/".$_GET['imgname'] );
    
    $query = "DELETE FROM tbl_core_values WHERE value_id = '$value_id'";
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
