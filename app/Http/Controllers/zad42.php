<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class zad42 extends Controller 
{ 
public function show() 
{ 
return view('test.test', ['name' => 'Милана','surname' => 'Московских']); 
} }