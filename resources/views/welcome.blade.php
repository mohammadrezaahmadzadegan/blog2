@php
namespace mom;
class newClosure {
    function tsa() {
        echo 22;
    }
}
namespace dad;
use mom\newClosure;
class CheckUser {
    public function text(newClosure $next) {
        return $next;
    }
}

// Create an instance of the newClosure class
$closure = new newClosure();

// Create an instance of the CheckUser class
$checker = new CheckUser();

// Call the text method of the CheckUser class and pass the newClosure instance
$result = $checker->text($closure);

var_dump($result);

echo '<br>';
echo '<br>';
echo '<br>';

class rato {
     static function ccessor()
    {
     echo 'router';
    }
}
rato::ccessor();

class foo{
    function __invoke ($a , $b){
        echo $a + $b;
    }
}
$r = new foo();
$r(3,4);
@endphp
@extends('layout.main')
@section('title','welcome')
@section('content')
<h1>  this is welcome</h1>
@include('parts.namo')


@endsection


