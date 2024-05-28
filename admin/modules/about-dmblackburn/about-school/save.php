<?php
include "../../includes/header-min.php";
$storeFolder = '../../assets/uploads/our-project/';
$actual_folder = '/assets/uploads/our-project/';
if (isset($_POST['add_edit'])) {
    $id = validate_string($link,$_GET['id']);
    extract($_POST);

    $school_status = validate_string($link,$school_status);
    $school_description = validate_string($link,$school_description);
    if($delete_file == 1){
        $update_clause = ", `banner_image`=''";
        $target_path = $storeFolder.$file_name;
        if (file_exists($target_path)){
		    unlink($target_path);
        }
    } else {
        $update_clause = "";
    } 
    if ($id > 0) {
        $query="UPDATE tbl_about set  about_imgUrl='$actual_folder', school_status='$school_status', school_description='$school_description',updated_by='$user_id', updated_on=NOW() $update_clause WHERE `about_id` = '$id'";
        $chk = mysqli_query($link,$query);
        $last_id = $id;
    } else {
        $query = "INSERT INTO tbl_about (about_imgUrl,school_status,school_description,added_on,added_by) VALUES('$actual_folder','$school_status', '$school_description',NOW(),'$user_id')";       
        $chk = mysqli_query($link,$query);
        $last_id = mysqli_insert_id($link);
    }
    if($chk) {
        if(is_uploaded_file($_FILES['project_image']['tmp_name'])){
            //create name of file
			$file_name = $last_id.rand()."_about";
			//folder path to save the file
			$path_to_save = $storeFolder;
			//upload the file in above path folder
			$res = upload_file($_FILES['project_image'], $file_name, $path_to_save, "project_img", "project_id", $last_id, "tbl_about", $link);
            if($res=="err=ok"){
            } else {
                $_SESSION['toast_type'] = "error";
                $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
                header('location:../about-school/');
                exit();
            }
        }
        if ($id > 0) {
            $_SESSION['toast_type'] = "success";
			$_SESSION['toast_msg'] = "Project Updated Successfully!";
			header('location:../about-school/');
			exit();
        } else {
		    $_SESSION['toast_type'] = "success";
			$_SESSION['toast_msg'] = "Project Added Successfully!";
			header('location:../about-school/');
			exit();
        }
	} else {
        $_SESSION['toast_type'] = "error";
        $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
        header('location:../about-school/');
        exit();
    }
}
if (isset($_POST['add_details'])) {
    $storeFolder = '../../assets/uploads/our-project-details/';
    $actual_folder = 'assets/uploads/our-project-details/';
    $project_id = validate_string($link,$_GET['id']);
    $project_content = validate_string($link,$_POST['project_content']);  
    $project_detail_id = fetch_data($link,"Select * from tbl_about_detail where project_id = '$project_id'");
    if(count($project_detail_id) > 0){
        $query="UPDATE tbl_about_detail set project_id='$project_id', project_link='$project_link', project_content='$project_content',updated_by='$user_id', updated_on=NOW() WHERE `project_id` = '$project_id'";
        $chk = mysqli_query($link,$query);
    } else {
        $query = "INSERT INTO tbl_about_detail (project_id,project_link,project_content,added_on,added_by) VALUES('$project_id','$project_link','$project_content',NOW(),'$user_id')";       
        $chk = mysqli_query($link,$query);
    }
    
    if($chk) {
        if(isset($_FILES['project_image'])){
            $total = count($_FILES['project_image']['name']);
            for( $i=0 ; $i < $total ; $i++ ) {
                if(is_uploaded_file($_FILES['project_image']['tmp_name'][$i])){
                    $file_name = $project_id . "_project_img_".rand();
                    $file_tmp_name = $_FILES['project_image']['tmp_name'][$i];
                    $file_type = basename($_FILES['project_image']['type'][$i]);
                    $file_size = $_FILES['project_image']['size'][$i];
                    $file_name = $file_name.".".$file_type;
                    $folder_name = $storeFolder;
                    $actual_folder = $actual_folder;
                    $res = upload_attach_multiple($file_name,$file_tmp_name,$file_type,$file_size,$folder_name, $link, $project_id,$actual_folder);
                    if($res=="err=ok"){
                    } else {
                        $_SESSION['toast_type'] = "error";
                        $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
                        header('location:../about-school/');
                        exit();
                    }   
                }
            } 
        }
        if ($id > 0) {
            $_SESSION['toast_type'] = "success";
			$_SESSION['toast_msg'] = "Project Updated Successfully!";
			header('location:../about-school/');
			exit();
        } else {
		    $_SESSION['toast_type'] = "success";
			$_SESSION['toast_msg'] = "Project Added Successfully!";
			header('location:../about-school/');
			exit();
        }
	} else {
        $_SESSION['toast_type'] = "error";
        $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
        header('location:../about-school/');
        exit();
    }
}
if (isset($_GET['delete'])) {
    $id = validate_string($link,$_GET['id']);
    $project_img = fetch_data($link,"Select * from tbl_about where project_id = '$id'");
    if($project_img > 0){
        $file_name = $project_img[0]['project_img'];
        $target_path = $storeFolder.$file_name;
        if (file_exists($target_path)){
            unlink($target_path);
        }
    }
    $query = "DELETE FROM tbl_about WHERE project_id = '$id'";
    $chk = mysqli_query($link,$query);
    if ($chk) {
        $_SESSION['toast_type'] = "success";
        $_SESSION['toast_msg'] = "Deleted Successfully!";
        header('location:../about-school/');
        exit();
    } else {
        $_SESSION['toast_type'] = "error";
        $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
        header('location:../about-school/');
        exit();
    }
}
if (isset($_GET['delete_image'])) {
    $storeFolder = '../../assets/uploads/our-project-details/';
    $id = validate_string($link,$_GET['id']);
    $project_img = fetch_data($link,"Select * from tbl_about_detail_img where project_detail_img_id = '$id'");
    $project_id = $project_img[0]['project_id'];
    if($project_img > 0){
        $file_name = $project_img[0]['project_img'];
        $target_path = $storeFolder.$file_name;
        if (file_exists($target_path)){
            unlink($target_path);
        }
    }
    $query = "DELETE FROM tbl_about_detail_img WHERE project_detail_img_id = '$id'";
    $chk = mysqli_query($link,$query);
    if ($chk) {
        $_SESSION['toast_type'] = "success";
        $_SESSION['toast_msg'] = "Deleted Successfully!";
        header('location:../about-school/add-details.php?id='.$project_id);
        exit();
    } else {
        $_SESSION['toast_type'] = "error";
        $_SESSION['toast_msg'] = "Oops! Something Went Wrong, Please try again";
        header('location:../about-school/add-details.php?id='.$project_id);
        exit();
    }
}
function upload_attach_multiple($_upload_file_name, $_tmp_name, $_type, $_size, $_folder_name, $link, $id,$actual_folder){
    //----------------------Validate file extention------------------------
    if($_type != "jpeg" and $_type != "jpg" and $_type != "png" and $_type !="gif" and $_type !="webp")
    {
      return "err=format";
      exit();
    }
  
    $target_path=$_folder_name . $_upload_file_name;
    if (file_exists($target_path))
      unlink($target_path);
    if(move_uploaded_file($_tmp_name, $target_path)){
      $qry_file="INSERT INTO tbl_about_detail_img(project_id,project_img, about_imgUrl, added_on) VALUES('$id', '$_upload_file_name','$actual_folder',NOW())";
      mysqli_query($link, $qry_file);
      return "err=ok";
    } else{
      return "err=fail";
    }
  }
?>