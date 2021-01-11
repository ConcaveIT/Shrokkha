@include('layouts.default.header')	

	<section class="inner-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 sec-title colored text-center">
					<h2>WE'RE HERE TO HELP!</h2>
					<ul class="breadcumb">
						<li><a href="index-2.html">Home</a></li>
						<li><i class="fa fa-angle-right"></i></li>
						<li><span>Contact</span></li>
					</ul>
					<span class="decor"><span class="inner"></span></span>
				</div>
			</div>
		</div>
	</section>


	<section class="contact-content sec-padding">
		<div class="container">
			<div class="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.0498090351966!2d90.41536031498192!3d23.78124058457424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c72f7d45db81%3A0x5b723a27a97d4388!2sVirtual%20Market%20Solution%20Limited-VMSL!5e0!3m2!1sen!2sbd!4v1594159950446!5m2!1sen!2sbd" width="100%" height="350px" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
			<div class="row">
				<div class="col-md-8">
					<h2>Contact Form</h2>
					
					<form action="{{ route('contact.data') }}" class="contact-form" id="contact-page-contact-form" method="post">
					    @csrf
						<div class="col-md-6">
							<input type="text" name="name" placeholder="Name">
							<small class="text-danger">{{ $errors->first('name') }}</small>
							<input type="text" name="email" placeholder="Email">
							<small class="text-danger">{{ $errors->first('email') }}</small>
							<input type="text" name="phone" placeholder="Phone">
							<small class="text-danger">{{ $errors->first('phone') }}</small>
						</div>
						<div class="col-md-6">
							<textarea name="message" placeholder="Message" cols="30" rows="10"></textarea>
							<small class="text-danger">{{ $errors->first('message') }}</small>
						</div>
						<div class="col-md-12"  style="margin-top:10px;"><button class="thm-btn" type="submit">Send</button></div>
					</form>
					<div class="row">
        				<div class="col-md-12">
                            @if(Session::has('message'))
                                <p class="alert alert-success" style="margin-top:10px;">{{ Session::get('message') }}</p>
                            @endif
                        </div>
                    </div>
				</div>
				<div class="col-md-4">
					<h2>Address</h2>
					<ul class="contact-info">
						<li>
							<div class="icon-box">
								<div class="inner">
									<i class="fa fa-map-marker"></i>
								</div>
							</div>
							<div class="content-box">
								<h4>Address</h4>
								<p>House- 54/A (2nd Floor), Road-132, Gulshan Circle-1,
									Dhaka -1212, Bangladesh</p>
							</div>
						</li>
						<li>
							<div class="icon-box">
								<div class="inner">
									<i class="fa fa-phone"></i>
								</div>
							</div>
							<div class="content-box">
								<h4>Phone</h4>
								<p>HP: +880 1730577301-02<br>LP: +88 02 9888836</p>
							</div>
						</li>
						<li>
							<div class="icon-box">
								<div class="inner">
									<i class="fa fa-envelope-o"></i>
								</div>
							</div>
							<div class="content-box">
								<h4>Email</h4>
								<p>info@socialvoice.foundation</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
@include('layouts.default.template.sections.client_section')
@include('layouts.default.footer')