<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\Admin;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addCart(Request $request){
        $product_id = $request->product_id;
        $product_quantity = $request->num_product;
        $showProduct = Admin::where('id', $product_id)->get();
        // dd($product_quantity);

        return view('cart', compact('showProduct', 'product_quantity'));

    }

    public function addDonHang(Request $request){

        // dd($request);

        return 'Đặt hàng thành công';

    }
    // public function showCart(){

    //     return view('cart');

    // }
}
