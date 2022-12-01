<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Faker\Core\Color;
use Faker\Provider\ar_EG\Color as Ar_EGColor;

class zad65
{

public function show()
{
    return view ('test.zad65', ['age' => 14]); 

   /* Пусть из действия в представление передается возраст пользователя. Если возраст пользователя несовершеннолетний, 
   то выведите сообщение об этом. Для решения задачи воспользуйтесь директивой @unless. */
} }