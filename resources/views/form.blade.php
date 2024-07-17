<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<form action="/po/4" method="post" enctype="multipart/form-data">
@csrf
<input type="file"  name="name[]" multiple>
<input type="text" name="fname">
<input type="text" name="lname">
<button>send</button>
</form>
</body>
</html>
