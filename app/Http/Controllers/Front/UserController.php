<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
   public function showUserName(){
       return 'mohmed behery';
   }

   public function getArrayIndex(){
       $data=[];
       $data['id']=5;
       $data['name']='Zizo';
       $data['age']=24;
       return view('welcome',$data);
   }
   public function getObjIndex(){
 
    $obj = new \stdClass();
    $obj -> string = 'mustafa';
    $obj -> ages = 25;
    $obj -> gender = 'male';
    return view('welcome',compact('obj'));
}
}
