
<section class="hero hero-style-1">
    <div class="hero-slider">
        @if ($allslider)
        @foreach ($allslider as $data)
        <div class="slide">
            <div class="container">
                <img src="{{ asset('uploads') }}/images/slider/{{ $data->image }}" alt class="slider-bg">
                <div class="row">
                    <div class="col col-md-6 slide-caption">
                        <div class="slide-title">
                            <h2> {{ $data->title }}</h2>
                        </div>
                        <div class="slide-subtitle">
                            {!! $data->short_description !!}
                        </div>
                        <div class="btns">
                            <a href="causes-single.html" class="theme-btn">{{ $data->btn_text }}</a>
                            {{-- <a href="about.html" class="theme-btn-s2">Know More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif

    </div>
</section>

<div class="wpo-about-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 colsm-12">
                <div class="wpo-about-text">
                    <div class="wpo-section-title">
                        <span>What we do?</span>
                        <h2>We Are In A Mission To Help The Helpless</h2>
                    </div>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there.

                        Thing embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,</p>
                    {{-- <a href="{{route('about')}}" class="theme-btn-s2 read_m2">Read More</a> --}}
                </div>
            </div>
            <div class="col-lg-6 col-md-6 colsm-12">
                <div class="wpo-about-img">
                    <img src="{{ asset('uploads') }}/images/about.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<section class="hero hero-style-1 my_custom_slider">
    <div class="hero-slider">
        @if ($allslider)
        @foreach ($allslider as $data)
        <div class="slide">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 colsm-12">
                        <div class="wpo-about-text">
                            <div class="wpo-section-title">
                                <span>What is our mission?</span>
                                <h2>Our Mission</h2>
                            </div>
                            <p>To empower communities and individuals with good health, poverty alleviation, literacy, and social justice. Our aim is to achieve large scale positive changes in health, education, social development and well being.</p>
                           
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 colsm-12">
                        <div class="wpo-about-img">
                            <img src="{{ asset('uploads') }}/images/16.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slide">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 colsm-12">
                        <div class="wpo-about-img">
                            <img src="{{ asset('uploads') }}/images/17.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 colsm-12">
                        <div class="wpo-about-text">
                            <div class="wpo-section-title">
                                <span>What is our vission?</span>
                                <h2>Our Vision</h2>
                            </div>
                            <p>We seek a world of hope, free from poverty & discrimination where people are empowered with dignity, good health and security.</p>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
        @endif
    </div>
</section>
<!-- media covarage start -->
<div class="wpo-team-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-section-title">
                    <span>Media</span>
                    <h2>Media Coverage</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 custom-grid">
                <div class="wpo-team-wrap">
                    <div class="wpo-team-img media_coverage_img">
                        <img src="{{ asset('uploads') }}/images/leage.jpg" alt="">
                    </div>
                    <div class="wpo-team-content media_coverage">
                        <div class="wpo-team-text-sub">
                            <img src="{{ asset('uploads') }}/images/prothomalo.jpg" alt="">
                            <h4>বাংলাদেশ আওয়ামী লীগ</h4>
                            <p>গ্লোবাল ইয়ং লিডার সামিটে আইসিটি প্রতিমন্ত্রীর প্রস্তাবনাঃ চতুর্থ শিল্প বিপ্লবে...</p>
                            <a target="__blank" href="https://albd.org/bn/articles/news/35696/%E0%A6%8F%E0%A6%95%E0%A6%AF%E0%A7%81%E0%A6%97%E0%A7%87%E0%A6%B0-%E0%A6%AA%E0%A6%A5%E0%A6%9A%E0%A6%B2%E0%A6%BE%" class="theme-btn btn_site_small">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 custom-grid">
                <div class="wpo-team-wrap">
                    <div class="wpo-team-img media_coverage_img">
                        <img src="{{ asset('uploads') }}/images/newsonebd_messi.jpg" alt="">
                    </div>
                    <div class="wpo-team-content media_coverage">
                        <div class="wpo-team-text-sub">
                            <img src="{{ asset('uploads') }}/images/prothomalo.jpg" alt="">
                            <h4>পেলেকে ছাড়িয়ে নতুন</h4>
                            <p>গ্লোবাল ইয়ং লিডার সামিটে আইসিটি প্রতিমন্ত্রীর প্রস্তাবনাঃ চতুর্থ শিল্প বিপ্লবে...</p>
                            <a target="__blank" href="https://newsonebd.com/%e0%a6%aa%e0%a7%87%e0%a6%b2%e0%a7%87%e0%a6%95%e0%a7%87-%e0%a6%9b%e0%a6%be%e0%a7%9c%e0%a6%bf%e0%a7%9f%e0%a7%87-%e0%a6%a8%e0%a6%a4%e0%a7%81%e0%a6%a8-%e0%a6%87%e0%a6%a4%e0%a6%bf%e0%a6%b9%e0%a6%be/" class="theme-btn btn_site_small">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 custom-grid">
                <div class="wpo-team-wrap">
                    <div class="wpo-team-img media_coverage_img">
                        <img src="{{ asset('uploads') }}/images/leage.jpg" alt="">
                    </div>
                    <div class="wpo-team-content media_coverage">
                        <div class="wpo-team-text-sub">
                            <img src="{{ asset('uploads') }}/images/prothomalo.jpg" alt="">
                            <h4>বাংলাদেশ আওয়ামী লীগ</h4>
                            <p>গ্লোবাল ইয়ং লিডার সামিটে আইসিটি প্রতিমন্ত্রীর প্রস্তাবনাঃ চতুর্থ শিল্প বিপ্লবে...</p>
                            <a target="__blank" href="https://albd.org/bn/articles/news/35696/%E0%A6%8F%E0%A6%95%E0%A6%AF%E0%A7%81%E0%A6%97%E0%A7%87%E0%A6%B0-%E0%A6%AA%E0%A6%A5%E0%A6%9A%E0%A6%B2%E0%A6%BE%" class="theme-btn btn_site_small">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 custom-grid">
                <div class="wpo-team-wrap">
                    <div class="wpo-team-img media_coverage_img">
                        <img src="{{ asset('uploads') }}/images/newsonebd_messi.jpg" alt="">
                    </div>
                    <div class="wpo-team-content media_coverage">
                        <div class="wpo-team-text-sub">
                            <img src="{{ asset('uploads') }}/images/prothomalo.jpg" alt="">
                            <h4>পেলেকে ছাড়িয়ে নতুন </h4>
                            <p>গ্লোবাল ইয়ং লিডার সামিটে আইসিটি প্রতিমন্ত্রীর প্রস্তাবনাঃ চতুর্থ শিল্প বিপ্লবে...</p>
                            <a target="__blank" href="https://newsonebd.com/%e0%a6%aa%e0%a7%87%e0%a6%b2%e0%a7%87%e0%a6%95%e0%a7%87-%e0%a6%9b%e0%a6%be%e0%a7%9c%e0%a6%bf%e0%a7%9f%e0%a7%87-%e0%a6%a8%e0%a6%a4%e0%a7%81%e0%a6%a8-%e0%a6%87%e0%a6%a4%e0%a6%bf%e0%a6%b9%e0%a6%be/" class="theme-btn btn_site_small">Read More</a>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
<!-- media covarage end -->

<!-- video start -->
<div class="wpo-about-video-area section-padding video_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-section-title">
                    <h2>Watch Our Latest Videos</h2>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-3 col-md-3">
                <div class="wpo-about-video-item">
                    <div class="wpo-about-video-img">
                        <img src="{{ asset('uploads') }}/images/video.png" alt="">
                        <div class="entry-media video-holder">
                            <a href="https://www.youtube.com/embed/OWnJrPKJjYc" class="video-btn" data-type="iframe">
                                <i class=""></i>
                            </a>
                        </div>
                    </div>
                    <div class="video_text">
                        <h4>It is a long established fact that a reader</h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="wpo-about-video-item">
                    <div class="wpo-about-video-img">
                        <img src="{{ asset('uploads') }}/images/video.png" alt="">
                        <div class="entry-media video-holder">
                            <a href="https://www.youtube.com/embed/OWnJrPKJjYc" class="video-btn" data-type="iframe">
                                <i class=""></i>
                            </a>
                        </div>
                    </div>
                    <div class="video_text">
                        <h4>It is a long established fact that a reader</h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="wpo-about-video-item">
                    <div class="wpo-about-video-img">
                        <img src="{{ asset('uploads') }}/images/video.png" alt="">
                        <div class="entry-media video-holder">
                            <a href="https://www.youtube.com/embed/OWnJrPKJjYc" class="video-btn" data-type="iframe">
                                <i class=""></i>
                            </a>
                        </div>
                    </div>
                    <div class="video_text">
                        <h4>It is a long established fact that a reader</h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3">
                <div class="wpo-about-video-item">
                    <div class="wpo-about-video-img">
                        <img src="{{ asset('uploads') }}/images/video.png" alt="">
                        <div class="entry-media video-holder">
                            <a href="https://www.youtube.com/embed/OWnJrPKJjYc" class="video-btn" data-type="iframe">
                                <i class=""></i>
                            </a>
                        </div>
                    </div>
                    <div class="video_text">
                        <h4>It is a long established fact that a reader</h4>
                        <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- video end -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="wpo-section-title">
                <h2>Social Feeds</h2>
            </div>
        </div>
    </div>
	<div class="row">
		<div class="col-12 col-md-12 col-centered">
			<div id="carousel" class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3500">
				<div class="carousel-inner">
					<div class="item active">
						<div class="carousel-col">
							<div class="block img-responsive">
                                <a href="#">
                                    <img class="block_image" src="{{ asset('uploads') }}/images/video.png" alt="">
                                    <h4>To empower communities</h4>
                                    <span>4 days ago</span>
                                    <p> ১০ জানুয়ারি জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমানের স্বদেশ প্রত্যাবর্তন দিবস</p>
                                    <img  class="block_image_big" src="{{ asset('uploads') }}/images/19.jpg" alt="">
                                </a>
                            </div>
						</div>
                    </div>
					<div class="item">
						<div class="carousel-col">
							<div class="block img-responsive">
                                <a href="#">
                                    <img class="block_image" src="{{ asset('uploads') }}/images/video.png" alt="">
                                    <h4>To empower communities</h4>
                                    <span>4 days ago</span>
                                    <p> ১০ জানুয়ারি জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমানের স্বদেশ প্রত্যাবর্তন দিবস</p>
                                    <img  class="block_image_big" src="{{ asset('uploads') }}/images/19.jpg" alt="">
                                </a>
                            </div>
						</div>
                    </div>
					<div class="item">
						<div class="carousel-col">
							<div class="block img-responsive">
                                <a href="#">
                                    <img class="block_image" src="{{ asset('uploads') }}/images/video.png" alt="">
                                    <h4>To empower communities</h4>
                                    <span>4 days ago</span>
                                    <p> ১০ জানুয়ারি জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমানের স্বদেশ প্রত্যাবর্তন দিবস</p>
                                    <img  class="block_image_big" src="{{ asset('uploads') }}/images/19.jpg" alt="">
                                </a>
                            </div>
						</div>
                    </div>
					<div class="item">
						<div class="carousel-col">
							<div class="block img-responsive">
                                <a href="#">
                                    <img class="block_image" src="{{ asset('uploads') }}/images/video.png" alt="">
                                    <h4>To empower communities</h4>
                                    <span>4 days ago</span>
                                    <p> ১০ জানুয়ারি জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমানের স্বদেশ প্রত্যাবর্তন দিবস</p>
                                    <img  class="block_image_big" src="{{ asset('uploads') }}/images/19.jpg" alt="">
                                </a>
                            </div>
						</div>
                    </div>
					<div class="item">
						<div class="carousel-col">
							<div class="block img-responsive">
                                <a href="#">
                                    <img class="block_image" src="{{ asset('uploads') }}/images/video.png" alt="">
                                    <h4>To empower communities</h4>
                                    <span>4 days ago</span>
                                    <p> ১০ জানুয়ারি জাতির পিতা বঙ্গবন্ধু শেখ মুজিবুর রহমানের স্বদেশ প্রত্যাবর্তন দিবস</p>
                                    <img  class="block_image_big" src="{{ asset('uploads') }}/images/19.jpg" alt="">
                                </a>
                            </div>
						</div>
					</div>
				</div>

				<!-- Controls -->
				<div class="left carousel-control">
					<a href="#carousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
				</div>
				<div class="right carousel-control">
					<a href="#carousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>

		</div>
	</div>
</div>
<!-- event start -->
<div class="wpo-event-area section-padding custom_event">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-section-title text-white">
                    <h2 style="color:#fff">Events</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @php
                use \Illuminate\Support\Str;

                $blog = DB::table('tb_pages')->where('status', 'enable')->where('pagetype', 'post')->orderBy('pageID', 'DESC')->get();
            @endphp
            @if ($blog)
            @foreach ($blog as $data)
            <div class="col-md-4 col-sm-6 col-12 custom-grid">
                <div class="wpo-event-item">
                    <div class="wpo-event-img blog_img">
                        <img src="{{ asset('uploads') }}/images/{{ $data->image }}" alt="">
                        <div class="thumb-text">
                            <span>{{ date("d", strtotime($data->created)) }}</span>
                            <span>{{ date("M", strtotime($data->created)) }}</span>
                        </div>
                    </div>
                    <div class="wpo-event-text">
                        <h2>{{ $data->title }}</h2>
                        <ul>
                            <li><i class="fa fa-clock-o" aria-hidden="true"></i>{{ date("h:i a", strtotime($data->created)) }}</li>
                            <li><i class="fi flaticon-pin"></i>{{ $data->metakey }}</li>
                        </ul>
                            <p>  {{  Str::limit($data->metadesc, $limit = 100, $end = '') }}</p>

                        <a href="{{url('posts/read/')}}/{{ $data->alias }}">Learn More...</a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
<!-- event end -->

<div class="container-fluid" id="clients">
    <div class="row">
        <div class="col-12">
            <div class="wpo-section-title">
                <h2>Our Partners</h2>
            </div>
        </div>
    </div>
	<div class="row">
		<div class="col-12 col-md-12 col-centered">
			<div id="carousel" class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3500">
				<div class="carousel-inner">
					<div class="item active">
						<div class="carousel-col">
							<div class="block img-responsive">
                                <a href="#">
            
                                    <img  class="block_image_big" src="{{ asset('uploads') }}/images/clients/1610179660-58354072.png" alt="">
                                </a>
                            </div>
						</div>
                    </div>
					<div class="item">
						<div class="carousel-col">
							<div class="block img-responsive">
                                <a href="#">
                                    <img  class="block_image_big" src="{{ asset('uploads') }}/images/clients/1610179649-48823779.png" alt="">
                                </a>
                            </div>
						</div>
                    </div>
					<div class="item">
						<div class="carousel-col">
							<div class="block img-responsive">
                                <a href="#">
                                    <img  class="block_image_big" src="{{ asset('uploads') }}/images/clients/1610179632-21004735.png" alt="">
                                </a>
                            </div>
						</div>
                    </div>
				</div>
			</div>
		</div>
	</div>
</div>
















<script>
    $('.carousel[data-type="multi"] .item').each(function() {
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
    
        for (var i = 0; i < 2; i++) {
            next = next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
    
            next.children(':first-child').clone().appendTo($(this));
        }
    }); 


    $('.carousel').carousel({
        interval: 3500,
    })


    </script>
    