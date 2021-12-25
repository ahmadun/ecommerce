<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Protal Berita Codeigniter</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('css/styles.css') ?>" />
	<link rel="stylesheet" href="<?= base_url('css/owl.carousel.min.css') ?>" />
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>
	<script src="<?= base_url('js/owl.carousel.min.js') ?>"></script>


</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">Home</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav navbar-center">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('about') ?>">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('faqs') ?>">Faqs</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('about') ?>">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('about') ?>">About</a>
					</li>
				</ul>

			</div>
		</div>
	</nav>

	<header class="jumbotron jumbotron-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="h1">Portal Berita Codeignitera</h1>
				</div>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">

			<div class="large-12 columns">
				<div class="owl-carousel">

					<div class="item card spacer">
						<div class="card-body pad">
							<div style="height: 100%;">
								<div class="wrap-img">
									<img class="img-sale" src="<?= base_url('img/celana.jpg') ?>" alt="Image">
									<div class="buy-el">
										<div class="opt-buy" style="background-color: aqua;">A</div>
										<div class="opt-buy" style="background-color: blueviolet;">B</div>
										<div class="opt-buy" style="background-color: chartreuse;">C</div>
									</div>
								</div>
								<div class="title-product">Celana Straight Fit Pants Basic Celana Straight Fit Pants Basic</div>
								<div class="prc-product">
									<b class="prc-ori">120.000</b> <b class="prc-offer">130.000</b>
								</div>
							</div>
						</div>
					</div>

					<div class="item card spacer">
						<div class="card-body pad">
							<div style="height: 100%;">
								<div class="wrap-img">
									<img class="img-sale" src="<?= base_url('img/baju.jpg') ?>" alt="Image">
									<div class="buy-el">
										<div class="opt-buy" style="background-color: aqua;">A</div>
										<div class="opt-buy" style="background-color: blueviolet;">B</div>
										<div class="opt-buy" style="background-color: chartreuse;">C</div>
									</div>
								</div>
								<div class="title-product">Celana Straight Fit Pants Basic Celana Straight Fit Pants Basic</div>
								<div class="prc-product">
									<b class="prc-ori">120.000</b> <b class="prc-offer">130.000</b>
								</div>
							</div>
						</div>
					</div>
					<div class="item card spacer">
						<div class="card-body pad">
							<div style="height: 100%;">
								<div class="wrap-img">
									<img class="img-sale" src="<?= base_url('img/hijab.jpg') ?>" alt="Image">
									<div class="buy-el">
										<div class="opt-buy" style="background-color: aqua;">A</div>
										<div class="opt-buy" style="background-color: blueviolet;">B</div>
										<div class="opt-buy" style="background-color: chartreuse;">C</div>
									</div>
								</div>
								<div class="title-product">Celana Straight Fit Pants Basic Celana Straight Fit Pants Basic</div>
								<div class="prc-product">
									<b class="prc-ori">120.000</b> <b class="prc-offer">130.000</b>
								</div>
							</div>
						</div>
					</div>


				</div>

			</div>
		</div>
	</div>

	<footer class="jumbotron jumbotron-fluid mt-5 mb-0">
		<div class="container text-center">Copyright &copy <?= Date('Y') ?> CI News</div>
	</footer>




	<script>
		$(document).ready(function() {
			var owl = $('.owl-carousel');
			owl.owlCarousel({
				responsive: {
					0: {
						items: 1
					},
					600: {
						items: 2
					},
					1000: {
						items: 3
					}
				}
			})
		});
	</script>

</body>

</html>