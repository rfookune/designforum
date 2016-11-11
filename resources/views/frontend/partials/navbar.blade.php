<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->

		<div class="navbar-header">
			<a href="#" class="sidebar-toggle"><span class="mdi mdi-dots-vertical"></span></a>
			<a class="navbar-brand" href="#">Design Forum</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="{{Request::is('/') ? 'active' : ''}}"><a class="animsition-link" href="/">Home</a></li>
				<li class="{{Request::is('portfolio') ? 'active' : ''}}"><a class="animsition-link" href="/portfolio">Portfolio</a></li>
				<li class="{{Request::is('team') ? 'active' : ''}}"><a class="animsition-link" href="/team">Our Team</a></li>
				<li class="{{Request::is('careers') ? 'active' : ''}}"><a class="animsition-link" href="/careers">Careers</a></li>
				<li class="{{Request::is('faq') ? 'active' : ''}}"><a class="animsition-link" href="/faq">FAQ</a></li>
				<li class="{{Request::is('contact') ? 'active' : ''}}"><a class="animsition-link" href="/contact">Contact Us</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>