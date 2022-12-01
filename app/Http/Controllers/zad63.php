<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Faker\Core\Color;
use Faker\Provider\ar_EG\Color as Ar_EGColor;

class zad63
{

public function show()
{
    return view ('test.zad63', ['d' => 3]); 

   /* Пусть из действия в представление передается номер дня недели. Сделайте так, чтобы, если номер дня недели соответствует выходному дню, то вывелось сообщение об этом, в противном случае выведите сообщение о том, что передан номер рабочего дня недели.*/
} }