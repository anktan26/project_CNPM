<?php

namespace App\Http\Controllers;
use App\addCategoryProduct;
use Illuminate\Http\Request;

class product extends Controller
{
    protected function show(){
        $new_product =addCategoryProduct::select('*')->get();
        return view('product',compact('product','new_product'));
    }
}

