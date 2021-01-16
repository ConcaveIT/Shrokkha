@include('layouts.default.header')
<section class="hidden_section newspage"></div>
<style>
.block_image_big {
    height: 262px;
} 
@media (max-width: 767px) {
    .newspage{
        height: 240px;
    }
}   
</style>
<div class="container news_page">
    <div class="row">
        <div class="col-12">
            <div class="wpo-section-title">
                <h2>Latest News</h2>
            </div>
        </div>
    </div>
    <div class="row">
        @php
            $feeds = DB::table('con_social_feed')->where('status', 1)->orderBy('id', 'DESC')->paginate(6);
        @endphp
        @if ($feeds)
        @foreach ($feeds as $data)
        <div class="col-md-4">
            <div class="block img-responsive">
                <a href="{{ $data->link }}">
                    <img class="block_image" src="{{ asset('uploads') }}/images/social/{{ $data->icon_image }}" alt="">
                    <h4>{{ $data->title }}</h4>
                    @php        
                        $from = \Carbon\Carbon::createFromTimestamp(strtotime($data->created_at));
                        $to = \Carbon\Carbon::now();
                    @endphp
                    <span>{{ Carbon\Carbon::createFromTimestamp(strtotime($data->created_at))->diff(\Carbon\Carbon::now())->days }} days ago</span>
                    <p>{{  Str::limit($data->short_description, $limit = 100, $end = '') }}</p>
                    <img id="newspage" class="block_image_big newspage" src="{{ asset('uploads') }}/images/social/{{ $data->image }}" alt="">
                </a>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
@include('layouts.default.footer')