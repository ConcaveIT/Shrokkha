	<div class="wpo-ne-footer">

	    <!-- start wpo-site-footer -->
	    <footer class="wpo-site-footer">
	        <div class="wpo-upper-footer">
	            <div class="container">
	                <div class="row">
	                    <div class="col col-lg-3 col-md-3 col-sm-6">
	                        <div class="widget about-widget">
	                            <div class="logo widget-title">
	                        
				                    <a href="{{ url('/') }}">
				                        <img src="{{ url('/') }}/uploads/images/logo2.png" alt="Logo unload"/>
				                    </a>

	                            </div>
	                            <p>To empower communities and individuals with good health, poverty alleviation, literacy, and social justice.</p>
	                            <ul>
	                                <li><a href="https://www.facebook.com/shasthoshurokkha"><i class="ti-facebook"></i></a></li>
	                                <li><a href="https://twitter.com/shasthosurokkha"><i class="ti-twitter-alt"></i></a></li>
	                                <li><a href="#"><i class="ti-instagram"></i></a></li>
	                                <li><a href="#"><i class="ti-google"></i></a></li>
	                            </ul>
	                        </div>
	                    </div>
	                    <div class="col col-lg-3 col-md-3 col-sm-6">
	                        <div class="widget link-widget resource-widget footer_blog">
	                            <div class="widget-title">
	                                <h3>Upcoming Events</h3>
	                            </div>

			                    @php
			                        use \Illuminate\Support\Str;

			                        $blog = DB::table('tb_pages')->where('status', 'enable')->where('pagetype', 'post')->orderBy('pageID', 'DESC')->limit('2')->get();
			                    @endphp
			                    @if ($blog)
			                    	@foreach ($blog as $data)
			                            <div class="news-wrap">
			                                <div class="news-img">
			                                	<a href="{{url('posts/read/')}}/{{ $data->alias }}">
			                                   <img src="{{ asset('uploads') }}/images/{{ $data->image }}" alt="">
			                               		</a>
			                                </div>
			                                <div class="news-text">
			                                    <a href="{{url('posts/read/')}}/{{ $data->alias }}"><h3>{{ $data->title }}</h3></a>
			                                    <span>{{ date("d", strtotime($data->created)) }} {{ date("M", strtotime($data->created)) }}, {{ date("Y", strtotime($data->created)) }}</span>
			                                </div>
			                            </div>
			                    	@endforeach
			                    @endif

	                        </div>
	                    </div>
	                    <div class="col col-lg-2 col-md-3 col-sm-6">
	                        <div class="widget link-widget">
	                            <div class="widget-title">
	                                <h3>Useful Links</h3>
	                            </div>
	                            <ul>
	                                <li><a href="{{url('/')}}">Home</a></li>
	                                <li><a href="{{route('about')}}">About Us</a></li>
	                                <li><a href="{{route('what-we-do')}}">What We Do</a></li>
	                                <li><a href="{{ route('donation') }}">Donation</a></li>
	                                <li><a href="#">Contact Us</a></li>
	                            </ul>
	                        </div>
	                    </div>
	                    <div class="col col-lg-3 col-lg-offset-1 col-md-3 col-sm-6">
	                        <div class="widget market-widget wpo-service-link-widget">
	                            <div class="widget-title">
	                                <h3>Contact </h3>
	                            </div>
	                            <div class="contact-ft">
	                                <ul>
	                                    <li><i class="fi flaticon-pin"></i>House#77, (Level-4), Road#4, Block#C, Banani, Dhaka-1213, Bangladesh</li>
	                                    <li><i class="fi flaticon-call"></i>+8801784-507278</li>
	                                    <li><i class="fi flaticon-envelope"></i>info@shasthoshurokkha.org</li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div> <!-- end container -->
	        </div>
	        <div class="wpo-lower-footer">
	            <div class="container">
	                <div class="row">
	                    <div class="col col-xs-12">
	                        <p class="copyright">© 2020 Shastho Shurokkha Foundation. All rights reserved. Designed by <a target="_blank" href="https://vmsl.com.bd/">VMSL</a></p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </footer>
	    <!-- end wpo-site-footer -->
	</div>
</div>
<!-- end of page-wrapper -->
<!-- All JavaScript files
================================================== -->
<script src="{{ asset('assets') }}/js/jquery.min.js"></script>
<script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
<!-- Plugins for this template -->
<script src="{{ asset('assets') }}/js/jquery-plugin-collection.js"></script>
<!-- Custom script for this template -->
<script src="{{ asset('assets') }}/js/script.js"></script>
</body>

</html>