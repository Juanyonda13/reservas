<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>primera consulta</h1>
    <h2>a</h2>
    @foreach ($dato1 as $d1)
         <p class="">{{$d1}}</p>         
    @endforeach
    <h2>b</h2>
    @foreach ($dato2 as $d2)
    <p class="">{{$d2}}</p>         
    @endforeach
     <h1>segunda consulta</h1>
    @foreach ($dato3 as $d3)
    <p class="">{{$d3}}</p>         
    @endforeach
    <h1>tercera consulta</h1>
    @foreach ($dato5 as $d5)
    <p class="">{{$d5}}</p>         
    @endforeach
    <h1>quinta consulta</h1>
    @foreach ($dato6 as $d6)
    <p class="">{{$d6}}</p>         
    @endforeach


</body>
</html>