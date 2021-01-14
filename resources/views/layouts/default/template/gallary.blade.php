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
.image-thumbnail img{display:block;width:360px;height:200px;object-fit: cover;}
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
.active{
    background: #e2c600 !important;
    color: #000;
    border: #e2c600;    
}
</style>

<div class="container photo_filter">
    <div class="row">
        <div class="col-md-12">
            <ul>
                <li> <span class="btn btn-info btn_site all" onclick="fiter_gallery(0)">All</span> </li>
                <li> <span class="btn btn-info btn_site one" onclick="fiter_gallery(1)">Gallery-1</span> </li>
                <li> <span class="btn btn-info btn_site two" onclick="fiter_gallery(2)">Gallery-2</span> </li>
                <li> <span class="btn btn-info btn_site three" onclick="fiter_gallery(3)">Gallery-3</span> </li>
                <li> <span class="btn btn-info btn_site four" onclick="fiter_gallery(4)">Gallery-4</span> </li>
            </ul>
        </div>
    </div>
</div>
    
<div class="wrap-box">
    <ul class="gallery">
       
    </ul>
</div>





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




<script>
    $("document").ready(function() {
        $(".all").trigger('click');
    });



    function fiter_gallery(value){
        $(".btn_site").removeClass('active');
        if(value==0){
            $(".all").addClass('active');
        }else if(value==1){
            $(".one").addClass('active');
        }else if(value==2){
            $(".two").addClass('active');
        }else if(value==3){
            $(".three").addClass('active');
        }else if(value==4){
            $(".four").addClass('active');
        }

        var id = value;
        $.ajax({
            type:'POST',
            url:'{{url("photo-filter")}}',
            data:{_token: "{{ csrf_token() }}", id:id},
            success:function(response){
                 $('.gallery').html(response);
            }
        });
    }
    </script>
@include('layouts.default.footer')