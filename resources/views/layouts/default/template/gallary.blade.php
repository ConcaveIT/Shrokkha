@include('layouts.default.header')
<section class="hidden_section newspage photos"></div>
  
<style>
*{padding:0;margin:0;text-decoration:none;list-style-type:none;font-family:'roboto', sans-serif;}
::selection{color:#fff;background-color:#ff6666;}
h2{margin-top:10px;color:#fff;text-align:center;letter-spacing:1px;}
p{color:#fff;text-align:center;}
.wrap-box{width:100%;height:auto;}
.gallery{display:inline-block;width:auto;height:auto;margin:70px 100px;}
.image-thumbnail{display:inline-block;width:auto;height:auto;background-color:#eee;margin:5px 4px;padding:5px;cursor:pointer;box-shadow:3px 2px 5px #444;transition:300ms ease;}
.image-thumbnail img{display:block;width:360px;height:200px;}
.gallery:hover .image-thumbnail:not(:hover){filter:blur(2px) grayscale(1);opacity:0.7;transform:scale(0.9);}
/*        Light Box Styling             */
.light-box{z-index: 99;position:fixed;top:0;left:0;visibility:hidden;opacity:0;width:100%;height:100%;background-color:rgba(72,73,74,0.7);transition:500ms ease;}
.light-box:target{visibility:visible;opacity:1;}
.edges{width:min-content;height:auto;background-color:#ccc;padding:20px;margin:120px auto;box-shadow:0 0 30px #333;}
.title{color:#222;fot-size:20px;text-align:center;}
.inner-image{position:relative;width:100%;height:100%;}
.inner-image img{max-width:700px;max-height:450px;}
.close-btn, .next-btn{float:right;}
.close-btn{padding:5px 0;}
.close-btn, .next-btn, .previous-btn{font-size:16px;}
span a{color:#444;}
.image-title{position:absolute;bottom:10px;font-size:16px;color:#222;background-color:transparent;border-bottom:5px solid #eee;padding:10px;cursor:pointer;opacity:0;transition:300ms ease;}
inner-image:hover .image-title{opacity:0.8;}  
</style>

<div class="container photo_filter">
    <div class="row">
        <div class="col-md-12">
            <ul>
                <li> <span class="btn btn-info btn_site">All</span> </li>
                <li> <span class="btn btn-info btn_site">Gallery-1</span> </li>
                <li> <span class="btn btn-info btn_site">Gallery-2</span> </li>
                <li> <span class="btn btn-info btn_site">Gallery-3</span> </li>
                <li> <span class="btn btn-info btn_site">Gallery-4</span> </li>
            </ul>
        </div>
    </div>
</div>
    
<div class="wrap-box">
    <ul class="gallery">
        <li class="image-thumbnail"><a href="#lightbox_1"><img src="http://www.anipedia.net/imagenes/elefantes-800x375.jpg" alt="Summer Season" class="image"></a></li>
        <li class="image-thumbnail"><a href="#lightbox_2"><img src="http://www.anipedia.net/imagenes/imagen-aguilas-800x375.jpg" alt="Summer Season" class="image"></a></li>
        <li class="image-thumbnail"><a href="#lightbox_3"><img src="http://www.anipedia.net/imagenes/conejos-800x375.jpg" alt="Summer Season" class="image"></a></li>
        <li class="image-thumbnail"><a href="#lightbox_4"><img src="http://www.anipedia.net/imagenes/gatos-800x375.jpg" alt="Summer Season" class="image"></a></li>
        <li class="image-thumbnail"><a href="#lightbox_5"><img src="http://www.anipedia.net/imagenes/leones-800x375.jpg" alt="Summer Season" class="image"></a></li>
        <li class="image-thumbnail"><a href="#lightbox_6"><img src="http://www.anipedia.net/imagenes/tigres-800x375.jpg" alt="Summer Season" class="image"></a></li>
    </ul>
</div>

<div class="light-box" id="lightbox_1">
    <div class="edges"><span class="close-btn"><a href="#">X</a></span>
        <p class="title">This is First Image</p>
        <div class="inner-image">
            <img src="http://www.anipedia.net/imagenes/elefantes-800x375.jpg" alt="image 01" class="swap"/>
            <span class="image-title">Click Here for Learn More...</span>
        </div>
        <span class="next-btn"><a href="#lightbox_2">Next</a></span>
        <span class="previous-btn"><a href="#lightbox_6">Previous</a></span>
    </div>
</div> <!-- Lightbox Image 01 -->


<div class="light-box" id="lightbox_2">
<div class="edges"><span class="close-btn"><a href="#">X</a></span>
    <p class="title">This is Second Image</p>
    <div class="inner-image">
        <img src="http://www.anipedia.net/imagenes/imagen-aguilas-800x375.jpg" alt="image 02"/>
            <span class="image-title">Click Here for Learn More...</span>
        </div>
            <span class="next-btn"><a href="#lightbox_3">Next</a></span>
            <span class="previous-btn"><a href="#lightbox_1">Previous</a></span>
    </div>
</div> <!-- Lightbox Image 02 -->
<div class="light-box" id="lightbox_3">
<div class="edges"><span class="close-btn"><a href="#">X</a></span>
    <p class="title">This is Thired Image</p>
    <div class="inner-image">
        <img src="http://www.anipedia.net/imagenes/conejos-800x375.jpg" alt="image 03"/>
            <span class="image-title">Click Here for Learn More...</span>
        </div>
            <span class="next-btn"><a href="#lightbox_4">Next</a></span>
            <span class="previous-btn"><a href="#lightbox_2">Previous</a></span>
    </div>
</div> <!-- Lightbox Image 03 -->
<div class="light-box" id="lightbox_4">
<div class="edges"><span class="close-btn"><a href="#">X</a></span>
    <p class="title">This is Fourth Image</p>
    <div class="inner-image">
        <img src="http://www.anipedia.net/imagenes/gatos-800x375.jpg" alt="image 4"/>
            <span class="image-title">Click Here for Learn More...</span>
        </div>
            <span class="next-btn"><a href="#lightbox_5">Next</a></span>
            <span class="previous-btn"><a href="#lightbox_3">Previous</a></span>
    </div>
</div> <!-- Lightbox Image 04 -->
<div class="light-box" id="lightbox_5">
<div class="edges"><span class="close-btn"><a href="#">X</a></span>
    <p class="title">This is Fifth Image</p>
    <div class="inner-image">
        <img src="http://www.anipedia.net/imagenes/leones-800x375.jpg" alt="image 05"/>
            <span class="image-title">Click Here for Learn More...</span>
        </div>
            <span class="next-btn"><a href="#lightbox_6">Next</a></span>
            <span class="previous-btn"><a href="#lightbox_4">Previous</a></span>
    </div>
</div> <!-- Lightbox Image 05 -->
<div class="light-box" id="lightbox_6">
<div class="edges"><span class="close-btn"><a href="#">X</a></span>
    <p class="title">This is Sixth Image</p>
    <div class="inner-image">
        <img src="http://www.anipedia.net/imagenes/tigres-800x375.jpg" alt="image 06"/>
            <span class="image-title">Click Here for Learn More...</span>
        </div>
            <span class="next-btn"><a href="#lightbox_1">Next</a></span>
            <span class="previous-btn"><a href="#lightbox_5">Previous</a></span>
    </div>
</div> <!-- Lightbox Image 06 -->

<script>
    $(document).ready(function() {
    $('.zoom-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        closeOnContentClick: false,
        closeBtnInside: false,
        mainClass: 'mfp-with-zoom mfp-img-mobile',
        image: {
            verticalFit: true,
            titleSrc: function(item) {
                return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
            }
        },
        gallery: {
            enabled: true
        },
        zoom: {
            enabled: true,
            duration: 300, // don't foget to change the duration also in CSS
            opener: function(element) {
                return element.find('img');
            }
        }
        
    });
});   
</script>


{{-- @if (!empty($ourgallary))
@foreach ($ourgallary as $data)

 @endforeach 
@endif  --}}
@include('layouts.default.footer')