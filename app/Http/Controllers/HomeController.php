<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexRequest;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function __construct()
    {
        $this->middleware(['Chekuser1'])->only(['index','about']);
        // $this->middleware('Chekuser1')->only(['index','about'])->except('about');
    }
    public function index(){
        // return redirect()->route('redirect',['id'=>3])->with('id','4');
        // dd(response([1,2,3]));
        // return view('test');
        // return response([1,2,3])->header('Content-Type','text/plain');

        $path1 = storage_path('app/public/1.pdf');
        // dd(response()->file($path1));
        // return response()->download($path1,'22.txt');
        // return response()->file($path1);

        return response()->res('ali');
    }

    public function redirect(){
        return back()->withInput();
// dd(session());
//         return response('this is redirect');
    }

    public function st(){
        return new \stdClass();
        // return collect([1,2,3]);
            }
    public function postman(IndexRequest $request){
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
