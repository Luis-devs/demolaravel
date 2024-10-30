@extends('./dashboard')

@section('title', 'Crear registros')
@section('contenido')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0 text-center">Agregar nueva persona</h5>
                </div>

                <div class="card-body" style="font-size: 15px">
                    <form action="{{ route('personas.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="Nombre" class="form-control" style="font-size: 15px;" id="nombre" required>
                        </div>

                        <div class="form-group">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" name="Apellidos" class="form-control" style="font-size: 15px;" id="apellidos" required>
                        </div>

                        <div class="form-group">
                            <label for="fecha_nacimiento">Fecha de nacimiento</label>
                            <input type="date" name="Fecha_de_nacimiento" class="form-control" style="font-size: 15px;" id="fecha_nacimiento" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="Email" class="form-control" style="font-size: 15px;" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto</label>
                            <input type="file" name="foto" accept="image/*" class="form-control" style="font-size: 15px;" id="foto" required>
                        </div>
                        <div class="form-group">
                            <div class="text-center">
                                <a href="{{ route('personas.index') }}" class="btn btn-dark mr-3">Regresar</a>
                                <button type="submit" class="btn btn-success ">Agregar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
