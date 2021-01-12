
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




<!-- wpo-event-area start -->
<div class="wpo-event-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-section-title">
                    <span>Our Events</span>
                    <h2>Upcoming Events</h2>
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
<!-- wpo-event-area end -->

