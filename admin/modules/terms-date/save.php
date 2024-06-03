<?php
include "../../includes/header-min.php";
$storeFolder = '../../assets/uploads/our-terms-date/';
if (isset($_POST['add_edit'])) {
    $term_id = validate_string($link, $_GET['term_id']);
    extract($_POST);
    $term_name = validate_string($link, $term_name);
    
    if ($term_id > 0) {
        $query = "UPDATE tbl_terms set term_name='$term_name', updated_by='$user_id', updated_on=NOW() WHERE `term_id` = '$term_id'";
        $chk = mysqli_query($link,$query);
        $last_id = $term_id;
    } else {
        $query = "INSERT INTO tbl_terms (term_name,term_status, added_on,added_by) VALUES('$term_name', '1', NOW(),'$user_id')";
        $chk = mysqli_query($link,$query);
        $last_id = mysqli_insert_id($link);
    }

    if ($chk) {
        if(is_uploaded_file($_FILES['term_file']['tmp_name'])){
            //create name of file
            $file_name = $last_id.rand()."_terms_date";
            //folder path to save the file
            $path_to_save = $storeFolder;
            //upload the file in above path folder
            $res = upload_file($_FILES['term_file'], $file_name, $path_to_save, "term_file", "term_id", $last_id, "tbl_terms", $link);
            if($res=="err=ok"){
            } else {
                $_SESSION['toast_type'] = "error";
                $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
                header('location:../terms-date/');
                exit();
            }
        }

        if ($term_id > 0) {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Term Updated Successfully!";
            header('location:../terms-date/');
            exit();
        } else {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Term Added Successfully!";
            header('location:../terms-date/');
            exit();
        }
    } else {
        $_SESSION['toast_type'] = "error";
        $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
        header('location:../terms-date/');
        exit();
    }
}

if (isset($_GET['delete'])) {
    $term_id = validate_string($link,$_GET['term_id']);
    
    unlink( $storeFolder."/".$_GET['imgname'] );
    $query = "DELETE FROM tbl_terms WHERE term_id = '$term_id'";
    
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
                        