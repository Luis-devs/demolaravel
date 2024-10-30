@extends('./dashboard')

@section('contenido')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-danger text-white">
                        <h5 class="mb-0 text-center">Eliminar persona</h5>
                    </div>

                    <div class="card-body" style="font-size: 15px">
                        <div class="alert alert-danger" role="alert">
                            ¿Estás seguro de que deseas borrar este registro?
                        </div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Fecha de nacimiento</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $personas->Nombre }}</td>
                                    <td>{{ $personas->Apellidos }}</td>
                                    <td>{{ $personas->Fecha_de_nacimiento }}</td>
                                    <td>{{ $personas->Email }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <hr>
                        <form action="{{ route('personas.destroy', $personas->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <div class="text-center">
                                <a href="{{ route('personas.index') }}" class="btn btn-dark mr-3">Regresar</a>
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
