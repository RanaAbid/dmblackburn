<?php
include "../../includes/header-min.php";
$storeFolder = '../../assets/uploads/ethos-values/';
if (isset($_POST['add_edit'])) {
    $ethos_id = validate_string($link,$_GET['ethos_id']);
    extract($_POST);

    $right_desc = validate_ckeditor_data($link,$right_desc);
    $first_desc = validate_ckeditor_data($link,$first_desc);
    
    if ($ethos_id > 0) {
        $query="UPDATE tbl_ethos_values set `right_desc`='$right_desc', `first_desc`='$first_desc', updated_on=NOW(), updated_by=$user_id WHERE `ethos_id` = '$ethos_id'";
        $chk = mysqli_query($link,$query);
        $last_id = $ethos_id;
    } else {
        $query = "INSERT INTO tbl_ethos_values (`right_desc`, `first_desc`, `added_on`, `added_by`) VALUES('$right_desc', '$first_desc', NOW(),'$user_id')";       
        $chk = mysqli_query($link,$query);
        $last_id = mysqli_insert_id($link);
    }
    
    if($chk) {
        if(is_uploaded_file($_FILES['left_img']['tmp_name'])){
            //create name of file
            $file_name = $last_id.rand()."_welcome_banner";
            //folder path to save the file
            $path_to_save = $storeFolder;
            //upload the file in above path folder
            $res = upload_file($_FILES['left_img'], $file_name, $path_to_save, "left_img", "ethos_id", $last_id, "tbl_ethos_values", $link);
            if($res=="err=ok"){
            } else {
                $_SESSION['toast_type'] = "error";
                $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
                header('location:../ethos-values/');
                exit();
            }
        }

        if ($ethos_id > 0) {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Data Updated Successfully!";
            header('location:../ethos-values/');
            exit();
        } else {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Data Added Successfully!";
            header('location:../ethos-values/');
            exit();
        }
    } else {
        $_SESSION['toast_type'] = "error";
        $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
        header('location:../ethos-values/');
        exit();
    }
}