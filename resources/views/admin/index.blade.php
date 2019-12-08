@extends("admin.layout")

@section("content")
    <h1 class="title">Administracion de sliders</h1>

    <table class="table is-fullwidth">
        <thead>
        <tr>
            <th class="is-hidden-mobile">id</th>
            <th>Imagen</th>
            <th>Titulo</th>
            <th class="is-hidden-mobile">Subtitulo</th>
            <th>Acciones</th>
        </tr>
        </thead>

        <tbody>
        @foreach($sliders as $slider)
            <tr>
                <th class="is-hidden-mobile">{{$slider->id}}</th>
                <th><img src="images/{{$slider->image_url}}" width="300" alt="Imagen principal slider"></th>
                <td>{{$slider->titulo_principal}}</td>
                <td class="is-hidden-mobile">{{$slider->subtitulo_principal}}</td>
                <td>
                    <form action="sliders/{{$slider->id}}/edit" method="GET" class="is-inline-block">
                        @csrf
                        <button type="submit" class="button is-warning is-small">Editar</button>
                    </form>
                    <form action="sliders/{{$slider->id}}" method="post" class="is-inline-block">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="button is-danger is-small">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <form action="sliders/create">
        @csrf
        <button type="submit" class="button is-success">Agregar Slide</button>
    </form>


@endsection


