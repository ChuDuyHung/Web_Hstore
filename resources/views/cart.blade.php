@include('footerAndHeader.header')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Giỏ Hàng</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">                    

                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title"></h2>

                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="post" action="{{route('frontend.addDonHang')}}">
                            @csrf
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">Ảnh</th>
                                            <th class="product-thumbnail">Tên sản phẩm</th>
                                            <th class="product-name">Giá sản phẩm</th>
                                            <th class="product-price">Số lượng</th>
                                            <th class="product-subtotal">Tổng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($showProduct as $item)
                                        <tr class="cart_item">
    
                                            <td class="product-thumbnail">
                                                <a href=""><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="{{asset('template/img')}}/{{$item->product_image}}"></a>
                                            </td>

                                            <td class="product-name">
                                                <a  href="">{{$item->product_name}}</a> 
                                            </td>

                                            <td class="product-price">
                                                <span class="amount">{{$item->product_price}}</span> 
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                <a name="quantity_product" href="">{{$product_quantity}}</a> 
                                                </div>
                                            </td>
                                            <input type="hidden" value="{{$item->id}}" name="product_id">

                                            <td class="product-subtotal">
                                                <span name="total" class="amount">{{$item->product_price*$product_quantity}}</span> 
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="actions" colspan="6">
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>


                            <div class="cart-collaterals">

                                <p class="form-row form-row-wide"><input type="text" id="" name="name" placeholder="Họ và tên" value="" class="input-text"> </p>

                                <p class="form-row form-row-wide"><input type="text" id="" name="address" placeholder="Địa chỉ" value="" class="input-text"> </p>

                                <p class="form-row form-row-wide"><input type="text" id="" name="sdt" placeholder="Số điện thoại" value="" class="input-text"></p>


                                <p><button class="button" value="1"  type="submit">Đặt hàng</button></p>

                                </section>
                            </form>


                            </div>
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
  </body>
</html>