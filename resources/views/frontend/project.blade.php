@extends('layouts.frontend')

@section('styles')
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.min.css">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
	<style>

		.owl-carousel:hover .owl-buttons {
			display: block;
		}

		.owl-carousel .item img {
		    display: block;
		    width: 100%;
		    height: auto;
		}

		.lb-outerContainer {
			border-radius: 2px;
		}

		.lb-container {
			padding: 0;
			border-radius: 2px;
		}

		.lightboxOverlay {
			opacity: 0.9;
		}

		.grid-split-2 .grid-item {
			margin-top: 30px;
		}

		.grid-split-2 .grid-header {
			text-transform: uppercase;
		}

		.grid-split-2 .grid-header .title h2 {
		    margin-top: 25px;
			margin-bottom: 25px;
			font-weight: 700;
    		font-size: 2.5em;
		}

		.grid-split-2 .grid-header .title h4 {
		    margin: 0;
		}

		.owl-theme .owl-controls{
			margin-top: 10px;
			text-align: center;
		}

		/* Styling Pagination*/
		
		.owl-controls .owl-pagination {
			position: absolute;
		    bottom: 0;
		    padding: 10px 20px;
		    left: 50%;
		    transform: translate(-50%);
		}
		.owl-controls .owl-page {
			display: inline-block;
			zoom: 1;
			*display: inline;/*IE7 life-saver */
		}
		.owl-controls .owl-page span{
			display: block;
			width: 12px;
			height: 12px;
			margin: 5px 7px;
			filter: Alpha(Opacity=50);/*IE7 fix*/
			opacity: 0.5;
			-webkit-border-radius: 20px;
			-moz-border-radius: 20px;
			border-radius: 20px;
			background: #fff;
		}

		.owl-controls .owl-page.active span,
		.owl-controls.clickable .owl-page:hover span{
			filter: Alpha(Opacity=100);/*IE7 fix*/
			opacity: 1;
		}
	
	</style>
@endsection

@section('header')
	<div class="hero hero-sm"></div>
@endsection

@section('content')

<div class="section section--light">
	<div class="main container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="content grid-split-2">
					<div class="row">
						<div class="col-md-6 grid-item grid-header">
							<div class="row">
								<div class="title col-md-10">
									<h4>Moka, Mauritius</h4>
									<h2>Moka Gymnasium</h2>
									<h4>12 / 10 / 2012</h4>
								</div>
							</div>
								
						</div>
						<div class="col-md-6 grid-item grid-content">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam optio, earum, nemo odit porro eius tempore aliquam minima cum aliquid possimus officia rem adipisci blanditiis quibusdam velit. Sed, rem, ratione.
								<br><br>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio dicta perferendis earum officiis explicabo ratione dolores quas aliquid, ducimus recusandae. Accusamus repellendus dolorem ducimus aliquid animi, quis perspiciatis perferendis aperiam. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row" style="margin-top: 50px">
			<div class="col-md-10 col-md-offset-1">
				<div class="content">
					<div class="slider">	
						<div id="js-carousel" class="owl-carousel owl-theme">
							<a href="https://placem.at/places?w=1000&h=550" data-lightbox="roadtrip" class="item">
								<img src="https://placem.at/places?w=1000&h=550">
							</a>
							<a href="https://placem.at/people?w=1000&h=550" data-lightbox="roadtrip" class="item">
								<img src="https://placem.at/people?w=1000&h=550">
							</a>
							<a href="https://placem.at/things?w=1000&h=550" data-lightbox="roadtrip" class="item">
								<img src="https://placem.at/things?w=1000&h=550">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	

@endsection

@section('scripts')
	<script src="//cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.js"></script>
	<script>
		$(document).ready(function() {
		 
		  	var owl = $("#js-carousel");
		 
		  	owl.owlCarousel({
		    	navigation : false,
		    	singleItem : true,
		    	pagination : true,
		    	transitionStyle : "fade",
		    	autoPlay : 4000,
		    	slideSpeed: 1500,
		    	navigationText: [
			      	"<i class='mdi mdi-chevron-left'></i>",
			      	"<i class='mdi mdi-chevron-right'></i>"
			    ],
		  	});

		  	lightbox.option({
		  		'alwaysShowNavOnTouchDevices' : true,
		      	'wrapAround': true,
		      	'showImageNumberLabel': false,
		      	'disableScrolling': true

		    })
		 
		});
	</script>
@endsection