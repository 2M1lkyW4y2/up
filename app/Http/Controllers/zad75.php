<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Faker\Core\Color;
use Faker\Provider\ar_EG\Color as Ar_EGColor;

class zad75
{

public function show()
{
    return view ('test.zad75', ['arr' => ["пишу","код"]]); 

   /* Модифицируйте предыдущую задачу так, 
   чтобы на выводе к ключу прибавлялась единица. */

} }