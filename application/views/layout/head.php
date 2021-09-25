<?php 
	// Load Configuration Website
	$site		= $this->M_Config->listing();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $title?></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- SEO -->
	<meta name="keywords" content="<?=($site['keywords']) ?>">
	<meta name="description" content="<?=($title) ?>, <?=($site['deskripsi']) ?>">

	<!--===============================================================================================-->
	<!-- // Icon From Configuration Basic -->
	<link rel="icon" type="image/png" href="<?= base_url('assets/images/produk/' .$site['icon']) ?>" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= base_url('assets/'); ?>user/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= base_url('assets/'); ?>user/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>user/fonts/themify/themify-icons.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= base_url('assets/'); ?>user/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>user/fonts/elegant-font/html-css/style.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>user/vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= base_url('assets/'); ?>user/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= base_url('assets/'); ?>user/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>user/vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="<?= base_url('assets/'); ?>user/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>user/vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>user/vendor/lightbox2/css/lightbox.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>user/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>user/css/main.css">
	<!--===============================================================================================-->
	<style type="text/css" media="screen">
	ul.pagination{
		padding: 0 10px;
		background-color: gray;
		border-radius: 5px;
		text-align: center;
	}
	.pagination a, .pagination b{
		padding: 10px 20px;
		text-decoration: none;
		float: left;
	}
	.pagination a {
		background-color: gray;
		color: white;
	}
	.pagination b {
		background-color: greenyellow;
		color: white;
	}
	.pagination a:hover{
		background-color: greenyellow;
		color: white;
		opacity: 90%;
	}
	</style>
</head>

<body class="animsition">