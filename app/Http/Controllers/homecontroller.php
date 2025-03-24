<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

class homecontroller extends Controller
{
    public function welcome(){
    return view('home.hello')
    ->with('name','Rayan')
    ->with('surname','Chicho')
    ->with('job','<b>DEV</b>')
    ->with('name','Rayan')
    ->with('hobbies',['TischTennis' , 'Swimming']);
}
}