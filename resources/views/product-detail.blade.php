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
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Tìm kiếm sản phẩm</h2>
                        <form action="">
                            <input type="text" placeholder="TÌm kiếm sản phẩm...">
                            <input type="submit" value="TÌm kiếm">
                        </form>
                    </div>
    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Sản phẩm mới</h2>
                        <ul>       
                            @foreach($showProduct as $item)
                            <li><a href="">{{$item->product_name}}</a></li>
                            @endforeach  
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right"> 
                        <div class="row">
                            @foreach($showProductDetail as $item)
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="{{asset('template/img')}}/{{$item->product_image}}" alt="">
                                    </div>
                                    
                                </div>
                            </div>
                            @endforeach 
                            @foreach($showProductDetail as $item)
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name">{{$item->product_name}}</h2>
                                    <div class="product-inner-price">
                                        <ins>{{$item->product_price}}đ</ins>
                                    </div>    
                                    <form action="{{route('frontend.addCart')}}" class="cart" method="post">
                                        @csrf
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="num_product" min="1" step="1">
                                        </div>
                                        <button class="add_to_cart_button" type="submit">Thêm vào giỏ</button>
                                        <input type="hidden" value="{{$item->id}}" name="product_id">
                                    </form>               

                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Mô tả sản phẩm</h2>  
                                                <p>{{$item->product_description}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            @endforeach
                        </div>
                        
                    </div>                    
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