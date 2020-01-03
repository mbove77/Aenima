@extends("admin.layout")

@section("content")
    <h1 class="title">Editar Slider</h1>
    <form action="/aenima/sliders/{{$slider->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        @if($errors->any())
            <div class="notification is-danger" style="margin-top: 1em">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="field">
            <label class="label">Imagen del Slider</label>

            <div id="slider_file" class="file has-name" >
                <label class="file-label">
                    <input class="file-input" type="file" name="image_url" >
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
                <input name="titulo_principal" class="input" min="4" max="64" type="text" placeholder="Titulo del slider" required="true" value="{{ $slider->titulo_principal }}" >
            </div>
            <p class="help">Mínimo 4 caracteres, tamaño maximo 64 caracteres.</p>
        </div>

        <div class="field">
            <label class="label">Subtitulo</label>
            <div class="control">
                <input name="subtitulo_principal" class="input" min="4" max="180" type="text" placeholder="Subtitulo del slider" required="true" value="{{ $slider->subtitulo_principal }}">
            </div>
            <p class="help">Mínimo 4 caracteres, tamaño maximo 180 caracteres.</p>
        </div>

        <div class="field">
            <label class="label">Descripcion</label>
            <div class="control">
                <textarea name="descripcion_principal" class="textarea" placeholder="Descripcion del slider" required="true" minlength="4" maxlength="800">{{ $slider->descripcion_principal }}</textarea>
            </div>
            <p class="help">Mínimo 4 caracteres, tamaño maximo 800 caracteres.</p>
        </div>

        <div class="field">
            <label class="label">Titulo Secundario</label>
            <div class="control">
                <input name="titulo_secundario" class="input" class="input" min="4" max="64" type="text" placeholder="Titulo secundario del slider" required="true" value="{{ $slider->titulo_secundario }}">
            </div>
            <p class="help">Mínimo 4 caracteres, tamaño maximo 64 caracteres.</p>
        </div>

        <div class="field">
            <label class="label">Subtitulo Secundario</label>
            <div class="control">
                <input name="subtitulo_secundario" class="input" class="input" min="4" max="96" type="text" placeholder="Subtitulo secundario del slider" required="true" value="{{ $slider->subtitulo_secundario }}">
            </div>
            <p class="help">Mínimo 4 caracteres, tamaño maximo 96 caracteres.</p>
        </div>

        <div class="field">
            <label class="label">Descripcion Secundaria</label>
            <div class="control">
                <textarea name="descripcion_secundario" class="textarea" placeholder="Descripcion secundaria del slider" required="true" minlength="4" maxlength="512">{{ $slider->descripcion_secundario }}</textarea>
            </div>
            <p class="help">Mínimo 4 caracteres, tamaño maximo 512 caracteres.</p>
        </div>

        <div class="control">
            <button class="button is-primary">Editar Slider</button>
        </div>
    </form>



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
