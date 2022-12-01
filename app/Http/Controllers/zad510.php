<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Faker\Core\Color;
use Faker\Provider\ar_EG\Color as Ar_EGColor;

class zad510 extends Controller
{
public function show()
{
    $l= ['country' => 'Россия', 'city' => 'Москва'];
    return view ('test.zad510', ['location' =>$l]);
    // Пусть из действия в представление передается массив
    // $location (местоположение) с ключами country (страна),
    // city (город). Выведите каждый элемент этого массива в отдельном абзаце.
    // Сделайте так, чтобы, если не задана страна, то по умолчанию вывелась
    // Россия, а если не задан город, то по умолчанию вывелась Москва.
} }
