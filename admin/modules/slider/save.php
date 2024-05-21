<?php
include "../../includes/header-min.php";
$storeFolder = '../../assets/uploads/hero-section/';
if (isset($_POST['add_edit'])) {
    $id = validate_string($link,$_GET['id']);
    extract($_POST);

    $slider_url = validate_string($link,$slider_url);

    if ($id > 0) {
        $query="UPDATE tbl_media set `url`='$slider_url', updated_by='$user_id', updated_on=NOW() WHERE `id` = '$id'";
        $chk = mysqli_query($link,$query);
        $last_id = $id;
    } else {
        $query = "INSERT INTO tbl_media (media_type, `url`, media_status, added_on, added_by) VALUES('hero-image', '$slider_url', '1', NOW(), '$user_id')";       
        $chk = mysqli_query($link,$query);
        $last_id = mysqli_insert_id($link);
    }
    if($chk) {
        if(is_uploaded_file($_FILES['banner_image']['tmp_name'])){
            //create name of file
            $file_name = $last_id.rand()."_hero_img";
            //folder path to save the file
            $path_to_save = $storeFolder;
            //upload the file in above path folder
            $res = upload_file($_FILES['banner_image'], $file_name, $path_to_save, "media_name", "id", $last_id, "tbl_media", $link);
            if($res=="err=ok"){
            } else {
                $_SESSION['toast_type'] = "error";
                $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
                header('location:../slider/');
                exit();
            }
        }

        if ($id > 0) {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Slider Updated Successfully!";
            header('location:../slider/');
            exit();
        } else {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Slider Added Successfully!";
            header('location:../slider/');
            exit();
        }
    } else {
        $_SESSION['toast_type'] = "error";
        $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
        header('location:../slider/');
        exit();
    }
}
if (isset($_GET['delete'])) {
    $id = validate_string($link,$_GET['id']);
    
    unlink( $storeFolder."/".$_GET['imgname'] );
    $query = "DELETE FROM tbl_media WHERE id = '$id'";
    
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
