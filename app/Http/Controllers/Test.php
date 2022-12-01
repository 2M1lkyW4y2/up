<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Test extends Controller
{
    public function show($num1,$num2) {
        return $num1+$num2;
    }
}

?>