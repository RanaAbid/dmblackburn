<?php
include "../../includes/header-min.php";
$storeFolder = '../../assets/uploads/our-policies/';
if (isset($_POST['add_edit'])) {
    $policy_id = validate_string($link, $_GET['policy_id']);
    extract($_POST);
    $policy_name = validate_string($link, $policy_name);
    
    if ($policy_id > 0) {
        $query = "UPDATE tbl_policies set policy_name='$policy_name', updated_by='$user_id', updated_on=NOW() WHERE `policy_id` = '$policy_id'";
        $chk = mysqli_query($link,$query);
        $last_id = $policy_id;
    } else {
        $query = "INSERT INTO tbl_policies (policy_name,policy_status, added_on,added_by) VALUES('$policy_name', '1', NOW(),'$user_id')";
        $chk = mysqli_query($link,$query);
        $last_id = mysqli_insert_id($link);
    }

    if ($chk) {
        if(is_uploaded_file($_FILES['policy_file']['tmp_name'])){
            //create name of file
            $file_name = $last_id.rand()."_policy";
            //folder path to save the file
            $path_to_save = $storeFolder;
            //upload the file in above path folder
            $res = upload_file($_FILES['policy_file'], $file_name, $path_to_save, "policy_file", "policy_id", $last_id, "tbl_policies", $link);
            if($res=="err=ok"){
            } else {
                $_SESSION['toast_type'] = "error";
                $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
                header('location:../our-policies/');
                exit();
            }
        }

        if ($policy_id > 0) {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Policy Updated Successfully!";
            header('location:../our-policies/');
            exit();
        } else {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Policy Added Successfully!";
            header('location:../our-policies/');
            exit();
        }
    } else {
        $_SESSION['toast_type'] = "error";
        $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
        header('location:../our-policies/');
        exit();
    }
}

if (isset($_GET['delete'])) {
    $policy_id = validate_string($link,$_GET['policy_id']);
    
    unlink( $storeFolder."/".$_GET['imgname'] );
    $query = "DELETE FROM tbl_policies WHERE policy_id = '$policy_id'";
    
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
                        