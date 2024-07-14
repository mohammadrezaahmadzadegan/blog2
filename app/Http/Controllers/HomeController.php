<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index(){
        return 'this is index';
    }
    public function about(){
        return 'this is about';
    }
    public function foo(){
        include(public_path('../footer.php'));

   }
   public function goo(){
    return view('form',['name'=>request()->request->get('firstname')]) ;
   }
}
