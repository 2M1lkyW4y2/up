<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function Catalog(){

        return view('test.Catalog');
    }
}