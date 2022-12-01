<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Faker\Core\Color;
use Faker\Provider\ar_EG\Color as Ar_EGColor;

class zad72
{

public function show()
{
    return view ('test.zad72', ['arr' => [4,6]]); 

   /* Модифицируйте предыдущую задачу так,
    чтобы в пункты списка выводились квадраты элементов массива. */

} }