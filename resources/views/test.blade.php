<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('redirect') }}">
        <input type="text" name="fname" value="{{ old('fname') }}">
        <input type="text" name="lname" value="{{ old('lname') }}">
        <button>send</button>
    </form>
</body>
</html>
