@php
$value = 1;
@endphp
@extends('layout.main')
@section('title','start1')
@section('content')
    <h1>this is page start 1</h1>
    @component('component.button',['title'=>'this is title'])

    @endcomponent
    @foreach ([1] as $val1)
@foreach ($array as $val)
{!! '<br>' !!}
  <h2> first {{ $loop->first? 'yes' : 'no' }}</h2>
  <h3>
    last
    {{ $loop->last? 'yes' : 'no' }}
  </h3>

@endforeach
@endforeach

@verbatim
    <h1>{{ hello }}</h1>
@endverbatim


@blod(ali1)
@myphp($va = 5; echo $va;)

@cint('d')
<h1>this is number</h1>
@else
<h1>this is not number</h1>

@endif
    @endsection
