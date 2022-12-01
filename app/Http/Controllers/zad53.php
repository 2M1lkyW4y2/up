<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller;
use Faker\Core\Color;
use Faker\Provider\ar_EG\Color as Ar_EGColor;

class zad53 extends Controller 
{ 
public function show() 
{ 
return view('test.zad53', ['var1' => 1, 'var2' => 2, 'var3' => 3]); 
} }