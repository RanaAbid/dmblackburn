<?php
ob_start();
if(!session_id()){ session_start(); }

if(!isset($_SESSION['dm_user_id']) || $_SESSION['dm_user_id']==""){
	
	session_unset('dm_user_id');
	session_unset('dm_user_name');
	session_unset('dm_user_displayname');
	session_unset('dm_role_id');
		
	$url = $app_path . "index.php";
	header ("Location: $url");
	exit;
}
?>
