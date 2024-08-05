@php
namespace ttt;
class rt{
    function ee1(){
echo '<br>';
echo 'rt';
    }


}

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
