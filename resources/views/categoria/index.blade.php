@extends('welcome')

@section('content')

<!-- Button trigger modal nuevo -->
<button type="button" class="btn btn-info btn-lg" data-bs-toggle="modal" data-bs-target="#create">
    Nuevo
</button>

<div class="table-responsive">
    <br>

    <table class="table table-secundary">
        <thead class="bg-dark text-white">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NOMBRE</th>
                <th scope="col">DESCRIPCION</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
                <tr class="">
                    <td scope="row">{{ $categoria->id }}</td>
                    <td>{{ $categoria->nombre }}</td>
                    <td>{{ $categoria->descripcion }}</td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                            data-bs-target="#edit{{ $categoria->id }}">
                            Editar
                        </button>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger btn-lg" data-bs-toggle="modal"
                            data-bs-target="#delete{{ $categoria->id }}">
                            Eliminar
                        </button>
                    </td>
                </tr>

                @include('categoria.info')
            @endforeach

        </tbody>
    </table>
</div>
@include('categoria.create')


@endsection
