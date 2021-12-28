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
	<link rel="stylesheet" href="<?= base_url('font/bootstrap-icons.css') ?>" />

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

	<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="display-4">Fluid jumbotron</h1>
			<p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
		</div>
	</div>

	<div class="container">
		<div class="row">

			<div class="owl-carousel owl-theme">

				<div class="item">
					<div class="card spacer">
						<div class="card-body pad">
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
				<div class="item">
					<div class="card spacer">
						<div class="card-body pad">
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

				<div class="item">
					<div class="card spacer">
						<div class="card-body pad">
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


				<div class="item">
					<div class="card spacer">
						<div class="card-body pad">
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


				<div class="item">
					<div class="card spacer">
						<div class="card-body pad">
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


				<div class="item">
					<div class="card spacer">
						<div class="card-body pad">
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
			</div>
		</div>

	</div>

	<div class="container-fluid">
		<div class="row">
			<div class="row-big-offer">
				<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
					</div>
					<div class="carousel-inner big-offer">
						<div class="carousel-item active">
							<img src="<?= base_url('img/baju.jpg') ?>" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="<?= base_url('img/celana.jpg') ?>" class="d-block w-100" alt="...">
						</div>
						<div class="carousel-item">
							<img src="<?= base_url('img/rok.jpg') ?>" class="d-block w-100" alt="...">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row row-big-offer">
			<div class="title-arrival">NEW ARRIVAL</div>
			<div class="caption-arrival">Our Latest New Arrival</div>
			<div class="col-sm-3">
				<div class="card spacer-arival">
					<div class="card-body pad">
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
			<div class="col-sm-3">
				<div class="card spacer-arival">
					<div class="card-body pad">
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
			<div class="col-sm-3">
				<div class="card spacer-arival">
					<div class="card-body pad">
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
			<div class="col-sm-3">
				<div class="card spacer-arival">
					<div class="card-body pad">
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
			<div class="col-sm-3">
				<div class="card spacer-arival">
					<div class="card-body pad">
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
			<div class="col-sm-3">
				<div class="card spacer-arival">
					<div class="card-body pad">
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
		</div>


		<div class="container">
			<div class="row row-big-offer">
				<div class="title-arrival">What Are You Looking For?</div>
				<div class="caption-arrival">Tge Best Category</div>
				<div class="col-sm-3">
					<div class="imageselect row add-clearfix image-imagebox">
						<article class="imagebox">
							<figure> <a href="#"><img src="<?= base_url('img/baju.jpg') ?>" alt=""></a>
								<figcaption>
									<h2 class="caption-title">Dress</h2>
								</figcaption>
							</figure>
						</article>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="imageselect row add-clearfix image-imagebox">
						<article class="imagebox">
							<figure> <a href="#"><img src="<?= base_url('img/rok.jpg') ?>" alt=""></a>
								<figcaption>
									<h2 class="caption-title">Casual</h2>
								</figcaption>
							</figure>
						</article>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="imageselect row add-clearfix image-imagebox">
						<article class="imagebox">
							<figure> <a href="#"><img src="<?= base_url('img/celana.jpg') ?>" alt=""></a>
								<figcaption>
									<h2 class="caption-title">Tunic</h2>
								</figcaption>
							</figure>
						</article>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="imageselect row add-clearfix image-imagebox">
						<article class="imagebox">
							<figure> <a href="#"><img src="<?= base_url('img/baju.jpg') ?>" alt=""></a>
								<figcaption>
									<h2 class="caption-title">Bottoms</h2>
								</figcaption>
							</figure>
						</article>
					</div>
				</div>
			</div>

		</div>

		<div class="newsltr">

			<div class="title-arrival">Newsletter</div>
			<div class="caption-arrival">Sign up to stay in the loop. Receive updates, access to exclusive deals, and more.</div>


			<form>

				<div class="form-group">
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>

				<button type="submit" class="btn btn-primary" style="margin-top: 5px;">Submit</button>
			</form>


		</div>








		<footer class="jumbotron jumbotron-fluid mt-5 mb-0">
			<div class="container text-center">Copyright &copy <?= Date('Y') ?> CI News</div>
		</footer>




		<script>
			$(document).ready(function() {
				var owl = $('.owl-carousel');
				owl.owlCarousel({
					autoWidth: true,
					merge: true,
					margin: 10,
					nav: true,
					navText: ["<span class='bi bi-chevron-left' aria-hidden='true'></span>", "<span class='bi bi-chevron-right' aria-hidden='true'></span>"],
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