<?php

namespace App\Http\Controllers;

use App\Http\Requests\startRequest;
use Illuminate\Http\Request;

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

    public function index3(Request $request,$id)
    {

    //    return $request->filled('a')? 'yes' : 'no';
        return $request->has('a')? 'yes' : 'no';
        dd($request->query());
        dd($request->query('a','nodata'));
        dd($request->only(['a','b']));
        dd($request->get('id'));
        dd($request->post('id'));
        dd($id);
dd($request->id);
dd($request->route()->parameter('id'));
        return isset($request->a) ? 'yes' : 'no';
    }
    public function index4()
    {
        return view('form2');
    }

    public function index5(Request $request)
    {
        dd($request->cookie('laravel_session'));
        dd($request->cookies);
        dd($request->route());
        dd($request->route()->action['controller']);
        dd($request->segment(2));
        dd($request->fullUrlWithQuery(['a'=>2]));
        dd($request->fullUrl());
        dd($request->url());

        dd($request->file('name1')->storeAs('/tasavir', $request->file('name1')->getClientOriginalName() ));

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
}
