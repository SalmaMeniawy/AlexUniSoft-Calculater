<?php

namespace AlexUniSoft\Calculater;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class CalculaterController extends Controller
{
    public function add($num1 , $num2){
        return $num1 + $num2;
    }
    public function  subtract($num1 , $num2){
        return $num1 - $num2;
    }
}
