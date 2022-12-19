<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function site(){
        $comic=\App\Models\price::orderby('id', 'asc' )->limit(2)->get();
        return view('test.sait',['comic'=>$comic]);
    } 
    
        public function Price(){
            $comic=\App\Models\price::all();
            return view('test.Price', ['comic'=>$comic,  "n"=>"id", "nap"=>"desc"]);
        }
        public function showSort($name, $nap)
        {
    
            $comic =\App\Models\price::orderBy($name, $nap)->get();
            return view('test.Price', ['comic' => $comic, "n"=>$name, "nap"=>$nap]);
    
        }
        public function showFilter($name)
        {
            $comic =\App\Models\price::where("publisher", $name)->get();
            return view('test.Price', ['prices' => $comic, "n"=>"name", "nap"=>"desc"]);
    
        }
        public function comics_id($id)
        {
            $comic =\DB::table('comics')->find($id);
            return view('comics_1', ['com' => $comic]);
    
        }
    }

