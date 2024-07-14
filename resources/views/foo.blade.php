<?php
    echo  __FILE__ ;
// namespace rato;


// function name(){
//     echo "rato";
// }

// echo "<br>";
// namespace text2;
// function name(){
//     echo "text2";
// }

// echo "<br>";
//    \text2\name();
//   \rato\name();

// namespace rato;

// class newone{
//     function __construct(){
//         echo 569;
//     }
// }

// echo "<br>";

// namespace text2;
// class newone{
//     function __construct(){
//         echo 111;
//     }
// }

// echo "<br>";
// $value1 =  new \text2\newone;
// $value2 =  new \rato\newone;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @php
        $rd = 44;
    @endphp
    {{ '<h1> this is foo page </h1>' . $rd }}

 {!! '<h1> this is foo page 1 </h1>' . $rd !!}


</body>
</html>
