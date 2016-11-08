@extends('layouts.frontend')

@section('styles')
	<style>
		.accordion-toggle .flaticon {
	   	    position: absolute;
		    top: 50%;
		    left: 50%;
		    transform: translate(-50%, -50%);
		    transition: transform 0.3s ease;
		}

		.panel.active .accordion-toggle .flaticon {
			transform: translate(-50%, -50%) rotate(135deg);
		}

		.panel-group {
			margin: 40px auto;
		}

		.panel-group .panel {
			border-radius: 0;
			border: none;
			margin-bottom: 30px;
			box-shadow: none;
		}

		.panel-default > .panel-heading {
			position: relative;
			border-radius: 0;
			padding: 20px 70px 20px 30px;
			background: #e2e2e2;
			transition: all 0.3s ease;
		}

		.panel-default > .panel-heading a:hover, .panel-default > .panel-heading a:focus {
			text-decoration: none;
			color: inherit;
		}

		.panel-default > .panel-heading + .panel-collapse > .panel-body {
			border: none;
			margin-top: 15px;
		    padding: 15px 30px;
		}

		.expand-icon {
			font-size: 28px;
		    position: absolute;
		    top: 0;
		    bottom: 0;
		    right: 0;
		    width: 65px;
   			border-left: 5px solid #fff;
		}

		.panel.active .panel-heading {
			background: #c0b57b;
			color: #fff;
		}

	</style>
@endsection

@section('header')
	<div class="hero">
		<div class="header">
			<h1>Frequently Asked Questions</h1>
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
				<div class="col-md-10 col-md-offset-1">
					<div class="panel-group" id="accordion">
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
										Lorem ipsum dolor sit amet?
										<span class="expand-icon pull-right">
											<span class="flaticon flaticon-essential-add"></span>
										</span>
									</a>
								</h4>
							</div>
							<div id="collapseOne" class="panel-collapse collapse">
								<div class="panel-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
										Lorem ipsum dolor sit amet?
										<span class="expand-icon pull-right">
											<span class="flaticon flaticon-essential-add"></span>
										</span>
									</a>
								</h4>
							</div>
							<div id="collapseTwo" class="panel-collapse collapse">
								<div class="panel-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt.
								</div>
							</div>
						</div>
						<div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
										Lorem ipsum dolor sit amet?
										<span class="expand-icon pull-right">
											<span class="flaticon flaticon-essential-add"></span>
										</span>
									</a>
								</h4>
							</div>
							<div id="collapseThree" class="panel-collapse collapse">
								<div class="panel-body">
									Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
					
		</div>
	</div>
</div>
	

@endsection

@section('scripts')
	<script>
	$('#accordion').on('hide.bs.collapse', function (e) {
		$(e.target).closest('.panel').removeClass('active');
	});

	$('#accordion').on('show.bs.collapse', function (e) {
		$(e.target).closest('.panel').addClass('active');
	});
	</script>
@endsection