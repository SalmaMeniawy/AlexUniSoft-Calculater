<?php
Route::get('test',function(){
    return "Hello from AlexUniSoft new package";
});
Route::get('add/{num1}/{num2}','AlexUniSoft\Calculater\CalculaterController@add');
Route::get('sub/{num1}/{num2}','AlexUniSoft\Calculater\CalculaterController@subtract');