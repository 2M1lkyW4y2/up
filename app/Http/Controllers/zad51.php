<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class zad51 extends Controller 
{ 
public function show() 
{ 
return view('test.zad51', ['name' => 'Костя','age' => '18', 'salary' => '150000']); 
} }