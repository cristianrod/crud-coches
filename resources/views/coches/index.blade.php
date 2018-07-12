@extends ('layouts.master')

@section ('titulo', 'Coches')

@section ('contenido')
    <div class="row">
        <div class="col-md-12 mt-4">
            <a role="button" href="/coches/crear" class="btn btn-primary">Crear un nuevo coche</a>
            <table class="table mt-2">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Característica</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($coches as $coche)
                        <tr>
                            <td>{{ $coche->nombre }}</td>
                            <td>{{ $coche->caracteristica }}</td>
                            <td><a role="button" href="/coches/editar/{{ $coche->id }}" class="btn btn-primary">Editar</a>
                                <a role="button" href="/coches/eliminar/{{ $coche->id }}" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection