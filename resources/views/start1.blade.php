@php
$value = 1;
@endphp
@extends('layout.main')
@section('title','start1')
@section('content')
    <h1>this is page start 1</h1>
    @component('component.button',['title'=>'this is title'])

    @endcomponent
@endsection
