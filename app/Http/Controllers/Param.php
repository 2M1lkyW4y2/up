<?php 

namespace App\Http\Controllers; 
use App\Http\Controllers\Controller; 
class Param extends Controller 
{ 
public function show($param1, $param2) 
{
 return $param1 . ' ' . $param2; 
} 
}

