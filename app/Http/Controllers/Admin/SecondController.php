<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{

    public function __construct(){
        $this -> middleware('auth')->except('showString2');
    }
// el 7yzoor el functions deh lazem ykon authenticated
    public function showString(){
        return 'static string';
    }
    public function showString1(){
        return 'static string1';
    }
    public function showString2(){
        return 'static string2';
    }
    public function showString3(){
        return 'static string3';
    }
}
