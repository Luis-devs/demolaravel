@extends('./dashboard')

@section('contenido')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <h5 class="card-header bg-primary text-white text-center">Actualizar persona</h5>
                    <div class="card-body" style="font-size: 15px">
                        <form action="{{ route('personas.update', $personas->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nombre" class="small">Nombre</label>
                                <input type="text" name="Nombre" class="form-control" style="font-size: 15px;"
                                    id="nombre" required value="{{ $personas->Nombre }}">
                            </div>

                            <div class="form-group">
                                <label for="apellidos" class="small">Apellidos</label>
                                <input type="text" name="Apellidos" class="form-control" style="font-size: 15px;"
                                    id="apellidos" required value="{{ $personas->Apellidos }}">
                            </div>

                            <div class="form-group">
                                <label for="fecha_nacimiento" class="small">Fecha de nacimiento</label>
                                <input type="date" name="Fecha_de_nacimiento" class="form-control"
                                    style="font-size: 15px;" id="fecha_nacimiento" required
                                    value="{{ $personas->Fecha_de_nacimiento }}">
                            </div>

                            <div class="form-group">
                                <label for="email" class="small">Email</label>
                                <input type="email" name="Email" class="form-control" style="font-size: 15px;"
                                    id="email" required value="{{ $personas->Email }}">
                            </div>

                            <div class="form-group">
                                <div class="text-center">
                                    <a href="{{ route('personas.index') }}" class="btn btn-dark mr-3">Regresar</a>
                                    <button type="submit" class="btn btn-success">Actualizar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
