<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <title>Registro de Universo</title>
    </head>

    <body>

        <h1 class="text-center fw-bolder">Registro de Universos</h1>

        <div>

            {{-- <form method="POST" enctype="multipart/form-data" id="registroForm" action="registro"
                        class="p-3 bg-body-secondary pt-3  rounded-3 mt-5 mx-auto"> --}}
            <form method="POST" enctype="multipart/form-data" id="registroForm" action="{{ route('registroUniverso') }}" class="">
                @csrf
                <!-- Equivalent to... -->
                {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}

                {{-- <div class="row mt-2">
                    <label class="form-label text-uppercase fw-bold" style="font-size:13px;" for="nombre">
                        Nombre(s) *
                    </label>
                    <div>
                        <input class="border border-dark-subtle rounded py-1 px-2 w-100" type="text" name="nombre"
                            id="nombre" value="{{ $estudiante->nombre }}" readonly>
                    </div>
                </div> --}}

                <div class="" id="formUniverso">

                    <div class="">
                        <label class="" for="numero">
                            Número
                        </label>
                        <input class="" type="text" id="numero" name="numero" value="">
                    </div>
                    
                    <div class="">
                        <label class="" for="descripcion">
                            Descripción
                        </label>
                        <textarea class="" id="descripcion" name="descripcion">
                        </textarea>
                    </div>
    
                    <div class="">
                        <label class="" for="imagen">
                            Imagen
                        </label>
                        <input class="" type="file" id="imagen" name="imagen" accept=".png, .jpg, .jpeg">
                    </div>

                </div>

                {{-- <div class="mt-4 text-center" id="rowBTN">
                    <button type="submit" class="btn btn-primary mx-3" style="--bs-btn-padding-x: 2rem;">
                        Enviar
                    </button>

                    <button type="reset" class="btn btn-danger mx-3" style="--bs-btn-padding-x: 2rem;">
                        Borrar
                    </button>

                </div> --}}
                <div class="">
                    <button type="submit" class="">
                        Enviar
                    </button>

                    <a style="text-decoration: none" href="{{ route('listadoTotem') }}">
                        <button type="button" class="">
                            Cancelar
                        </button>
                    </a>

                </div>

            </form>

        </div>

    </body>

</html>