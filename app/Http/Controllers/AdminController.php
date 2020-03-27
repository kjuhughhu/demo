<?php

namespace App\Http\Controllers;



use App\Product;
use Illuminate\Http\Request;
use App\Category;
use App\Brand;
class AdminController extends Controller
{

//    admin
    public function adminn(){
        $categories = Product::all();
        return view('admin.category.index',['categories'=>$categories]);
    }



//    info cate
    public function categoryCreate(){
        return view('admin.category.created');
    }

    public function categoryStore(Request $request){
        $request->validate([
            "product_name"=>"required|string|unique:product",
            "product_desc"=>"required|string|unique:product",
            "age"=>"required|int|unique:product",
            "telephone"=>"required|string|unique:product",
        ]);
        try{
            Product::create([
               "product_name"=>$request->get("product_name"),
               "prooduct_desc"=>$request->get("product_desc"),
               "age"=>$request->get("age"),
               "telephone"=>$request->get("telephone"),
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }



    public function brandStore (){
        return view('admin.category.brandcreate');
    }

    public function categoryBrand(Request $request){
        $request->validate([
            "brand_name"=>"required|string|unique:brand"
        ]);
        try{
            Brand::create([
                "brand_name"=>$request->get("brand_name")
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }

    //edit
    public function categoryEdit($id){
        $category = Category::find($id);

        return view("admin.category.edit",['category'=>$category]);
    }

    public function categoryUpdate($id,Request $request){
        $category = Category::find($id);
        $request->validate([
            "category_name"=> "require|string|unique:category,".$id
        ]);
        try {
            $category->update([
               "category_name"=>$request->get('category_name')
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }

    public function brandEdit($id){
        $brand = Brand::find($id);
        return view("admin.category.editBrand",['brand'=>$brand]);
    }

    public function brandUpdate($id,Request $request){
        $brand = Brand::find($id);
        $request->validate([
            "brand_name"=> "require|string|unique:brand,".$id
        ]);
        try {
            $brand->update([
               "brand_name"=>$request->get('brand_name')
            ]);
        }catch (\Exception $e){
            return redirect()->back();
        }
        return redirect()->to("admin/category");
    }
}
