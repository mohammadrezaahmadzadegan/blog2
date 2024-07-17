<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel | @section('title') mysite @show</title>
</head>

<body>
    @includeWhen(!empty($value) , 'parts.takhfif')

    <nav>
        <ul>
            <li>
                <a href="/welcome">welcome</a>
            </li>

            <li>
                <a href="/form">form</a>
            </li>
        </ul>
    </nav>
    {{-- @yield('content') --}}
    @section('content')
    <h1>this is content h1</h1>
    @show
</body>
</html>
