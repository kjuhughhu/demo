<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function login(){
        return view('login');
    }

    public function home(){
        $newests = Product::take(3)->orderBy('created_at','desc')->get();
        $max_price = Product::take(3)->orderBy('price','desc')->get();
        $min_price = Product::take(3)->orderBy('price','asc')->get();
        return view("home",['max_price'=> $max_price,'newests'=>$newests,'min_price'=>$min_price]);
    }

    public function product($id){
        $product =Product::find($id); //tra ve 1 object theo id
        $category_product= Product::where("category_id",$product->category_id)->where('id',"!=",$product->id)->take(10)->get();
        $brand_product= Product::where("brand_id",$product->brand_id)->where('id',"!=",$product->id)->take(10)->get();
        return view('product',['product'=>$product,'category_product'=>$category_product,'brand_product'=>$brand_product]);
    }

    public function listproduct(){
        $listproduct = Product::all()->take(6);
        return view('listproduct',['listproduct'=>$listproduct]);
    }

    public function categorypr($id){
        $category = Category::find($id);
//        $category->Products;// lay tat ca product cua category
//        $categoryprs = Product::where("category_id",$id)->take(6)->get(); // neu muon kay 1 so luong nhat dinh
        return view("categorypr",['category'=>$category]);
    }

    public function brands($id){
        $brands = Brand::find($id);
//        $brand = Product::where("category_id",$id)->take(6)->orderBy('created_at','desc')->get();
        return view("brandpr",['brands'=>$brands]);
    }

    public function shopping($id){
        $product = Product::find($id);
        $product->update([
            "quantity"=>$product->quantity-1
        ]);
        return redirect()->to("product/{$product->id}");
    }

}
