<?php
include "../../includes/header-min.php";
$storeFolder = '../../assets/uploads/gallery/';
if (isset($_POST['add_edit'])) {
    $gallery_id = validate_string($link,$_GET['gallery_id']);
    extract($_POST);
    $gallery_category = validate_string($link,$gallery_category);
    $img_desc = validate_string($link,$img_desc);

    if ($gallery_id > 0) {
        $query="UPDATE tbl_gallery set `gallery_category`='$gallery_category',`img_desc`='
        $img_desc', updated_by='$user_id', updated_on=NOW() WHERE `gallery_id` = '$gallery_id'";
        $chk = mysqli_query($link,$query);
        $last_id = $gallery_id;
    } else {
        $query = "INSERT INTO tbl_gallery (`gallery_category`, `img_desc`, gallery_status, added_on, added_by) VALUES('$gallery_category', '$img_desc','1', NOW(), '$user_id')";       
        $chk = mysqli_query($link,$query);
        $last_id = mysqli_insert_id($link);
    }
    if($chk) {
        if(is_uploaded_file($_FILES['gallery_img']['tmp_name'])){
            //create name of file
            $file_name = $last_id.rand()."_gallery_img";
            //folder path to save the file
            $path_to_save = $storeFolder;
            //upload the file in above path folder
            $res = upload_file($_FILES['gallery_img'], $file_name, $path_to_save, "gallery_img", "gallery_id", $last_id, "tbl_gallery", $link);
            if($res=="err=ok"){
            } else {
                $_SESSION['toast_type'] = "error";
                $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
                header('location:../our-gallery/');
                exit();
            }
        }

        if ($gallery_id > 0) {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Gallery Updated Successfully!";
            header('location:../our-gallery/');
            exit();
        } else {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Gallery Added Successfully!";
            header('location:../our-gallery/');
            exit();
        }
    } else {
        $_SESSION['toast_type'] = "error";
        $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
        header('location:../our-gallery/');
        exit();
    }
}
if (isset($_GET['delete'])) {
    $gallery_id = validate_string($link,$_GET['gallery_id']);
    
    unlink( $storeFolder."/".$_GET['imgname'] );
    $query = "DELETE FROM tbl_gallery WHERE gallery_id = '$gallery_id'";
    
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
