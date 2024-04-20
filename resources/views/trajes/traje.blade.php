<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <title>Spidey-Pedia</title>
    </head>

    <body>
        <div>
            <p>Nombre: <b>{{ $traje->nombre }}</b></p>
            <p>Descripción: <b>{{ $traje->descripcion }}</b></p>
            <p>Tótem: <b>{{ $traje->totem }}</b></p>
        </div>
    </body>

</html>