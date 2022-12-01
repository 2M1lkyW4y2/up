<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Faker\Core\Color;
use Faker\Provider\ar_EG\Color as Ar_EGColor;

class zad61
{

public function show()
{
    return view ('test.zad61', ['age' => 18]); 

   /* С помощью комментариев Blade закомментируйте 
   какую-нибудь часть кода представления.*/
} }