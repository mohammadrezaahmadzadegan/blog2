<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function __construct()
    {
        $this->middleware('Chekuser1')->only(['index','about'])->except('about');
    }
    public function index(){
        return 'this is index';
    }
    public function po(Request $request){
        dd($request->file('name')[2]->storeAs('/images', $request->file('name')[2]->getClientOriginalName() ));
        dd(request()->file('name')[0]->getfilename());
        return view('post',['names'=>request()->all()]);
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
