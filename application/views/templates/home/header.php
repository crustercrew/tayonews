<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $title; ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Tech Mag template project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/home/'); ?>styles/bootstrap-4.1.2/bootstrap.min.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/home/'); ?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/home/'); ?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/home/'); ?>plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/home/'); ?>styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/home/'); ?>styles/responsive.css">
	<link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body>

	<div class="super_container">

		<!-- Header -->

		<header class="header">

			<!-- Header bar -->
			<div class="header_bar">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_bar_content d-flex flex-row align-items-center justify-content-start">
								<div class="sub_button text-center"><a href="<?= base_url('auth'); ?>">Login</a>
									<div class="d-flex flex-row align-items-start justify-content-start">
										<div></div>
										<div></div>
										<div></div>
									</div>
								</div>
								<div class="header_social ml-auto">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										<li><a href="http://www.facebook.com/"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="http://www.twitter.com/"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Header Content -->
			<div class="header_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_content d-flex flex-row align-items-center justfy-content-start">
								<div class="logo_container">
									<a href="#">
										<div class="logo"><span><?= $body1; ?></span><?= $body2; ?></div>
										<div class="logo_sub">For Better Gaming & Technology news</div>
									</a>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Header Navigation & Search -->
			<div class="header_nav_container" id="header">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">

								<!-- Logo -->
								<div class="logo_container">
									<a href="#">
										<div class="logo"><span>Tech</span>mag</div>
										<div class="logo_sub">Innovation & Technology Magazine</div>
									</a>
								</div>