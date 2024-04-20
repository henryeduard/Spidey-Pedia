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

            @foreach($totems as $totem)
                <ul>
                    <li>
                        <a href="/spider-totem/{{ $totem->alias }}-{{ $totem->universo }}">
                            {{ $totem->alias }} - {{ $totem->universo }} ({{ $totem->apodo }})
                        </a>
                    </li>
                </ul>
            @endforeach

        </div>

    </body>

</html>