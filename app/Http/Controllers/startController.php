<?php

namespace App\Http\Controllers;

use App\Http\Requests\startRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class startController extends Controller
{
    public function index()
    {
        return 'this is index';
    }
    public function index2()
    {
        return 'this is index2';
    }

    public function index3(Request $request, $id)
    {

        //    return $request->filled('a')? 'yes' : 'no';
        return $request->has('a') ? 'yes' : 'no';
        dd($request->query());
        dd($request->query('a', 'nodata'));
        dd($request->only(['a', 'b']));
        dd($request->get('id'));
        dd($request->post('id'));
        dd($id);
        dd($request->id);
        dd($request->route()->parameter('id'));
        return isset($request->a) ? 'yes' : 'no';
    }
    public function index4()
    {
        echo session('names');
        return view('form2');
    }

    public function index5(Request $request)
    {
        dd($request->cookie('laravel_session'));
        dd($request->cookies);
        dd($request->route());
        dd($request->route()->action['controller']);
        dd($request->segment(2));
        dd($request->fullUrlWithQuery(['a' => 2]));
        dd($request->fullUrl());
        dd($request->url());

        dd($request->file('name1')->storeAs('/tasavir', $request->file('name1')->getClientOriginalName()));

        dd($request->file('name1')->getFilename());
        dd($request->file('name1')->path());
        dd($request->file('name1')->getClientOriginalName());
    }
    public function index6(startRequest $request)
    {
        // $data = $request->validate([
        //     'name' => '',
        //     'family' => ''
        // ]);
        return $request->all();
    }
    public function index7($id)
    {
        //  return new class{
        //    public function __toString()

        //    {
        //         return 'hello';
        //     }
        //   };
        echo $id;
        echo session('name');
        return response('go', 200, ['name' => 'mohammad'])->cookie('cookie1', '123');
    }
    public function index8()
    {
        return redirect()->route('stt', ['id' => 1])->with('name', 'mohammad');
    }
    public function index9()
    {
        echo session('names');
    }

    public function index10()
    {
        return back()->withInput()->with('name1', 'ok');
    }
    // public function index11(Request $request)
    // {
    //    $request->file('name1')->storeAs('public/images', $request->file('name1')->getClientOriginalName() );
    //     $name = $request->file('name1')->getClientOriginalName();
    //     $address = storage_path('/app/public/images/'.$name);

    //     response()->download($address);
    //     return redirect('/form11');
    // }
    public function index11(Request $request)
    {
        $this->rename($request);
        $name = $request->file('name1')->getClientOriginalName();
        $address = storage_path('/app/public/');

        return redirect('/form14')->with('down', $address . $name);
    }
    public function index12()
    {
        // return  response()->file(session('down'));
        return  response()->download(session('down'));
    }
    public function index13(Request $request)
    {
        Log::info('this is log for info');
        echo 'this is index13';
        return $this->requ($request);

        // return response()->view('form3',['number'=>1])->header('family','ahmady');

    }
    function requ()
    {
        return redirect('/end1')->with('names', 'farabi');
    }

    public function rename($request)
    {
        return $request->file('name1')->storeAs('public/', $request->file('name1')->getClientOriginalName());
    }
    public function down($address)
    {
        return  response()->download($address);
    }
    function end1()
    {
        session()->put('session1', 456);
        session(['name1' => 'ali', 'name2' => 'aly']);
        echo '<br>';
        return response('this text for response', 200, ['new' => 44]);
    }

    function end2()
    {
        echo  session()->get('session1');
        echo '<br>';
        echo  session('name1', 'name1 is empty');

        echo '<br>';
        echo  session('name2', 'name2 is empty');
        echo '<br>';
        echo session()->previousUrl();
        echo '<br>';
        echo old('name1', ' unfor ');
        echo '<br>';
        cookie('cookie2', 'this is value for cookie2');
        echo '<br>';
        return session()->all();
    }

    function end3()
    {
        echo  session()->get('session1');
        //Create a response instance
        $response = response('hello word');

        //Call the withCookie() method with the response method
        $response->cookie('name2', '123');

        //return the response
        return $response;
    }
    function end4()
    {
        session(['array1' => 999]);
        session()->flash('name3', 'ahmady');
        session()->flash('name4', 'ahmady2');
        return session()->all();
    }
    function end5()
    {
        echo $r =  session()->pull('name2');
        echo $r =  session()->forget('session1');
        //   session()->flush();
        //return session()->all();
        //session()->reflash();
        session()->keep('name4');
        return session()->all();
    }
    function index22($id = null)
    {
        //  $user = DB::connection()->table('tbl2')->get();
        if (!empty($id)) {
            $user = DB::select('select * from tbl2 where id=:id', ['id' => $id]);
        } else {
            $user = DB::select('select * from tbl2');
        }
        return view('index2', ['user' => $user]);
    }
    public function insert1(Request $r){
        DB::insert('insert into tbl2 (name) value (:name)',['name'=>$r->name]);
        return redirect()->route('index22');
    }
    public function remove($id){
        DB::delete('delete from tbl2 where id=:id',['id'=>$id]);
        return redirect()->route('index22');
    }
    public function update1($id){
$users = DB::select('select * from tbl2 where id=:id',['id'=>$id])[0];
// return view('update1',['value'=>$value])
return view('update1',compact('users'));
    }
    public function updatesubmit1($id,Request $r){
        DB::update('update tbl2 set name=:name where id=:id',['name'=>$r->name,'id'=>$id]);
        return redirect()->route('index22');
    }
    public function newindex(){
      // $tables = DB::select('show tables');
     //  $tables = DB::statement('drop table tbl3');
//       $tables = DB::statement('CREATE TABLE `laravel`.`tbl3` ( `id` INT(255) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
// ');

// $tbl = 'tbl3';
// //$tables = DB::statement("drop table {$tbl}");
//       DB::statement('CREATE TABLE `laravel`.`tbl4` ( `id` INT(255) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
// ');
// DB::statement('truncate tbl3');
// try {

// DB::transaction(function(){
//     DB::insert('insert into tbl3 (name) value (:name)',['name'=>'reza1']);
//     DB::insert('insert into tbl3 (name) value (:name)',['name'=>'reza2']);
//     DB::insert('insert into tbl3 (name) value (:name1)',['name11'=>'reza3']);
// });
// } catch (\Exception $e) {
//     DB::rollBack();
//     Log::error($e);
//     throw $e;
// }

// DB::statement('truncate users');
// try {

// DB::transaction(function(){
//  $count = 15;
//  while($count--){
//     DB::insert('insert into users (username,password) value (:username,:password)',['username'=>'user'.($count+1),'password'=>random_int(100000,999999)]);
//  }
// });
// } catch (\Exception $e) {
//     DB::rollBack();

//     dd('trans failed');
// }

// $r = DB::select('select * from users order by password desc');
// $r = DB::select('select * from users order by password asc');
// $r = DB::select("select * from users where (password > :n)",['n'=>222222]);
// $r = DB::table('users')->where([
//     ['password','>','405248']
// ]);
// $r = DB::table('users')->where('password','>','444444')->orWhere('password','<','444444');
// dd($r->get());
// $r = DB::table('users')->whereBetween('id',[1,5]);
// dd($r->toSql());
// $r = DB::select("select * from users where id between :id1 and :id2",['id1'=>1,'id2'=>6]);
// $r = DB::table('users')->whereNotBetween('id',[1,5]);
//  dd($r->toSql());
// $r = DB::select("select * from users where id not between :id1 and :id2",['id1'=>1,'id2'=>6]);
// dd($r);
// $r = DB::table('users')->whereIn('id',[1,5]);
// dd($r->toSql());
// $r = DB::select("select * from users where id in (:id1,:id2)",['id1'=>1,'id2'=>6]);
// dd($r);
// $r = DB::select("select * from users where id not in (:id1,:id2)",['id1'=>1,'id2'=>6]);
// dd($r);
$r = DB::table('users')->whereNull('username');
$r = DB::table('users')->whereNotNull('username');
$r = DB::table('users')->whereColumn('username','=','password');
$r = DB::table('users')->whereColumn('username','<>','password');
$r = DB::table('users')->where('password','>','333333');
$r = DB::table('users')->where(
function ($query){
    $query->where('password','<','333333');
   // $query->where('password','=','127971');
    $query->where('id','=','8');
}
);

// $a = 32;
// echo intval($a) . "<br>";

// $b = 3.2;
// echo intval($b) . "<br>";

// $c = "32.5";
// echo intval($c) . "<br>";

// $d = array();
// echo  intval($d) . "<br>";

// $e = array("red", "green", "blue");
//     }
// $r = DB::select('select * from users');
//  dd(count($r));
// foreach ($r as $user) {
//    echo $user->id;
//    echo '<br>';
//    echo $user->username;
//    echo '<br>';

//    echo $user->password;
// echo '<hr>';
// }
// $r = DB::table('users')->whereExists(function($query){
// $query->selectRaw('1')->whereRaw('1=1');
// });
// $r = DB::select("select * from `users` where exists (select 1 where 1=1)");
// $r = DB::table('users')->whereExists(function($query){
//     $query->select(DB::raw(1))->where(DB::raw(1),1);
//     });
// dd($r->get());
// $r = DB::select('select * from users order by id desc');
// $r = DB::table('users')->orderByDesc('id');
// $r = DB::table('users')->orderBy('id')->orderBy('password');
// $r = DB::table('users')->inRandomOrder('id');
// $r = DB::select("SELECT * FROM users LIMIT 3 OFFSET 5");
// $r = DB::table('users')->offset(4)->limit(10)->orderBy('password');
// $r = DB::table('users')->where('id','>',0)->orderBy('id');

// dd($r->first());
// dd($r->value('id'));
// dd($r->pluck('id','password'));
// dd($r->count('password'));
// dd($r->count('*'));
// dd($r->min('id'));
// dd($r->max('id'));
// dd($r->distinct()->pluck('username'));



}
}
