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
                <th scope="col">CATEGORIA</th>
                <th scope="col">NOMBRE PRODUCTO</th>
                <th>CANTIDAD STOCK</th>
                <th>PRECIO</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr class="">
                    <td scope="row">{{ $producto->id }}</td>
                    <td>{{ $producto->Categoria->nombre }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal"
                            data-bs-target="#edit{{ $producto->id }}">
                            Editar
                        </button>

                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger btn-lg" data-bs-toggle="modal"
                            data-bs-target="#delete{{ $producto->id }}">
                            Eliminar
                        </button>
                    </td>
                </tr>

                @include('producto.info')
            @endforeach

        </tbody>
    </table>
</div>
@include('producto.create')


@endsection

