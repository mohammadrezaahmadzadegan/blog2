@extends('layout.main')
@section('title','welcome')
@section('content')
@php
   echo 'first name:' . $names['fname'];
   echo '<br>';
   echo 'last name:' . $names['lname'];
@endphp

@endsection
