<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Faker\Core\Color;
use Faker\Provider\ar_EG\Color as Ar_EGColor;

class zad73
{

public function show()
{
    return view ('test.zad73', ['arr' => [16,36]]); 

   /* Модифицируйте предыдущую задачу так, 
   чтобы в пункты списка выводились квадратные 
   корни элементов массива */

} }