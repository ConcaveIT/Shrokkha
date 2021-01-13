@include('layouts.default.header')
<section class="hidden_section newspage"></div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="popup_doal modal_content" >

            </div>
        </div>
      </div>
    </div>
  </div>
<!--modal end-->

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
        <div class="row team_span">
            @if ($ourvolunteers)
            @foreach ($ourvolunteers as $data)
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 custom-grid">
                <div class="wpo-team-wrap mygobernig_body">
                    <div class="wpo-team-img">
                        <img src="{{ asset('uploads') }}/images/governing-body/{{$data->image}}" alt="">
                    </div>
                    <div class="wpo-team-content">
                        <div class="wpo-team-text-sub">
                            <h2>{{$data->name}}</h2>
                            <span>{{$data->profession}}</span>
                            <ul>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter"></i></a></li>
                                <li><a href="#"><i class="ti-google"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                            </ul>
                            <button data-id="{{$data->id}}" data-toggle="modal" data-target="#exampleModal" class="btn btn-info btn_site">Details</button>
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





<div class="wpo-team-area-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wpo-section-title">
                    {{-- <span>Meet Our Team</span> --}}
                    <h2>Team Member</h2>
                </div>
            </div>
        </div>
        <div class="row team_span">
            @if ($ourvolunteers)
            @foreach ($ourvolunteers as $data)
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 custom-grid">
                <div class="wpo-team-wrap mygobernig_body">
                    <div class="wpo-team-img">
                        <img src="{{ asset('uploads') }}/images/governing-body/{{$data->image}}" alt="">
                    </div>
                    <div class="wpo-team-content">
                        <div class="wpo-team-text-sub">
                            <h2>{{$data->name}}</h2>
                            <span>{{$data->profession}}</span>
                            <ul>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter"></i></a></li>
                                <li><a href="#"><i class="ti-google"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                            </ul>
                            <button data-id="{{$data->id}}" data-toggle="modal" data-target="#exampleModal" class="btn btn-info btn_site">Details</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</div>













<script>
$(document).on('click', '.btn_site', function(){
    var id = $(this).attr('data-id');
    $.ajax({
           type:'POST',
           url:'{{url("user-details")}}',
           data:{_token: "{{ csrf_token() }}", id:id},
           success:function(response){
              $('.modal_content').html(response);
           }
        });
});
</script>
@include('layouts.default.footer')