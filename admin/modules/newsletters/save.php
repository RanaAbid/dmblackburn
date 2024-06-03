<?php
include "../../includes/header-min.php";
$storeFolder = '../../assets/uploads/newsletters/';
if (isset($_POST['add_edit'])) {
    $news_id = validate_string($link, $_GET['news_id']);
    extract($_POST);
    $news_name = validate_string($link, $news_name);
    
    if ($news_id > 0) {
        $query = "UPDATE tbl_newsletters set news_name='$news_name', updated_by='$user_id', updated_on=NOW() WHERE `news_id` = '$news_id'";
        $chk = mysqli_query($link,$query);
        $last_id = $news_id;
    } else {
        $query = "INSERT INTO tbl_newsletters (news_name,news_status, added_on,added_by) VALUES('$news_name', '1', NOW(),'$user_id')";
        $chk = mysqli_query($link,$query);
        $last_id = mysqli_insert_id($link);
    }

    if ($chk) {
        if(is_uploaded_file($_FILES['news_file']['tmp_name'])){
            //create name of file
            $file_name = $last_id.rand()."_newsletter";
            //folder path to save the file
            $path_to_save = $storeFolder;
            //upload the file in above path folder
            $res = upload_file($_FILES['news_file'], $file_name, $path_to_save, "news_file", "news_id", $last_id, "tbl_newsletters", $link);
            if($res=="err=ok"){
            } else {
                $_SESSION['toast_type'] = "error";
                $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
                header('location:../newsletters/');
                exit();
            }
        }

        if ($news_id > 0) {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Newsletter Updated Successfully!";
            header('location:../newsletters/');
            exit();
        } else {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Newsletter Added Successfully!";
            header('location:../newsletters/');
            exit();
        }
    } else {
        $_SESSION['toast_type'] = "error";
        $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
        header('location:../newsletters/');
        exit();
    }
}

if (isset($_GET['delete'])) {
    $news_id = validate_string($link,$_GET['news_id']);
    
    unlink( $storeFolder."/".$_GET['imgname'] );
    $query = "DELETE FROM tbl_newsletters WHERE news_id = '$news_id'";
    
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
                        