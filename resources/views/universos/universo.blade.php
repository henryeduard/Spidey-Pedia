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
            <p>Número: <b>{{ $universo->numero }}</b></p>
            <p>Descripción: <b>{{ $universo->descripcion }}</b></p>
            <p>Tipo de Media: <b>{{ $universo->tipoMedia }}</b></p>
        </div>
    </body>

</html>