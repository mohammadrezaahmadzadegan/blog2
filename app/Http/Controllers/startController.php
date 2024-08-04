<?php

namespace App\Http\Controllers;

use App\Http\Requests\startRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        session()->put('session1',456);
        session(['name1'=>'ali','name2'=>'aly']);
        echo '<br>';
        return response('this text for response', 200, ['new' => 44]);
    }

    function end2()
    {
        echo  session()->get('session1');
        echo '<br>';
        echo  session('name1','name1 is empty');

        echo '<br>';
        echo  session('name2','name2 is empty');
        echo '<br>';
        return session()->all();
    }

    function end3()
    {
        echo  session()->get('session1');
    }
}
