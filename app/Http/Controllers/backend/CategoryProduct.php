<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\addCategoryProduct;
class CategoryProduct extends Controller
{
    public function add_category_product(){
        return view('admin/addCategoryProduct');
    }
    public function post_add_category_product(Request $request){
        $new=new addCategoryProduct();
        $new->nameProduct=$request->nameProduct;
        $new->pictureProduct=$request->pictureProduct;
        $new->priceProduct=$request->priceProduct;
        $new->describeProduct=$request->describeProduct;
        $new->save();
        return view('admin/addCategoryProduct');
    }


    public function all_category_product(){
        return view('admin/allCategoryProduct');
    }
}
