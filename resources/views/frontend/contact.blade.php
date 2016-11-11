@extends('layouts.frontend')

@section('styles')
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
@endsection

@section('header')
	<div class="hero">
		<div class="header">
			<h1>Contact Us</h1>
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
		<div class="row center-sm">
			<div class="col-md-4">
				<h2 class="subheader">Find us</h2>
				<div class="row">
					<div class="col-sm-6 col-md-12">
						<div class="contact-unit">
							<div class="unit-left">
								<i class="flaticon flaticon-pin-placeholder"></i>
							</div>
							<div class="unit-body">
								<p class="text-dark">Address:</p>
								<a class="text-hover" href="https://www.google.com/maps/place/Design+Forum+Ltd/@-20.265755,57.4801254,17z/data=!4m5!3m4!1s0x217c5b41ab3c575f:0xa05c06f172fe9915!8m2!3d-20.2654531!4d57.4826628">
									8 Avenue des Capucines <br>
									Quatre Bornes, Mauritius
								</a>
							</div>
						</div>
						<div class="contact-unit">
							<div class="unit-left">
								<i class="flaticon flaticon-dialogue-phone"></i>
							</div>
							<div class="unit-body">
								<p class="text-dark">Call Us Today:</p>
								<a class="text-hover" href="tel:+230 465 9556">
									+230 465 9556
								</a>
							</div>
						</div>
						<div class="contact-unit">
							<div class="unit-left">
								<i class="flaticon flaticon-dialogue-envelope-8"></i>
							</div>
							<div class="unit-body">
								<p class="text-dark">Contact Email:</p>
								<a class="text-hover" href="mail:aarc@intnet.com">
									aarc@intnet.com
								</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-12">
						<div class="contact-unit">
							<div class="unit-left">
								<i class="flaticon flaticon-essential-time"></i>
							</div>
							<div class="unit-body">
								<p class="text-dark">Opening Hours:</p>
								<a class="text-hover" href="tel:+230 465 9556">
									Monday - Friday: 8am - 5pm<br>
									Saturday - Sunday: Closed<br>
									<p class="text-sm">*hours may be subject to change</p>
								</a>
							</div>
						</div>
					</div>
				</div>
					
			</div>
			<div class="col-md-8">
				<h2 class="subheader">Get in touch with us</h2>
				<form method="POST" action="/send-message" class="form" id="js-contact-form">
	                {{ csrf_field() }}
	                <div class="row">
	                    <div class="col-sm-6">
	                        <div class="form-group">
	                            <label class="text-gray">First Name</label>
	                            <input type="text" name="name_first" class="form-control" placeholder="First Name">
	                        </div>
	                    </div>
	                    <div class="col-sm-6">
	                        <div class="form-group">
	                            <label class="text-gray">Last Name</label>
	                            <input type="text" name="name_last" class="form-control" placeholder="Last Name">
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-sm-6">
	                        <div class="form-group">
	                            <label class="text-gray">Email</label>
	                            <input type="text" name="email" class="form-control" placeholder="Email">
	                        </div>
	                    </div>
	                    <div class="col-sm-6">
	                        <div class="form-group">
	                            <label class="text-gray">Phone Number</label>
	                            <input type="text" name="phone_number" class="form-control" placeholder="Phone Number">
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-sm-12">
	                        <div class="form-group">
	                            <label class="text-gray">Message</label>
	                            <textarea name="message" class="form-control" rows="5" placeholder="Message"></textarea>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                    <div class="col-md-12">
	                    	<br>
	                    	<button type="submit" class="btn btn-primary btn-submit">Send</button>
	                    </div>
	                </div>
	            </form>
			</div>
		</div>
	</div>
</div>
	

<div class="map-iframe">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3742.8309258971285!2d57.4806887!3d-20.2658456!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217c5b41ab3c575f%3A0xa05c06f172fe9915!2sDesign+Forum+Ltd!5e0!3m2!1sen!2sus!4v1477285702701" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

@endsection

@section('scripts')
	<script src="//cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
	<script>

		$.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });

        $(function(){
	        $('#js-contact-form').on('submit', function(e){
	        	e.preventDefault();
	        	var url = '/send-message';
	        	var submit_btn = $(this).find('.btn-submit');

	        	submit_btn.html('Sending....');
	        	
	        	$.ajax ({
			    	type: "POST",
			    	url: url,
			        data: $(this).serialize(),
			        dataType: 'json',
			        success: function(data){
			            // swal("Sent!", "Message has been sent.", "success");
			            submit_btn.html('Sent').prop('disabled', true);
			        },
			        error: function(data){
			        	// swal("Error!", "Something went wrong.", "error");
			        	submit_btn.html('Sent').prop('disabled', true);
			        }
			    });
	        });
	    });

	</script>
@endsection
