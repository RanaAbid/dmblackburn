<?php
include "../../includes/header-min.php";
$storeFolder = '../../assets/uploads/community-information/';
if (isset($_POST['add_edit'])) {
    $community_id = validate_string($link, $_GET['community_id']);
    extract($_POST);
    $community_name = validate_string($link, $community_name);
    
    if ($community_id > 0) {
        $query = "UPDATE tbl_community_information set community_name='$community_name', updated_by='$user_id', updated_on=NOW() WHERE `community_id` = '$community_id'";
        $chk = mysqli_query($link,$query);
        $last_id = $community_id;
    } else {
        $query = "INSERT INTO tbl_community_information (community_name,community_status, added_on,added_by) VALUES('$community_name', '1', NOW(),'$user_id')";
        $chk = mysqli_query($link,$query);
        $last_id = mysqli_insert_id($link);
    }

    if ($chk) {
        if(is_uploaded_file($_FILES['community_file']['tmp_name'])){
            //create name of file
            $file_name = $last_id.rand()."_community";
            //folder path to save the file
            $path_to_save = $storeFolder;
            //upload the file in above path folder
            $res = upload_file($_FILES['community_file'], $file_name, $path_to_save, "community_file", "community_id", $last_id, "tbl_community_information", $link);
            if($res=="err=ok"){
            } else {
                $_SESSION['toast_type'] = "error";
                $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
                header('location:../community-info/');
                exit();
            }
        }

        if ($community_id > 0) {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Report Updated Successfully!";
            header('location:../community-info/');
            exit();
        } else {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Report Added Successfully!";
            header('location:../community-info/');
            exit();
        }
    } else {
        $_SESSION['toast_type'] = "error";
        $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
        header('location:../community-info/');
        exit();
    }
}

if (isset($_GET['delete'])) {
    $community_id = validate_string($link,$_GET['community_id']);
    
    unlink( $storeFolder."/".$_GET['imgname'] );
    $query = "DELETE FROM tbl_community_information WHERE community_id = '$community_id'";
    
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
                        