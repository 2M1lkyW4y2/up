<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Faker\Core\Color;
use Faker\Provider\ar_EG\Color as Ar_EGColor;

class zad74
{

public function show()
{
    return view ('test.zad74', ['arr' => ["пишу","код"]]); 

   /* Передайте из действия в представление массив со строками. 
   Выведите этот массив в виде списка ul так, чтобы выводились и ключи, 
   и значения элементов массива. */

} }