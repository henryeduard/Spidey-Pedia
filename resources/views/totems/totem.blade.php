{{-- @component('components.layoutMenu')
    @slot('linksCss')
        <link rel="stylesheet" href="{{ URL::asset('css/validacion.css') }}">
    @endslot

    @slot('JSscripts')
        <script src="{{ URL::asset('js/inputFecha.js') }}"></script>
        <script src="{{ URL::asset('js/productosAcademicos/actividadTitulacion.js') }}"></script>
        <script src="{{ URL::asset('js/productosAcademicos/validacionActividadTitulacion.js') }}"></script>
    @endslot

    @slot('body') --}}
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
            <p>Nombre: <b>{{ $totem->nombre }}</b></p>
            <p>Universo: <b>{{ $totem->universo }}</b></p>
            <p>Alias: <b>{{ $totem->alias }}</b></p>
            <p>Primera aparición: <b>{{ $totem->primeraAparicion }}</b></p>
            <p>Año de creación: <b>{{ $totem->anioCreacion }}</b></p>
            <p>Poderes: <b>{{ $totem->poderes }}</b></p>
            <p>Historia: <b>{{ $totem->historia }}</b></p>
            <p>Vivido: <b>{{ $totem->vividoToString() }}</b></p>
        </div>
    </body>

</html>
    {{-- @endslot
@endcomponent --}}