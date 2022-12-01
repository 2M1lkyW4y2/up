<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Page2 extends Controller
{
    public function showAll() {
        return "Page3";
    }
    public function showM($id) {


        $pages = 
    [ 
        1 => 'страница 1', 
        2 => 'страница 2', 
        3 => 'страница 3', 
        4 => 'страница 4', 
        5 => 'страница 5', 
    ];

    if (isset($pages [$id])) {
        return $pages [$id];
        } 
    else {
        return "Нет такой страницы";
        }

    }
    
}

?>