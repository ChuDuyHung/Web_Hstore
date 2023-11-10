<?php

namespace App\Http\Controllers;
use App\Models\Frontend;
use App\Models\Admin;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function indexAdmin(){
        $showCategory = Frontend::all();
        return view('Admin.index-admin', ['showCategory' => $showCategory]);

    }
    public function addProduct(Request $request, Admin $addProduct){
        // dd($request->all());
        $addProduct->product_name = $request->product_name;
        $addProduct->product_description = $request->product_description;
        $addProduct->product_price = $request->product_price;
        $addProduct->product_image = $request->product_image;
        $addProduct->id_category = $request->id_Category;
 
        $addProduct->save();   
        return redirect()->route('admin.showProduct');
    }

    public function showProduct(){
        $showProduct = Admin::all();
        return view('Admin.product-admin', compact('showProduct'));
    }

    public function editProduct(Request $request){
        $showProduct = Admin::where('id', $request->id )->get();
        

        return view('Admin.edit-product', compact('showProduct'));
    }
    public function postProduct(Request $request){
        // dd($request);

        $editProduct = Admin::find($request->id);
        $editProduct->product_name = $request->product_name;
        $editProduct->product_description = $request->product_mota;
        $editProduct->product_price = $request->product_price;
        $editProduct->product_image = $request->product_image;
        $editProduct->id_category = $request->id_category;
        
        $editProduct->save();   

        return redirect()->route('admin.showProduct');
    }

    public function deleteProduct(Request $request){
        $deleteProduct = Admin::where('id', $request->id);
        $deleteProduct->delete();

        return redirect()->back();
    }

}
