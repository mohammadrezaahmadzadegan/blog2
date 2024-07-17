<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexRequest;
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
    public function postman(IndexRequest $request,$id){
        return  $request->all();
    //    return $request->has('a')?'yes':'no';
    }
    public function re(IndexRequest $request){
var_dump($request->all());
        return $request->all();
    }

    public function po(Request $request){
        $rr = $request->validate([
            'name' => 'required|array',
            'fname' => 'date|before:2018-01-01',
            'lname' => 'required|integer|max:30'        ]);
        return $rr;

        // dd($request->files);
        // dd($request);
        // dd($request->file('name')[2]->storeAs('/images', $request->file('name')[2]->getClientOriginalName() ));

        // dd(request()->file('name')[0]->getfilename());
        // return view('post',['names'=>request()->all()]);
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
