<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
	<meta charset="UTF-8">
	<meta name="description" content="Magazinul Ariana's este profilat pe îmbrăcăminte modernă de damă, creată de designeri români și produsă de firme românești.">
	<meta name="keywords" content="imbracaminte moderna, designeri romani, tinute ofice, tinute casual, branduri romanesti de calitate">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

	<link rel="canonical" href="index.php"/>
	<link rel="icon" href="storage/favicon.png"/>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap&subset=latin-ext" rel="stylesheet">

    </head>

    <body>
	<section class="help py-2 bg-primary">
	    <div class="container">
		<div class="row align-items-center">
		    <div class="col-5 col-md-4 order-1 socials">
			<a href="#" class="pr-4">
			    <span class="icon icon-facebook"></span>
			</a>

			<a href="#">
			    <span class="icon icon-instagram"></span>
			</a>
		    </div>

		    <div class="col-md-4 d-flex justify-content-between justify-content-md-around order-3 order-md-2 mt-3 mt-md-0">
			<a href="about.php">Despre noi</a>
			<a href="contact.php">Contact</a>
		    </div>

		    <div class="col-7 col-md-4 text-right order-2 order-md-3">
			<span class="icon icon-phone-call"></span>
			<a href="tel:" class="pl-2 font-weight-light">0745 45 45 45</a>
		    </div>
		</div>
	    </div>
	</section>

	<section class="header sticky-top py-2 py-xl-3 anim bg-white" id="navbar">
	    <nav class="navbar navbar-expand-xl container">
		<a class="navbar-brand" href="index.php">
		    <img src="storage/logo/arianas.svg" alt="" class="img-fluid">
		</a>

		<div class="user-info d-inline-flex d-xl-none align-items-center ml-auto">

		    <button class="btn nav-link search-trigger" onclick="$('.search').toggleClass('search-open')">
			<span class="icon icon-search"></span>
		    </button>
		    
		    <div class="search border px-2">
			<input type="text" class="form-control border-0 bg-transparent px-0" placeholder="Caută">
		    </div>

		    <a class="ml-3 ml-md-0 mr-2">
			<span class="icon icon-heart"></span>
		    </a>

		    <button class="btn cart-trigger mr-2 mr-md-4">
			<span class="icon icon-shopping-bag"></span>
			<div class="cart-item-count">5</div>
		    </button>

		</div>

		<button class="navbar-toggler" type="button" onclick="$('.navbar-collapse').toggleClass('navbar-show')">
		    <i class="fas fa-bars"></i>
		</button>

		<div class="navbar-collapse">

		    <div class="text-right d-lg-none">
			<button class="btn navbar-close" onclick="$('.navbar-collapse').removeClass('navbar-show')">
			    <i class="fas fa-times"></i>
			</button>
		    </div>

		    <ul class="navbar-nav mx-auto mt-4 mt-lg-0" id="header-categories">
			<li class="nav-item category">
			    <div class="nav-link">
				<a href="products.php">Colectie nouă</a>
				<button class="btn px-0" data-toggle="collapse" data-target="#new-colection">
				    <span class="icon icon-angle-down"></span>
				</button>
				
				<div class="category-open collapse" id="new-colection" data-parent="#header-categories">

				    <ul class="mb-0 list-unstyled">
					<li>
					    <a href="#">Colectie nouă 1</a>
					</li>

					<li>
					    <a href="#">Colectie nouă 2</a>
					</li>

					<li>
					    <a href="#">Colectie nouă 3</a>
					</li>

					<li>
					    <a href="#">Colectie nouă 4</a>
					</li>
				    </ul>
				</div>
			    </div>
			</li>

			<li class="nav-item category">
			    <div class="nav-link">
				<a href="#">Noutăți 2020</a>
				<button class="btn px-0" data-toggle="collapse" data-target="#news">
				    <span class="icon icon-angle-down"></span>
				</button>
				<div class="category-open collapse" id="news" data-parent="#header-categories">
				    <ul class="mb-0 list-unstyled">
					<li>
					    <a href="#">Noutăți 1</a>
					</li>

					<li>
					    <a href="#">Noutăți 2</a>
					</li>

					<li>
					    <a href="#">Noutăți 3</a>
					</li>

					<li>
					    <a href="#">Noutăți 4</a>
					</li>
				    </ul>
				</div>
			    </div>
			</li>

			<li class="nav-item category">
			    <div class="nav-link">
				<a href="#">Rochii</a>
				<button class="btn px-0" data-toggle="collapse" data-target="#dresses">
				    <span class="icon icon-angle-down"></span>
				</button>
				<div class="category-open collapse" id="dresses" data-parent="#header-categories">
				    <ul class="mb-0 list-unstyled">
					<li>
					    <a href="#">Rochii  categorie nume lung </a>
					</li>

					<li>
					    <a href="#">Rochii 2</a>
					</li>

					<li>
					    <a href="#">Rochii 3</a>
					</li>

					<li>
					    <a href="#">Rochii 4</a>
					</li>
				    </ul>
				</div>
			    </div>
			</li>

			<li class="nav-item category">
			    <div class="nav-link">
				<a href="#">Haine</a>
				<button class="btn px-0" data-toggle="collapse" data-target="#clothes">
				    <span class="icon icon-angle-down"></span>
				</button>
				<div class="category-open collapse" id="clothes" data-parent="#header-categories">
				    <ul class="mb-0 list-unstyled">
					<li>
					    <a href="#">Haine 1</a>
					</li>

					<li>
					    <a href="#">Haine 2</a>
					</li>

					<li>
					    <a href="#">Haine 3</a>
					</li>

					<li>
					    <a href="#">Haine 4</a>
					</li>
				    </ul>
				</div>
			    </div>
			</li>

			<li class="nav-item category">
			    <div class="nav-link">
				<a href="#">Încălțăminte</a>
				<button class="btn px-0" data-toggle="collapse" data-target="#shoes">
				    <span class="icon icon-angle-down"></span>
				</button>
				<div class="category-open collapse" id="shoes" data-parent="#header-categories">
				    <ul class="mb-0 list-unstyled">
					<li>
					    <a href="#">Încălțăminte 1</a>
					</li>

					<li>
					    <a href="#">Încălțăminte 2</a>
					</li>

					<li>
					    <a href="#">Încălțăminte 3</a>
					</li>

					<li>
					    <a href="#">Încălțăminte 4</a>
					</li>
				    </ul>
				</div>
			    </div>
			</li>

			<li class="nav-item category">
			    <div class="nav-link">
				<a href="#">Genți</a>
				<button class="btn px-0" data-toggle="collapse" data-target="#bags">
				    <span class="icon icon-angle-down"></span>
				</button>
				<div class="category-open collapse" id="bags" data-parent="#header-categories">
				    <ul class="mb-0 list-unstyled">
					<li>
					    <a href="#">Genți 1</a>
					</li>

					<li>
					    <a href="#">Genți 2</a>
					</li>

					<li>
					    <a href="#">Genți 3</a>
					</li>

					<li>
					    <a href="#">Genți 4</a>
					</li>
				    </ul>
				</div>
			    </div>
			</li>

			<li class="nav-item category">
			    <div class="nav-link">
				<a href="#">Branduri</a>
				<button class="btn px-0" data-toggle="collapse" data-target="#brands">
				    <span class="icon icon-angle-down"></span>
				</button>
				<div class="category-open collapse" id="brands" data-parent="#header-categories">
				    <ul class="mb-0 list-unstyled">
					<li>
					    <a href="#">Branduri 1</a>
					</li>

					<li>
					    <a href="#">Branduri 2</a>
					</li>

					<li>
					    <a href="#">Branduri 3</a>
					</li>

					<li>
					    <a href="#">Branduri 4</a>
					</li>
				    </ul>
				</div>
			    </div>
			</li>

			<li class="nav-item category">
			    <div class="nav-link">
				<a href="#">Reduceri</a>
				<button class="btn px-0" data-toggle="collapse" data-target="#sales">
				    <span class="icon icon-angle-down"></span>
				</button>
				<div class="category-open collapse" id="sales" data-parent="#header-categories">
				    <ul class="mb-0 list-unstyled">
					<li>
					    <a href="#">Reduceri 1</a>
					</li>

					<li>
					    <a href="#">Reduceri 2</a>
					</li>

					<li>
					    <a href="#">Reduceri 3</a>
					</li>

					<li>
					    <a href="#">Reduceri 4</a>
					</li>
				    </ul>
				</div>
			    </div>
			</li>

		    </ul>

		    <ul class="navbar-nav user-info d-none d-xl-flex">
			<li class="nav-item mr-xxl-2 position-relative">
			    <button class="btn nav-link search-trigger" onclick="$('.search').toggleClass('search-open')">
				<span class="icon icon-search"></span>
			    </button>
			    <div class="search border px-2">
				<input type="text" class="form-control border-0 bg-transparent px-0" placeholder="Caută">
			    </div>
			</li>

			<li class="nav-item mr-xxl-2">
			    <a href="#" class="nav-link">
				<span class="icon icon-heart"></span>
			    </a>
			</li>
			
			<li class="nav-item mr-xxl-2">
			    <a href="#" class="nav-link" data-toggle="modal" data-target="#login-form">
				<span class="icon icon-user"></span>
			    </a>
			</li>

			<li class="nav-item">
			    <button class="nav-link btn cart-trigger">
				<span class="icon icon-shopping-bag"></span>
				<div class="cart-item-count">5</div>
			    </button>
			</li>
		    </ul>
		</div>
	    </nav>

	    <div class="cart-wrapper">
		<div class="cart bg-white border">
		    <div class="cart__body scroll-bar-style">

			<div class="cart__item py-3">
			    <div class="row no-gutters">
				<div class="col-auto">
				    <img class="cart__item__img" src="storage/placeholders/product.png" alt="">
				</div>

				<div class="col align-self-center">
				    <a href="#" class="float-right"><i class="fas fa-times text-danger pl-2"></i></a>
				    <div class="cart__item__price float-right ">30 lei</div>

				    <a href="#" title="" class="cart__item__name px-2">
					Rochie roz prafuit eleganta midi tip creion din stofa cu suprapunere cu voal
				    </a>

				    <div class="cart__item__quantity pr-1 pl-2 text-primary">Nr bucati: 1</div>
				</div>
			    </div>
			</div>

			<div class="cart__item py-3">
			    <div class="row no-gutters">
				<div class="col-auto">
				    <img class="cart__item__img" src="storage/placeholders/product.png" alt="">
				</div>

				<div class="col align-self-center">
				    <a href="#" class="float-right"><i class="fas fa-times text-danger pl-2"></i></a>
				    <div class="cart__item__price float-right ">30 lei</div>

				    <a href="#" title="" class="cart__item__name px-2">
					Rochie roz prafuit eleganta midi tip creion din stofa cu suprapunere cu voal
				    </a>

				    <div class="cart__item__quantity pr-1 pl-2 text-primary">Nr bucati: 1</div>
				</div>
			    </div>
			</div>

			<div class="cart__item py-3">
			    <div class="row no-gutters">
				<div class="col-auto">
				    <img class="cart__item__img" src="storage/placeholders/product.png" alt="">
				</div>

				<div class="col align-self-center">
				    <a href="#" class="float-right"><i class="fas fa-times text-danger pl-2"></i></a>
				    <div class="cart__item__price float-right ">30 lei</div>

				    <a href="#" title="" class="cart__item__name px-2">
					Rochie roz prafuit eleganta midi tip creion din stofa cu suprapunere cu voal
				    </a>

				    <div class="cart__item__quantity pr-1 pl-2 text-primary">Nr bucati: 1</div>
				</div>
			    </div>
			</div>

		    </div>

		    <div class="cart__footer bg-light">
			<div class="cart-total mb-3 d-flex align-items-center">Total: 
			    <span class="pl-2 ml-auto font-weight-bold">330 lei</span>
			</div>

			<div class="d-flex">
			    <a href="#" class="btn btn-outline-primary text-uppercase mr-3 w-50">Continua</a>
			    <a href="#" class="btn btn-primary text-uppercase w-50 text-white">Finalizare</a>
			</div>
		    </div>
		</div>
	    </div>

	</section>