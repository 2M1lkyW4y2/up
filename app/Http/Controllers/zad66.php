<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Faker\Core\Color;
use Faker\Provider\ar_EG\Color as Ar_EGColor;

class zad66
{

public function show()
{
    return view ('test.zad66', ['arr' => [10, 12]]); 

   /* Пусть из действия в представление передается массив с числами. 
   Если количество элементов в этом массиве больше нуля, то выведите 
   на экран сумму этих элементов, а если количество элементов равно нулю, 
   то выведите сообщение об этом. */

} }