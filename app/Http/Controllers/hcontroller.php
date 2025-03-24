<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hcontroller extends Controller
{
    public function index(){
        return view('index')
        ->with('name','Rayan')
        ->with('surname','Chicho')
        ->with('country','ge')
        ->with('job','<b>DEV</b>')
        ->with('name','Rayan')
        ->with('hobbies',['TischTennis' , 'Swimming']);
}}
