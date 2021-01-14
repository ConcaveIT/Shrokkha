@include('layouts.default.header')
<section class="hidden_section newspage contact_page"></div>
<style>
#sub{
	outline:0;
	color:#fff;
	border-radius:25px;
}
.info-item h4{
    font-size: 15px;
    line-height: 24px;
}
.mymap{
	height: 550px;	
}
</style>

<div class="wpo-breadcumb-area">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="wpo-breadcumb-wrap">
					<h2>Contact Us</h2>
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><span>Contact</span></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- .wpo-breadcumb-area end -->

<!-- start wpo-contact-form-map -->
<section class="wpo-contact-form-map section-padding">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="row">
					<div class="col col-lg-6 col-md-6 col-sm-12 col-12">
						<div class="contact-form">
							<h2>Get In Touch</h2>
							<form action="{{ route('contact.data') }}" method="post">
								
								<div>
									@csrf
									<input type="text" class="form-control" name="first_name"  placeholder="First Name">
									<small class="text-danger">{{ $errors->first('first_name') }}</small>
								</div>
								<div>
									<input type="text" class="form-control" name="last_name" placeholder="Last Name">
									<small class="text-danger">{{ $errors->first('last_name') }}</small>
								</div>
								<div class="clearfix">
									<input type="email" class="form-control" name="email"  placeholder="Email">
									<small class="text-danger">{{ $errors->first('email') }}</small>
								</div>
								<div>
									<input type="text" class="form-control" name="phone"  placeholder="Phone">
									<small class="text-danger">{{ $errors->first('phone') }}</small>
								</div>
								<div>
									<textarea class="form-control" name="message" placeholder="Message..."></textarea>
									<small class="text-danger">{{ $errors->first('message') }}</small>
								</div>
								<div>
									<input id="sub" type="submit" class="btn btn-info btn_site" value="Message Send">
								</div>
							</form>
							<div class="row">
								<div class="col-md-12">
									@if(Session::has('message'))
										<p class="alert alert-success" style="margin-top:10px;">{{ Session::get('message') }}</p>
									@endif
								</div>
							</div>
						</div>                            
					</div>
					<div class="col col-lg-6 col-md-6 col-sm-12 col-12 mymap">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d912.6738831424364!2d90.40087762915824!3d23.793854026150527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7a43f98d5bd%3A0xd0e586ba06db8dbc!2sShastho%20Shurokkha%20Foundation!5e0!3m2!1sen!2sbd!4v1610534027364!5m2!1sen!2sbd" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
					</div>
				</div>

				<div class="wpo-contact-info">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6 col-12">
							<div class="info-item">
								<h4>House#77, (Level-4), Road#4, Block#C, Banani, Dhaka-1213, Bangladesh</h4>
								<div class="info-wrap">
									<div class="info-icon">
										<i class="ti-world"></i>
									</div>
									<div class="info-text">
										<span>Office Address</span>
									</div>
								</div>
							</div>
							</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-12">
							<div class="info-item">
								<h4>info@shasthoshurokkha.org </h4>
								<div class="info-wrap">
									<div class="info-icon-2">
										<i class="fi flaticon-envelope"></i>
									</div>
									<div class="info-text">
										<span>Official Mail</span>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-12">
							<div class="info-item">
								<h4>+8801784-507278,
									+88 02 9822217,   <br>
									+88 02 9822231</h4>

								<div class="info-wrap">
									<div class="info-icon-3">
										<i class="ti-headphone-alt"></i>
									</div>
									<div class="info-text">
										<span>Official Phone</span>
									</div>
								</div>
							</div>   
							</div>
						</div>
				</div>
			</div>
		</div>
	</div> <!-- end container -->
</section>
<!-- end wpo-contact-form-map -->
@include('layouts.default.footer')       