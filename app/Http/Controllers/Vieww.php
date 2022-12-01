<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class Vieww extends Controller 
{ 
public function show() 
{ 
return view('test', ['var1' => '1', 'var2' => '2']); 
} }
