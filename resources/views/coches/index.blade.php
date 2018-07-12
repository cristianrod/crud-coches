@extends ('layouts.master')

@section ('titulo', 'Coches')

@section ('contenido')
    <div class="row">
        <div class="col-md-12 mt-4">
            <table class="table">
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
                            <td><a role="button" href="#" class="btn btn-primary">Editar</a>
                                <a role="button" href="#" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection