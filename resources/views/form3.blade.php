<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="/form12" method="get">

        <input type="text"  name="name1" value="{{ old('name1') }}">
        <input type="text"  name="name2" value="{{ old('name2') }}">




        <button>send</button>
</form>
<form action="/form13" method="post" enctype="multipart/form-data">

    <input type="file"  name="name1" >

    <button>send</button>
</form>
{{ $number }}
</body>
</html>
