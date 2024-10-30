@extends('./dashboard')

@section('contenido')
    <center>
        <div class="card" style="width: 80%; top: 100px;">
            <div class="card-header bg-primary text-white">
                <h2 class="text-center">CRUD Laravel</h2>
            </div>

            <div class="card-body">
                @if ($mensaje = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                        {{ $mensaje }}
                    </div>
                @endif

                <h1 class="card-title">Listado de personas</h1>

                <p>
                    <a href="{{ route('personas.create') }}" class="btn btn-success"><i class="fas fa-user-plus"></i>
                        AGREGAR</a>
                </p>

                <div class="">
                    <table class="table table-bordered table-striped table-hover" style="font-size: 15px;">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Fecha de nacimiento</th>
                                <th scope="col">Email</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datos as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->Nombre }}</td>
                                    <td>{{ $item->Apellidos }}</td>
                                    <td>{{ $item->Fecha_de_nacimiento }}</td>
                                    <td>{{ $item->Email }}</td>
                                    <td>
                                        <a href="{{ route('personas.edit', $item->id) }}" class="btn btn-primary"><i
                                                class="fas fa-pencil-alt"></i> Editar</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('personas.show', $item->id) }}" method="GET">
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>
                                                Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <hr>
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            {{ $datos->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
@endsection
