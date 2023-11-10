@include('footerAndHeader.header')
<div class="mainmenu-area">
       <div class="container">
           <div class="row">
               <div class="navbar-header">
                   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                       <span class="sr-only">Toggle navigation</span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                       <span class="icon-bar"></span>
                   </button>
               </div> 
               <div class="navbar-collapse collapse">
                   <ul class="nav navbar-nav">
                       <li class="active"><a href="{{route('frontend.showCategory')}}">Trang chủ</a></li>
                       <li><a href="#">Liên hệ</a></li>
                       <li><a href="{{route('frontend.cart')}}">Giỏ hàng</a></li>
                        @foreach($showCategory as $item)
                        <li><a href="{{route('frontend.showProduct')}}?id={{$item->id}}" >{{$item->category_name}}</a></li>
                        @endforeach
                   </ul>
               </div>  
           </div>
       </div>
   </div> <!-- End mainmenu area -->  
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Sản phẩm</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
            @foreach($showProduct as $item)
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="{{asset('template/img')}}/{{$item->product_image}}" alt="">
                        </div>
                        <h2><a href="{{route('frontend.showProductDetail')}}?id={{$item->id}}">{{$item->product_name}}</a></h2>
                        <div class="product-carousel-price">
                            <ins>{{$item->product_price}}đ</ins>
                        </div>  
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" href="{{route('frontend.showProductDetail')}}?id={{$item->id}}" name = "id_product" value = "{{$item->id}}">Chi tiết</a>
                        </div>                     
                    </div>
                </div>
            @endforeach
            <div class="row">
                <div class="col-md-12">
                    {{ $showProduct->links() }}
                </div>
            </div>
        </div>
    </div>

    @include('footerAndHeader.footer')
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="{{asset('template/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('template/js/jquery.sticky.js')}}"></script>
    
    <!-- jQuery easing -->
    <script src="{{asset('template/js/jquery.easing.1.3.min.js')}}"></script>
    
    <!-- Main Script -->
    <script src="{{asset('template/js/main.js')}}"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="{{asset('template/js/bxslider.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('template/js/script.slider.js')}}"></script>
  </body>
</html>