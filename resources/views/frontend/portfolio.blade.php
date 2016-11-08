@extends('layouts.frontend')

@section('styles')
	<style>
		.filter-list {
			padding:0;
			list-style:none;
			display: inline-block;
		}

		.filter-list li {
			float:left;
			margin-left: 10px;
			margin-right: 10px;
		}

		.filter-list li span {
			display: block;
			padding: 5px;
			text-decoration: none;
			color:#666;
			font-weight: 700;
			cursor: pointer;
			border-bottom: 2px solid transparent;
		}

		.filter-list li span:hover {
			color: #c0b57b;
		}

		.filter-list li span.active {
			color: #c0b57b;
			border-bottom: 2px solid #c0b57b;
		}
		

		.portfolio-list {
			text-align: center;
			margin-top: 30px;
		}

		.portfolio-list .portfolio {
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			-o-box-sizing: border-box;
			display:none;
			overflow:hidden;
			margin-top: 20px;
			margin-bottom: 20px;
		}

		.portfolio-wrapper {
			overflow:hidden;
			position: relative;
			background: #666;
			cursor:pointer;
		}

		.portfolio img {
			max-width:100%;
			position: relative;
			top:0;
			left: 0;
			-webkit-transition: all 600ms cubic-bezier(0.645, 0.045, 0.355, 1);
			transition: all 600ms cubic-bezier(0.645, 0.045, 0.355, 1);		
		}

		.portfolio .label {
			position: absolute;
			width: 100%;
			height:100%;
			top: 0;
			left: 0;
			-webkit-transition: all 300ms cubic-bezier(0.645, 0.045, 0.355, 1);
			transition:         all 300ms cubic-bezier(0.645, 0.045, 0.355, 1);
			visibility: hidden;
			background: rgba(0,0,0,0.8);
			opacity: 0;
		}

		.portfolio .label-text {
			color:#fff;
			position: relative;
			z-index:500;
			padding:5px 8px;
		}

		.portfolio:hover .label {
			visibility: visible;
			opacity: 1;
		}
		
		.portfolio:hover img {
			transform: scale(1.3);
		}

		.portfolio .label-link {
		    position: absolute;
		    top: -30px;
    		right: -80px;
		    z-index: 1;
		    width: 200px;
		    height: 110px;
		    padding: 55px 15px 5px;
		    vertical-align: bottom;
		    line-height: 40px;
		    background: #fafafa;
		    -webkit-transform: rotate(45deg);
		    transform: rotate(45deg);
		    text-align: center;
		    transition: top 0.28s cubic-bezier(0.79, 0.14, 0.15, 0.86), right 0.28s cubic-bezier(0.79, 0.14, 0.15, 0.86), opacity 0.28s cubic-bezier(0.79, 0.14, 0.15, 0.86), visibility 0.28s cubic-bezier(0.79, 0.14, 0.15, 0.86);
		}

		.portfolio .label-link .mdi{
		    color: grey;
		    font-size: 30px;
		    transform: rotate(45deg);
		}

		.portfolio .label-link .mdi:before {
			transform: rotate(45deg);
		}

		.portfolio .label-text {
			position: absolute;
			bottom: 15px;
			left: 10px;
			font-size: 1.2em;
			width: calc(100% - 20px);
			white-space: normal;
		    text-align: left;
		}

	</style>
@endsection

@section('header')
	<div class="hero">
		<div class="header">
			<h1>Our Portfolio</h1>
		</div>
	</div>
@endsection

@section('content')

<div class="section">
	<div class="container main">
		<div class="content">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center intro line-height--2 text-serif">
					<p><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda non a sunt molestiae dolores voluptatem odio debitis quibusdam ipsa facilis in numquam, iste, voluptate ut? Dolorem eveniet aspernatur veniam, natus.</i></p>
				</div>
			</div>
		</div>	
	</div>
</div>


<div class="section section--light">
	<div class="container main">
		<div class="content">
			<div class="row">
				<div class="col-md-12 text-center">
					<ul id="filters" class="clearfix filter-list">
						<li><span class="filter active" data-filter=".app, .card, .icon, .logo, .web">All</span></li>
						<li><span class="filter" data-filter=".app">Office Building</span></li>
						<li><span class="filter" data-filter=".card">Private Residence</span></li>
						<li><span class="filter" data-filter=".icon">Residential Building</span></li>
						<li><span class="filter" data-filter=".logo">Public Building</span></li>
						<!-- <li><span class="filter" data-filter=".web">Web</span></li> -->
					</ul>
				</div>
			</div>
		</div>

		@include('frontend.partials.gallery')

	</div>
</div>

@endsection

@section('scripts')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>
	<script>
		$(function () {
			var filterList = {	
				init: function () {
					$('#portfoliolist').mixItUp({
		  				selectors: {
		    			  	target: '.portfolio',
		    			  	filter: '.filter'	
		    		  	},
	    		  		load: {
	      		  			filter: '.app, .card, .icon, .logo, .web'  
	      				}     
					});
				}
			};
			
			filterList.init();
		});
	</script>
@endsection