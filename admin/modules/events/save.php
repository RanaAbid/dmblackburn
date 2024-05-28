<?php
include "../../includes/header-min.php";
$storeFolder = '../../assets/uploads/activity-events/';
if (isset($_POST['add_edit'])) {
    $event_id = validate_string($link,$_GET['event_id']);
    extract($_POST);

    $event_title = validate_string($link,$event_title);
    $event_date = save_date(validate_string($link,$event_date));
    $event_short_desc = validate_string($link,$event_short_desc);
    $event_desc = validate_ckeditor_data($link,$event_desc);
    
    if ($event_id > 0) {
        $query="UPDATE tbl_activity_events set `event_title`='$event_title', `event_date`='$event_date',`short_desc`='$event_short_desc',`description`='$event_desc', updated_on=NOW() WHERE `event_id` = '$event_id'";
        $chk = mysqli_query($link,$query);
        $last_id = $event_id;
    } else {
        $query = "INSERT INTO tbl_activity_events (`event_title`, `event_date`, `short_desc`, `description`, `added_on`) VALUES('$event_title', '$event_date', '$event_short_desc', '$event_desc', NOW())";       
        $chk = mysqli_query($link,$query);
        $last_id = mysqli_insert_id($link);
    }
    
    if($chk) {
        if(is_uploaded_file($_FILES['event_img']['tmp_name'])){
            //create name of file
            $file_name = $last_id.rand()."_event_banner";
            //folder path to save the file
            $path_to_save = $storeFolder;
            //upload the file in above path folder
            $res = upload_file($_FILES['event_img'], $file_name, $path_to_save, "event_img", "event_id", $last_id, "tbl_activity_events", $link);
            if($res=="err=ok"){
            } else {
                $_SESSION['toast_type'] = "error";
                $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
                header('location:../events/');
                exit();
            }
        }

        if ($event_id > 0) {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Event Updated Successfully!";
            header('location:../events/');
            exit();
        } else {
            $_SESSION['toast_type'] = "success";
            $_SESSION['toast_msg'] = "Event Added Successfully!";
            header('location:../events/');
            exit();
        }
    } else {
        $_SESSION['toast_type'] = "error";
        $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
        header('location:../events/');
        exit();
    }
}
if (isset($_GET['delete'])) {
    $event_id = validate_string($link,$_GET['id']);
    
    unlink( $storeFolder."/".$_GET['imgname'] );
    $query = "DELETE FROM tbl_activity_events WHERE event_id = '$event_id'";
    
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
else {
    header('location:index.php');
    exit();
}