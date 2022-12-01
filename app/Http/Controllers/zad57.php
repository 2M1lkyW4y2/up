<?php 
namespace App\Http\Controllers; 
use App\Http\Controllers\Controller;
use Faker\Core\Color;
use Faker\Provider\ar_EG\Color as Ar_EGColor;

class zad57 extends Controller 
{ 
public function show() 
{ 
    return view ('test.zad57', ['p'=>['name' => 'Игорь', 'age' => 44, 'salary' => 50000]]);
} }