<?php
ob_start();
session_start();
//error_reporting(E_ALL ^ E_NOTICE);
//ini_set('max_execution_time', 300); //300 seconds = 5 minutes

//local path
$app_path = "http://" . $_SERVER['HTTP_HOST'] . "/projects/dmblackburn/";
$web_dir = "projects/dmblackburn/";

$root_path = $_SERVER['DOCUMENT_ROOT'] . "/" . $web_dir;

include($root_path . "includes/dbcode.php");
include($root_path . "includes/main.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slough - Dar-ul-Madina</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= $app_path ?>assets/images/logo/favicon.ico">

    <link rel="stylesheet" href="<?= $app_path ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= $app_path ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= $app_path ?>assets/css/icofont.min.css">
    <link rel="stylesheet" href="<?= $app_path ?>assets/css/modal-video.min.css">
    <link rel="stylesheet" href="<?= $app_path ?>assets/css/odometer.min.css">
    <link rel="stylesheet" href="<?= $app_path ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= $app_path ?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?= $app_path ?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= $app_path ?>assets/css/animate-headline.css">
    <link rel="stylesheet" href="<?= $app_path ?>assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="<?= $app_path ?>assets/css/slick.css">
    <link rel="stylesheet" href="<?= $app_path ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= $app_path ?>assets/css/admin.css">
</head>

<body class="dark_mode">
    <!-- preloader start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="loading-content">
                    <img class="loading-logo-text" src="<?= $app_path ?>assets/images/logo/logo.png" alt="Kidba">
                    <div class="loading-stroke">
                        <img class="loading-logo-icon" src="<?= $app_path ?>assets/images/logo/logo.png" alt="Pen">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->
    <!-- mouse-cursor-start -->
    <div class="mouse-cursor-visible">
        <div class="mouseCursor cursor-outer"></div>
        <div class="mouseCursor cursor-inner"></div>
    </div>
    <!-- mouse-cursor-end -->
    <?php include("includes/navigation.php"); ?>