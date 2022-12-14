<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function site(){
        $comic=\App\Models\price::orderby('id', 'asc' )->limit(2)->get();
        return view('test.sait',['comic'=>$comic]);
    }
}
