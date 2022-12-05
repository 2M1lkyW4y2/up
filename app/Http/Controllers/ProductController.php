<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function site(){
        $comic=\App\Models\product::all();
        return view('test.sait',['comic'=>$comic]);
    }
}
