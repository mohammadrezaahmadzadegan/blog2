<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('insert') }}" method="POST">
        <input type="text" name="name">
        <button>send</button>
    </form>
    <table border="1">
        @foreach ($users as $user)
            <tr>
                <td>
                    {{ $user->id }}
                </td>

                <td>
                    {{ $user->name }}
                </td>
                <td>
                    <form action="{{ route('delete',['id'=>$user->id]) }}" method="POST">
                        @method('delete')
                        <button>delete</button>
                    </form>
                </td>
                <td>
                    <form action="{{ route('update',['id'=>$user->id]) }}" method="POST">

                        <button>update</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
