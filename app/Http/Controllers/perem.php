<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class perem extends Controller 
{ 
public function show() 
{ 
return view('test.perem', ['var1' => 1, 'var2' => 2, 'var3' => 3]); 
} }