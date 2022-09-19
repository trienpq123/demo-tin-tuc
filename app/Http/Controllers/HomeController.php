<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function index() {
        $title= 'HOC LAP TRINH FRAMEWORK';
        $content = 'LARAVEL 8.x';
        // $dataView = [
        //     'title' => $title,
        //     'content' => $content
        // ];

        return view('home',compact('title','content'));
        
    }

    public function getAdd(){
        return view('admin.product.product_add');
    }

    public function isUpperCase($value,$message,$fail){
        if($value != mb_strtoupper($value,'UTF-8')){
            $fail($message);
        }
    }

    public function postAdd(Request $request){

        $role = [ 
            'product_name' => 'required|min:6',
            function($attribute,$value,$fail){
                $this->isUpperCase($value,'Truong :attribute khong hop le',$fail);
            },
            'product_price' => 'required|integer'
        ];
        $message = [
            'product_name.required' => 'Vui long nhap ten day du'
        ];
        $attribute = [
            'product_name' => 'Ten san pham'
        ];
        // $request->validate([
        //     'product_name' => 'required|min:6',
        //     'product_price' => 'required|integer'
        // ]);

        $validator = Validator::make($request->all(),$role,$message,$attribute);
        if($validator->fails()){
            $validator->errors()->add('msg','Vui long kiem tral ai du lieu');
        }else{
            // Back trang
            return redirect()->route('product')->with('msg','Validate thanh cong');
        }
        return back()->withErrors($validator);
        // Xu ly vuec them du lieu vao database

    }
}
