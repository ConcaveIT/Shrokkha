@include('layouts.default.header')
<section class="hidden_section"></div>
<style>
.wpo-mission-icon, .wpo-mission-icon-1, .wpo-mission-icon-2, .wpo-mission-icon-3, .wpo-mission-icon-4, .wpo-mission-content h2{
	text-align: center;
}	
</style>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title" id="exampleModalLabel">Our Activities</h2>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="wpo-mission-content">
                <p>1. Establishing School Based Shastho Shurokkha  Club  </p>
                <p>2. Training and Capacity building</p>
                <p>3. Peer Education</p>
                <p>4. Tree Plantation</p>
                <p>5. Community Mobilization</p>
                <p>6. Advocacy</p>
                <p>7. Leadership Development</p>
                <p>8. Awareness Campaign</p>
                <p>9. Research and Development  </p>
            </div>
        </div>
      </div>
    </div>
  </div>








<div class="wpo-breadcumb-area what_we_do">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>What We Do</h2>
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><span>What We Do</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
  



<section class="hero hero-style-1 my_custom_slider what_page">
    <div class="hero-slider">

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
    </div>
</section>


<div class="wpo-mission-area section_p_b">

    <div class="container">



        <div class="row section_p_t">
            <div class="col-12 text-center what_we">
                    <h1>What We Do?</h1>
                   <p>We educate and raise awareness on healthy lifestyle and practices at home and public places emphasizing on reproductive and sexual health, nutrition, personal health, hygiene and mental health. We also work extensively on Universal Health Coverage and SDGs which include maternal and child mortality, adolescent health and health system strengthening. We also raise community awareness on environmental sustainability such as tree plantation and humanitarian response. We address key issues such as drug abuse, early marriage, violence against women, health and safety for all.</p>
            </div>
        </div>

        <div class="wpo-mission-wrap">
            <div class="row">
                <div class="col-md-2 col-sm-6 col-12 custom-grid">
                    <span data-toggle="modal" data-target="#exampleModal">
                    <div class="wpo-mission-item  what_we_do_left icon_design" data-toggle="modal">
                        <div class="wpo-mission-icon">
                           <i class="fi flaticon-key"></i>
                        </div>
                        <div class="wpo-mission-content">
                            <h2>Key Focus Area</h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-sm-6 col-12 custom-grid">
                    <span data-toggle="modal" data-target="#exampleModal">
                    <div class="wpo-mission-item  what_we_do_left icon_design">
                        <div class="wpo-mission-icon-2">
                            <i class="fi flaticon-food-and-restaurant"></i>
                        </div>
                        <div class="wpo-mission-content">
                            <h2>Key Strategies</h2>
                        </div>
                    </div>
                </span>
                </div>
                <div class="col-md-2 col-sm-6 col-12 custom-grid">
                    <span data-toggle="modal" data-target="#exampleModal">
                    <div class="wpo-mission-item  what_we_do_left icon_design">
                        <div class="wpo-mission-icon-3">
                            <i class="fi flaticon-book"></i>
                        </div>
                        <div class="wpo-mission-content">
                            <h2>Our Activities</h2>
                        </div>
                    </div>
                    </span>
                </div>
                <div class="col-md-2 col-sm-6 col-12 custom-grid">
                    <span data-toggle="modal" data-target="#exampleModal">
                    <div class="wpo-mission-item  what_we_do_left icon_design target_Population">
                        <div class="wpo-mission-icon-4">
                            <i class="fi flaticon-care"></i>
                        </div>
                        <div class="wpo-mission-content">
                            <h2>Target Population</h2>
                        </div>
                    </div>
                    </span>
                </div>
                <div class="col-md-2 col-sm-6 col-12 custom-grid">
                    <span data-toggle="modal" data-target="#exampleModal">
                    <div class="wpo-mission-item  what_we_do_left icon_design">
                        <div class="wpo-mission-icon">
                           <i class="fi flaticon-school"></i>
                        </div>
                        <div class="wpo-mission-content">
                            <h2>School Based</h2>
                        </div>
                    </div>
                    </span>
                </div>
                <div class="col-md-2 col-sm-6 col-12 custom-grid">
                    <span data-toggle="modal" data-target="#exampleModal">
                    <div class="wpo-mission-item  what_we_do_left icon_design">
                        <div class="wpo-mission-icon-3">
                            <i class="fi flaticon-book"></i>
                        </div>
                        <div class="wpo-mission-content">
                            <h2>Our Activities</h2>
                        </div>
                    </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>





@include('layouts.default.footer')