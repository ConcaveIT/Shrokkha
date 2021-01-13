@include('layouts.default.header')
<section class="hidden_section newspage"></div>
<style>
.wpo-mission-icon, .wpo-mission-icon-1, .wpo-mission-icon-2, .wpo-mission-icon-3, .wpo-mission-icon-4, .wpo-mission-content h2{
	text-align: center;
}	
</style>

<!-- Button trigger modal -->

  



<div class="wpo-breadcumb-area what_we_do">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-breadcumb-wrap">
                    <h2>About Us</h2>
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><span>About Us</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
  


<div class="container">
    <div class="row section_p_b section_p_t">
        <div class="col-12 text-center what_we who_we">
            <h1>Who We Are?</h1>
            <p>Shastho Shurokkha Foundation is a registered non-profit, social change maker, and    Foundation worked in the area of humanitarian responses, education, tree plantation and social awareness campaigns. With its evolving growth, strategic priorities and collaboration with stakeholders and national plans, we have revisited the strategic plan for the future in 2020. Our emphasis are on health,
                education, Climate Change, poverty alleviation, capacity building advocacy and research. Shastho Shurokkha Foundation gradually expanded its strategic priorities and coverage throughout the country with partners and collaborators. In addition to health, our creative strategies to establish primary and secondary school based clubs as Shastho Shurokkha Club for promoting health education, promotion of hygiene and nutrition and also peer education at community. We conduct community mobilization for addressing barriers, advocacy for supporting policy, programs and utilization of ICT and TV media for reaching the millions of target population for achieving national plan and the SDGs.
    
                Shastho Shurokkha Foundation (previously known as Ansary Memorial Foundation) initially started working in Sirajgonj district and gradually expanded its coverage to other districts in Bangladesh. SS Foundation has built the reputation of excellence in development & change maker organizations, connecting from root level to highest policy level.
            </p>
        </div>
    </div>
</div>



<div class="wpo-mission-area">
    <div class="container">
        <div class="row section_p_b section_p_t">
            <div class="col-12 text-center what_we who_we">
                <h1>Partners & Collaboration</h1>
                <p>Shastho Shurokkha Foundation believes in collaboration and partnership in its projects and programmes. It has proven experiences to work in partnership with Government, UN agencies, NGOs, INGOs, private sectors and media. In order to mobilize policy makers, politician, high officials, community leaders, opinion leaders, parents, local leaders and local administrators for policy issues Shastho Shurokkha Foundation developed network and communication with mutual respects and interest. We are open to build partnership under mutual understanding as it is the core value of Shastho Shurokkha Foundation.
                </p>
            </div>
        </div>
    </div>
</div>


{{-- <div class="wpo-case-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="wpo-case-wrap">
                    <div class="wpo-case-slider">
                        @if ($ourclients)
                        @foreach ($ourclients as $data)
                        <div class="wpo-case-single">
                            <div class="wpo-case-item">
                                <div class="wpo-case-img my_custom_size">
                                    <img src="{{ asset('uploads') }}/images/clients/{{$data->image}}" alt="">
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div> --}}

<script src="{{ asset('assets') }}/js/jquery.2.1.0.min.js"></script>
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
                    @php
                        $video = DB::table('our_clients')->where('status', 1)->orderBy('id', 'DESC')->get();
                    @endphp
                    @if ($video)
                    @foreach ($video as $data)
					<div class="item @if($loop->iteration == 1) active @endif">
						<div class="carousel-col">
							<div class="block img-responsive">
                                <a target="__blank" href="{{ $data->partner_link }}">
                                    <img  class="block_image_big" src="{{ asset('uploads') }}/images/clients/{{ $data->image }}" alt="">
                                </a>
                            </div>
						</div>
                    </div>
                    @endforeach
                    @endif
				</div>
			</div>
		</div>
	</div>
</div>


<div class="wpo-mission-area">
    <div class="container">
        <div class="row section_p_b">
            <div class="col-12 text-center what_we who_we">
                <h1>Research & Publication</h1>
                <p>Research & Development (R&D) are the key aspects of Shastho Shurokkha Foundation for introducing new interventions and evaluation of the existing projects and programs. There is a structural unit and expert panel within organization to conduct research in periodic manner. We believe in baseline KAP survey before giving intervention for measuring the baseline status and determine the indicators. Similarly, final KAP survey and evaluation conducts for tracking the changes including qualitative methods (FGD, KII).  Alongside, there are routine monitoring system and monthly reporting mechanism through web base application and ICT.
                </p>
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
@include('layouts.default.footer')