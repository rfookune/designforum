@extends('layouts.frontend')

@section('styles')
	<style>
		.member {
			margin: 50px auto 80px;
    		max-width: 500px;
		}
		.member .title {
			font-size: 1.2em;
		    margin-top: 30px;
		    margin-bottom: 30px;
		}

		.member .bio {
			padding: 0 20px;
		    line-height: 2;
		}

		.member img {
			position: relative;
			border-radius: 50%;
			top: 0;
			max-height: 250px;
			max-width: 100%;
			transition: all 0.3s ease;
		}

		.member.member-sm img {
			border-radius: 50%;
			max-height: 180px;
			max-width: 100%;
		}

		.members-wrapper {
			margin-top: 60px;
		}

		.member:hover img {
			box-shadow: 5px 5px 8px 0 rgba(0, 0, 0, 0.3);
			top: -4px;
		}
	</style>
@endsection

@section('header')
	<div class="hero">
		<div class="header">
			<h1>Our Team</h1>
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
		<div class="header text-center">
			<h1>Senior Architects</h1>
			<hr class="hr hr-primary divider-lg divider-light">
		</div>
		<div class="content members-wrapper">
			<div class="row">
				<div class="col-md-6">
					<div class="member text-center">
						<div class="img-wrapper">
							<img src="http://static.livedemo00.template-help.com/joomla_58059/images/team/team-6.jpg" alt="">
						</div>
						<div class="title">
							<p class="text-serif">Marc Foo Kune</p>
						</div>
						<div class="bio">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis quas voluptatibus tempora culpa qui porro numquam quasi neque. Magni aspernatur dolores, aut aliquid dolore nobis repudiandae voluptatem rerum est accusantium.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="member text-center">
						<div class="img-wrapper">
							<img src="http://static.livedemo00.template-help.com/joomla_58059/images/team/team-5.jpg" alt="">
						</div>
						<div class="title">
							<p class="text-serif">Nirupa Rughoo</p>
						</div>
						<div class="bio">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis quas voluptatibus tempora culpa qui porro numquam quasi neque. Magni aspernatur dolores, aut aliquid dolore nobis repudiandae voluptatem rerum est accusantium.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	

<div class="section">
	<div class="container main">
		<div class="content">
			<div class="row">
				<div class="col-sm-5 intro line-height--2 text-serif">
					<p><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda non a sunt molestiae dolores voluptatem odio debitis quibusdam ipsa facilis in numquam, iste, voluptate ut? Dolorem eveniet aspernatur veniam, natus.</i></p>
				</div>
			</div>
		</div>	
	</div>
</div>


<div class="section section--light">
	<div class="container main">
		<div class="header text-center">
			<h1>Designers</h1>
			<hr class="hr hr-primary divider-lg divider-light">
		</div>
		<div class="row">
			<div class="col-sm-4">
				<div class="member member-sm text-center">
					<div class="img-wrapper">
						<img src="http://static.livedemo00.template-help.com/joomla_58059/images/team/team-6.jpg" alt="">
					</div>
					<div class="title">
						<p class="text-serif">Rhyan Foo Kune</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="member member-sm text-center">
					<div class="img-wrapper">
						<img src="http://static.livedemo00.template-help.com/joomla_58059/images/team/team-5.jpg" alt="">
					</div>
					<div class="title">
						<p class="text-serif">Nadia Foo Kune</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="member member-sm text-center">
					<div class="img-wrapper">
						<img src="http://static.livedemo00.template-help.com/joomla_58059/images/team/team-6.jpg" alt="">
					</div>
					<div class="title">
						<p class="text-serif">Kapil Seewooruthun</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	

@endsection

@section('scripts')
	
@endsection