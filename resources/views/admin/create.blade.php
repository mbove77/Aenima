@extends("admin.layout")

@section("content")
    <h1 class="title">Crear Nuevo Slider</h1>
    <form action="/aenima/sliders" method="post" enctype="multipart/form-data">
        {{@csrf_field()}}

        <div class="field">
            <label class="label">Imagen del Slider</label>

            <div id="slider_file" class="file has-name" >
                <label class="file-label">
                    <input class="file-input" type="file" name="image_url" required="true">
                    <span class="file-cta">
                      <span class="file-icon">
                        <i class="fas fa-upload"></i>
                      </span>
                      <span class="file-label">
                        Selecionar archivo.
                      </span>
                    </span>
                    <span class="file-name">
                      Nada seleccionado.
                    </span>
                </label>
            </div>
            <p class="help">Aceptamos imagenes jpg/jpeg, ancho mínimo 1200 px, tamaño maximo 4 Mb.</p>
        </div>

        <div class="field">
            <label class="label">Titulo</label>
            <div class="control">
                <input name="titulo_principal" class="input" type="text" placeholder="Titulo del slider" required="true" value="{{ old('titulo_principal') }}">
            </div>
        </div>

        <div class="field">
            <label class="label">Subtitulo</label>
            <div class="control">
                <input name="subtitulo_principal" class="input" type="text" placeholder="Subtitulo del slider" required="true" value="{{ old('subtitulo_principal') }}">
            </div>
        </div>

        <div class="field">
            <label class="label">Descripcion</label>
            <div class="control">
                <textarea name="descripcion_principal" class="textarea" placeholder="Descripcion del slider" required="true">{{ old('descripcion_principal') }}</textarea>
            </div>
        </div>

        <div class="field">
            <label class="label">Titulo Secundario</label>
            <div class="control">
                <input name="titulo_secundario" class="input" type="text" placeholder="Titulo secundario del slider" required="true" value="{{ old('titulo_secundario') }}">
            </div>
        </div>

        <div class="field">
            <label class="label">Subtitulo Secundario</label>
            <div class="control">
                <input name="subtitulo_secundario" class="input" type="text" placeholder="Subtitulo secundario del slider" required="true" value="{{ old('subtitulo_secundario') }}">
            </div>
        </div>

        <div class="field">
            <label class="label">Descripcion Secundaria</label>
            <div class="control">
                <textarea name="descripcion_secundario" class="textarea" placeholder="Descripcion secundaria del slider" required="true">{{ old('descripcion_secundario') }}</textarea>
            </div>
        </div>

        <div class="control">
            <button class="button is-primary">Guardar Slider</button>
        </div>
    </form>

    @if($errors->any())
        <div class="notification is-danger" style="margin-top: 1em">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <script>
        const fileInput = document.querySelector('#slider_file input[type=file]');
        fileInput.onchange = () => {
            if (fileInput.files.length > 0) {
                const fileName = document.querySelector('#slider_file .file-name');
                fileName.textContent = fileInput.files[0].name;
            }
        }
    </script>
@endsection
