@include('layouts.default.header')
<section class="hidden_section"></div>


<div class="wpo-team-area-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-section-title">
                    {{-- <span>Meet Our Team</span> --}}
                    <h2>Governing Body</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @if ($ourvolunteers)
            @foreach ($ourvolunteers as $data)
            <div class="col-lg-4 col-md-4 col-sm-6 col-12 custom-grid">
                <div class="wpo-team-wrap mygobernig_body">
                    <div class="wpo-team-img">
                        <img src="{{ asset('uploads') }}/images/governing-body/{{$data->image}}" alt="">
                    </div>
                    <div class="wpo-team-content">
                        <div class="wpo-team-text-sub">
                            <h2>{{$data->name}}</h2>
                            <span>{{$data->profession}}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>
<!-- wpo-team-area end -->


@include('layouts.default.footer')