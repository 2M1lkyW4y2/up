<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Faker\Core\Color;
use Faker\Provider\ar_EG\Color as Ar_EGColor;

class zad514 extends Controller
{
public function show()
{
    return view ('test.zad514', ['str' => '<b>строка</b>']); 

   /* С помощью комментариев Blade закомментируйте 
   какую-нибудь часть кода представления.*/
} }