<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link href="<?= base_url('asset/plugins/sbAdmin2/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="<?= base_url('asset/css/style.css') ?>">

	<title>FXMedia</title>
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url('asset/image/favicon.ico') ?>">
</head>

<body>
	<section id="sidebar" class="d-none">
		<div class="w-100 d-flex justify-content-end">
			<i class="fas fa-times fa-2x text-light"></i>
		</div>
		<ul class="nav flex-column">
			<li class="nav-item <?php if ($this->uri->segment(2) == null) echo 'active' ?>">
				<a class="nav-link" href="<?= base_url('Home') ?>">Home</a>
			</li>
			<li class="nav-item <?php if ($this->uri->segment(2) == "founderSpeech") echo 'active' ?>">
				<a class="nav-link" href="<?= base_url('Home/founderSpeech') ?>">Founder Speech</a>
			</li>
			<li class="nav-item <?php if ($this->uri->segment(2) == "whoIsFXM") echo 'active' ?>">
				<a class="nav-link" href="<?= base_url('Home/whoIsFXM') ?>">Who Is FXmedia</a>
			</li>
			<li class="nav-item <?php if ($this->uri->segment(2) == "whatWeDo") echo 'active' ?>">
				<a class="nav-link" href="<?= base_url('Home/whatWeDo') ?>">What We Do</a>
			</li>
			<li class="nav-item <?php if ($this->uri->segment(2) == "hrQnA") echo 'active' ?>">
				<a class="nav-link" href="<?= base_url('Home/hrQnA') ?>">Talk With Hr</a>
			</li>
			<li class="nav-item <?php if ($this->uri->segment(2) == "hrGames") echo 'active' ?>">
				<a class="nav-link" href="<?= base_url('Home/hrGames') ?>">HR Games</a>
			</li>
		</ul>
		<div class="button text-center">
			<a href="<?= base_url('Auth/signOut') ?>">
				<button type="button" class="btn btn-light">Sign Out</button>
			</a>
		</div>
	</section>

	<section id="<?= $title ?>" class="content">
		<div class="container">
			<div class="row d-flex justify-content-between">
				<div class="top-logo">
					<img src="<?= base_url('asset/image/logo.png') ?>" alt="">
				</div>
				<i class="fas fa-bars fa-2x text-light"></i>
			</div>
