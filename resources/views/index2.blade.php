@php
namespace inter;
interface myinterface{
    public static function pay($num1,$num2);
}
class payment implements myinterface {
    public static function pay($num1,$num2){
       echo $num1 + $num2;
    }
}
class review {
    public static function rev(myinterface $r){
        $r::pay(1,23);
    }
}
$r = new payment;
echo review::rev($r);


namespace ttt;
class rt{
    function ee1(){
echo '<br>';
echo 'rt';
    }


}


interface Birdinterface{
    public static function sum($num1,$num2);
}
class pangan implements Birdinterface{
    public static function sum($num1,$num2){
        echo $num1 + $num2;
    }
}
class number{
    public static function nums(Birdinterface $nom){
        $nom::sum(11,12);
    }
}
$resulte = new pangan;
number::nums($resulte);





class pas{
    public function creat():array
    {
        return [];
    }
}
$ra = new pas;
$ra->creat();


echo '<hr>';
// factory method
interface toy{
  public function play();
}
class car implements toy{
    public function play(){
        echo 'this is car';
    }
}

class bic implements toy{
    public function play(){
        echo 'this is bic';
    }
}
class toyfactory{
    public function mt($type)
    {
        if ($type === 'car') {
            return new car;
        } elseif ($type === 'bic'){
            return new bic;
        } else {
            throw new Exception("Error");

        }
    }
}
$r2 = new toyfactory;
$r2->mt('car')->play();
$r2->mt('bic')->play();
echo '<hr>';

namespace ttt1;
use ttt\rt;
$ramo = new rt;
$ramo->ee1();
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('insert1') }}" method="POST">
<input type="text" name="name">
<button>send</button>
    </form>
    <h1>this is index2</h1>
<table border="1">
    @foreach ($user as $us)
        <tr>
            <td>{{ $us->id }}</td>
            <td>{{ $us->name }}</td>
            <td>
                <form method="POST" action="{{ route('remove',['id'=>$us->id]) }}">@method('delete') <button>delete</button></form>
            </td>
            <td>
                <form action="{{ route('update1',['id'=>$us->id]) }}"><button>update</button></form>
            </td>

        </tr>
    @endforeach
</table>

</body>
</html>
