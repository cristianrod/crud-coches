@extends ('layouts.master')

@section ('titulo', 'Crear - Coche')

@section ('contenido')
    <div class="row">
        <div class="col-md-12 mt-4">
            <form method="POST" action="/coches">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre">
                </div>
                <div class="form-group">
                    <label for="caracteristica">Caracteristica</label>
                    <input type="text" class="form-control" id="caracteristica" name="caracteristica">
                </div>
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <select class="form-control" id="marca" name="marca">
                        @foreach($marcas as $marca)
                            <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Crear Coche</button>
        </div>
    </div>
@endsection