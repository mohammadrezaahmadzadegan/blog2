<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

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

        // $path1 = storage_path('app/public/1.pdf');
        // dd(response()->file($path1));
        // return response()->download($path1,'22.txt');
        // return response()->file($path1);

        // return response()->res('ali');

        // Log::info('this is log1');
        // session()->put('name1','mohammadreza');
        // session(['name'=>'ali']);
        // echo 'this is index page';
        // $resulte = DB::connection()->table('tbl1')->get();
// if(!empty($id)){
//     // $resulte = DB::select("select * from tbl1 where id='{$id}'");
//     // $resulte = DB::select("select * from tbl1 where id=?",[$id]);
//     $resulte = DB::select("select * from tbl1 where id=:id",[$id]);
//     return view('users',['users'=>$resulte]);
// }else{
//     $resulte = DB::select("select * from tbl1");
//     return view('users',['users'=>$resulte]);
// }

$resulte = DB::select("select * from tbl1");
    return view('users',['users'=>$resulte]);
// $resulte = DB::insert('insert into tbl1(name) value(:name)',['name'=>$request->name]);
// return view('users',['users'=>$resulte]);
    }
public function insert(Request $request){
    DB::insert('insert into tbl1(name) value(:name)',['name'=>$request->name]);
   return redirect()->route('index');
}
public function delete($id){
DB::delete('delete from tbl1 where id=:id',compact('id'));
return redirect()->route('index');
}
public function update($id){

    $resulte = DB::select("select * from tbl1 where id=:id",['id'=>$id]);
    return view('update',['users'=>$resulte[0]]);
}
public function updateSubmit($id,Request $request){
    DB::update('update tbl1 set name=:name where id=:id',[
        'name' => $request->name,
        'id' => $id
    ]);
return redirect()->route('index');

}
public function ga(){
   $table = DB::select('show tables');
   dd($table);
}
public function na(){
    // return session()->has('name')
    // ?session()->get('name'):'empty'
    // ;
    return session(['name','empty']);
}
    public function redirect(){
        // return back()->withInput();
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
