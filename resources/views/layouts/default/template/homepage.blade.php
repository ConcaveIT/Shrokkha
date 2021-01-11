        <!-- end of header -->
        <!-- start of hero -->
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
        <!-- end of hero slider -->
        <!-- wpo-mission-area start -->
        <div class="wpo-mission-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="wpo-section-title">
                            <span>What We Do?</span>
                            <h2>We Are In A Mission To Help The Helpless</h2>
                        </div>
                    </div>
                </div>
                <div class="wpo-mission-wrap">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-12 custom-grid">
                            <div class="wpo-mission-item">
                                <div class="wpo-mission-icon">
                                   <i class="fi flaticon-key"></i>
                                </div>
                                <div class="wpo-mission-content">
                                    <h2>Key Focus Area</h2>
                                    <p>1. Personal Hygiene including menstrual hygiene</p>
                                    <p>2. Adolescent Reproductive & Sexual Health</p>
                                </div>
                                <a href="{{route('what-we-do')}}" class="theme-btn-s2 read_m">Read More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12 custom-grid">
                            <div class="wpo-mission-item">
                                <div class="wpo-mission-icon-2">
                                    <i class="fi flaticon-food-and-restaurant"></i>
                                </div>
                                <div class="wpo-mission-content">
                                    <h2>Key Strategies</h2>
                                    <p>1. Involve Adolescents through Shastho Shurokkha Club at school and community.</p>
                                    <p>2. Capacity building through training.</p>
                                    <a href="{{route('what-we-do')}}" class="theme-btn-s2 read_m">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12 custom-grid">
                            <div class="wpo-mission-item">
                                <div class="wpo-mission-icon-3">
                                    <i class="fi flaticon-book"></i>
                                </div>
                                <div class="wpo-mission-content">
                                    <h2>Our Activities</h2>
                                    <p>1. Establishing School Based Shastho Shurokkha  Club  </p>
                                    <p>2. Awareness Campaign</p>
                                    <a href="{{route('what-we-do')}}" class="theme-btn-s2 read_m">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-12 custom-grid">
                            <div class="wpo-mission-item">
                                <div class="wpo-mission-icon-4">
                                    <i class="fi flaticon-care"></i>
                                </div>
                                <div class="wpo-mission-content">
                                    <h2>Target Population</h2>
                                    <p>1. Primary and Secondary School going children</p>
                                    <p>2. Non-school going children</p>
                                    <a href="{{route('what-we-do')}}" class="theme-btn-s2 read_m">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- wpo-mission-area end -->
        <!-- wpo-about-area start -->
        <div class="wpo-about-area section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 colsm-12">
                        <div class="wpo-about-text">
                            <div class="wpo-section-title">
                                <span>What is our mission?</span>
                                <h2>Our Mission</h2>
                            </div>
                            <p>To empower communities and individuals with good health, poverty alleviation, literacy, and social justice. Our aim is to achieve large scale positive changes in health, education, social development and well being.</p>
                            <a href="{{route('about')}}" class="theme-btn-s2 read_m2">Read More</a>
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

        <div class="wpo-about-area section-padding">
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
                            <a href="{{route('about')}}" class="theme-btn-s2 read_m2">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="wpo-about-video-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="wpo-about-video-item text-center">

                            <div class="wpo-about-video-img">
                                <img src="{{ asset('uploads') }}/images/video.png" alt="">
                                <div class="entry-media video-holder">
                                    <a href="https://www.youtube.com/embed/OWnJrPKJjYc" class="video-btn" data-type="iframe">
                                        <i class=""></i>
                                    </a>
                                </div>
                            </div>
                            <h2>Watch Our Latest <span>Activities</span></h2>
                            <p>We educate and raise awareness on healthy lifestyle and practices at home and public places emphasizing on reproductive and sexual health, nutrition, personal health, hygiene and mental health. We also work extensively on Universal Health Coverage and SDGs which include maternal and child mortality, adolescent health and health system strengthening. We also raise community awareness on environmental sustainability such as tree plantation and humanitarian response. We address key issues such as drug abuse, early marriage, violence against women, health and safety for all. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


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

