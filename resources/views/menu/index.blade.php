@extends ('layouts.master')

@section ('titulo', 'Menú Principal')

@section ('contenido')
    <div class="row">
        <div class="col-md-12 text-center mt-4">
            <h1>Menú principal</h1>
            <a role="button" href="coches" class="btn btn-primary">Ir al listado de coches</a>
            <a role="button" href="marcas" class="btn btn-primary">Ir al listado de marcas</a>
        </div>
    </div>
@endsection

