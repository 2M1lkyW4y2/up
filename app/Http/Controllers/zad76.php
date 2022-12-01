<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Faker\Core\Color;
use Faker\Provider\ar_EG\Color as Ar_EGColor;

class zad76
{

public function show()
{
    return view ('test.zad76', ['arr' => [-5,42]]); 

   /* Модифицируйте предыдущую задачу так, 
   чтобы на выводе к ключу прибавлялась единица. */

} }