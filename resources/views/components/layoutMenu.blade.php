{{-- <!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Spidey-Pedia</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/alertify.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/validacion.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/internos.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />


    {{ $linksCss }}

    <script src="{{ URL::asset('js/jquery-3.6.4.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::asset('js/additional-methods.min.js') }}"></script>
    <script src="{{ URL::asset('js/messages_es.min.js') }}"></script>
    <script src="{{ URL::asset('js/localValidateMethods.js') }}"></script>
    <script src="{{ URL::asset('js/alertify.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-ui.min.js') }}"></script>


    {{ $JSscripts }}
</head>

<body class="bg-body-tertiary">
    <div class="container">
        <header>
            Imagenes para header
            <div class="row mb-1 mt-1">
                <div class="col-2">
                    <a href="https://www.icat.unam.mx/" target="_blank">
                        <img src="{{ URL::asset('images/ICAT.png') }}" width="100%">
                    </a>
                </div>
                <div class="col-2 offset-8 text-end">
                    <a href="https://www.unam.mx/" target="_blank">
                        <img src="{{ URL::asset('images/escudoUNAM.png') }}" width="40%">
                    </a>
                </div>
            </div>
        </header>

        Se obtiene el usuario autentificado para verificar su rol
        @php
            $academico = auth()->user()->academico;
            $fechaLimite = strtotime('2024-01-13 T00:00');
            $thisMomento = strtotime('now');
            $rol6 = auth()
                ->user()
                ->userRole->where('idRole', 6)
                ->where('estado', 'A')
                ->last();
        @endphp
        
        Menu superior
        <x-menu>
            <x-items.academicoMenu></x-items.academicoMenu>
            <x-items.salirMenu></x-items.salirMenu>
        </x-menu>

        <div class="row mt-1">
            Menu lateral
            <div class="col-md-2">
                <x-items.informePlanMenu></x-items.informePlanMenu>
            </div>

            Se muestra la pagina dependiendo del rol
            <div class="col-md-10">
                @if ($thisMomento > $fechaLimite and is_null($rol6))
                    <div class="row justify-content-center align-items-center g-2 mt-5">
                        <div class="col-lg-10">
                            <img src="{{ asset('images/working.png') }}" title="Trabajando" width="100%">
                        </div>
                    </div>
                @else
                    {{ $body }}
                @endif
            </div>
        </div>

        <footer class="bg-body-secondary mt-5 rounded-3 mx-auto mt-5">
            <div class="row justify-content-center align-items-center g-2 mt-5">
                <div class="col-8 text-center offset-2">
                    <p>Hecho en México, Universidad Nacional Autónoma de México (UNAM), todos
                        los derechos
                        reservados
                        2021. Esta página puede ser reproducida con fines no lucrativos, siempre y cuando no se
                        mutile,
                        se cite la fuente completa y su dirección electrónica. De otra forma, requiere permiso
                        previo
                        por escrito de la institución.</p>
                </div>
                <div class="col-1 text-center offset-1">
                    <p class="float"><a href="#" title="Ir arriba"><i class="bi bi-arrow-up-circle-fill"
                                style="font-size: 50px; color: #003D79;"></i></a></p>
                </div>
            </div>
            <div class="row justify-content-center align-items-center g-2 ">
                <div class="col-6 text-center">
                    <a class="nav-link" title="Avisos de privacidad" target="_blank" itemprop="url"
                        href="https://www.icat.unam.mx/avisos-privacidad/"><span itemprop="name">Avisos de
                            privacidad</span></a>
                </div>
            </div>
        </footer>
    </div>
</body>

</html> --}}
