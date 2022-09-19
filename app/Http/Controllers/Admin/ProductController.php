<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        // Sử dụng session checklogin
    }

    public function formAddProduct() {
        return view('admin/product/product_add');
    }

    public function handleAddProduct(){
        
    }
}
