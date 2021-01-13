        <nav class="navigation navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="open-btn">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    @if ($setting->logo)
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ url('/') }}/uploads/images/{{ $setting->logo }}" alt="Logo unload"/>
                    </a>
                    @else
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ url('/') }}/uploads/images/logo.png" alt="Logo unload"/>
                    </a>
                    @endif

                </div>
                <div id="navbar" class="navbar-collapse collapse navbar-right navigation-holder">
                    <button class="close-navbar"><i class="ti-close"></i></button>
                    <ul class="nav navbar-nav">
                        <li class="menu-item-has-children">
                            <a href="{{url('/')}}">Home</a>
        
                        </li>
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('what-we-do')}}">What We Do</a></li>
                        <li><a href="{{ route('team') }}">Team</a></li>
                        
                        {{-- <li><a href="{{route('donation')}}">Donation</a></li> --}}
                        
                        <li class="menu-item-has-children">
                            <a href="#">Media</a>
                            <ul class="sub-menu">
                                <li><a href="{{url('/')}}/news">News</a></li>
                                <li><a href="{{ route('full.gallery') }}">Photos</a></li>
                                <li><a href="#">Videos</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                        <li><a href="contact.html"> <span class="btn btn-success site_btn donate_btn">Donate Now</span> </a></li>
                    </ul>
                </div><!-- end of nav-collapse -->
            </div><!-- end of container -->
        </nav>