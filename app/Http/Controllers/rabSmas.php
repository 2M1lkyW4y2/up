<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller;
use Faker\Core\Color;
use Faker\Provider\ar_EG\Color as Ar_EGColor;

class rabSmas extends Controller 
{ 
public function show() 
{ 
return view('test.rabSmas', ['arr' => [1,2]]); 
} }