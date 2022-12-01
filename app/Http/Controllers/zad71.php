<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Faker\Core\Color;
use Faker\Provider\ar_EG\Color as Ar_EGColor;

class zad71
{

public function show()
{
    return view ('test.zad71', ['arr' => [4,6]]); 

   /* Передайте из действия в представление массив 
   с числами. Выведите этот массив в виде списка ul. */

} }