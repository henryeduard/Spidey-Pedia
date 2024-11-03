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

        <h1 class="text-center fw-bolder">Registro de Tótems</h1>

        <div>

            {{-- <form method="POST" enctype="multipart/form-data" id="registroForm" action="registro"
                        class="p-3 bg-body-secondary pt-3  rounded-3 mt-5 mx-auto"> --}}
            <form method="POST" enctype="multipart/form-data" id="registroForm" action="{{ route('registroTotem') }}" class="">

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
                        Alias (Nombre de héroe)
                    </label>
                    <input class="" type="text" id="alias" name="alias" value="">
                </div>

                <div class="">
                    <label class="" for="nombre">
                        Nombre (Nombre de civil)
                    </label>
                    <input class="" type="text" id="nombre" name="nombre" value="">
                </div>

                <div class="">
                    <label class="" for="apodo">
                        Apodo (Nombre no oficial con el que se le conoce)
                    </label>
                    <input class="" type="text" id="apodo" name="apodo" value="">
                </div>

                <div class="">
                    <label class="" for="universo">
                        Universo
                    </label>
                    <input class="" type="text" id="universo" name="universo" value="">
                </div>

                <div class="">
                    <label class="" for="poderes">
                        Poderes
                    </label>
                    <textarea class="" id="poderes" name="poderes">
                    </textarea>
                </div>

                <div class="">
                    <label class="" for="historia">
                        Historia
                    </label>
                    <textarea class="" id="historia" name="historia">
                    </textarea>
                </div>

                <div class="">
                    <label class="" for="vivido">
                        Estado de vida
                    </label>
                    <select class="" id="vivido" name="vivido">
                        <option value="V">Vivo</option>
                        <option value="M">Muerto</option>
                        <option value="D">Desconocido</option>
                    </select>
                </div>

                <div class="">
                    <label class="" for="imagen">
                        Imagen
                    </label>
                    <input class="" type="file" id="imagen" name="imagen" accept=".png, .jpg, .jpeg">
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