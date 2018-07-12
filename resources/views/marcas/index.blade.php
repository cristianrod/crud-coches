@extends ('layouts.master')

@section ('titulo', 'Marcas')

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
                @foreach($marcas as $marca)
                    <tr>
                        <td>{{ $marca->nombre }}</td>
                        <td>{{ $marca->caracteristica }}</td>
                        <td><a role="button" href="#" class="btn btn-primary">Ver Coches</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection