<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function index()
    {
        $data = Product::all();
        return view('product',[ 'products' => $data]);
    }
    function detail($id)
    {
         $data = Product::find($id); //查找模組異常  
         return view('detail',['products' => $data]);
    } 
}
