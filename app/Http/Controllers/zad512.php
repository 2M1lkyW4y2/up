<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Faker\Core\Color;
use Faker\Provider\ar_EG\Color as Ar_EGColor;

class zad512 extends Controller
{
public function show()
{
    return view ('test.zad512', ['str' => '<b>строка</b>']);

   /* Пусть из действия в представление 
   передаются переменные $year (год), 
   $month (месяц) и $day (день). 
   Сделайте так, чтобы, если какая-либо
    из этих переменных не задана, то вместо
    нее выведется текущее значение (текущий год, месяц или день).*/
} }