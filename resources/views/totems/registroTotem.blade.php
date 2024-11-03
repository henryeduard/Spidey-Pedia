<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <title>Registro de Tótem</title>
    </head>

    <body>

        <h1 class="text-center fw-bolder">Registro de Alumnos</h1>

        <div>

            {{-- <form method="POST" enctype="multipart/form-data" id="registroForm" action="registro"
                        class="p-3 bg-body-secondary pt-3  rounded-3 mt-5 mx-auto"> --}}
            <form method="POST" enctype="multipart/form-data" id="registroForm" action="registro" class="">

                {{-- <div class="row mt-2">
                    <label class="form-label text-uppercase fw-bold" style="font-size:13px;" for="nombre">
                        Nombre(s) *
                    </label>
                    <div>
                        <input class="border border-dark-subtle rounded py-1 px-2 w-100" type="text" name="nombre"
                            id="nombre" value="{{ $estudiante->nombre }}" readonly>
                    </div>
                </div> --}}

                <div class="">
                    <label class="" for="alias">
                        Alias (Nombre de Héroe)
                    </label>
                    <input class="" type="text" id="alias" name="alias" value="">
                </div>

            </form>

        </div>

    </body>

</html>