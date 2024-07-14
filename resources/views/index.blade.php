@extends('layout.main')

@php
    $value = true;
@endphp

@section('content')
<form action="/goo" method="post">
    @csrf
    <input type="text" name="firstname" placeholder="first name">
    <input type="text" name="lastname" placeholder="last name">
    @component('component.button',['class'=>'btn','title'=>'send1'])

    @endcomponent
</form>

@if(isset($list))
<h1>this is list</h1>
@else
<h2>not list</h2>
@endif


@endsection
