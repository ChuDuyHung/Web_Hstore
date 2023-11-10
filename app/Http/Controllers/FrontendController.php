<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Frontend;

class FrontendController extends Controller
{
    public function index(){
        return view('index');
    }
    public function cart(){
        return view('cart');
    }

    public function showCategory(){
        $showProduct = Admin::all();
        $showCategory = Frontend::all();
        // dd($showProduct);
        
        return view('index', compact('showProduct', 'showCategory'));
    }
    public function showProduct(Request $request){
        // dd($request->id);
        $showCategory = Frontend::all();
        $showProduct = Admin::where('id_category', $request->id)
                            ->paginate(12)
                            ->withQueryString();

        // dd($showProduct);
        
        return view('product', compact('showProduct', 'showCategory'));
    }

    public function showProductDetail(Request $request){
        // dd($request->id);
        $showCategory = Frontend::all();
        $showProduct = Admin::paginate(5);
        $showProductDetail = Admin::where('id', $request->id)->get();


        return view('product-detail', compact('showProduct', 'showCategory', 'showProductDetail'));
    }





}
