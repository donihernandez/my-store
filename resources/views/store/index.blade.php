@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Tienda</h1>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-md-12">
            <a class="btn btn-outline-primary" href="/store/create">Crear producto</a>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-md-12">
            <table class="table table-hover table-responsive-sm table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Garantía</th>
                    <th scope="col">Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->status }}</td>
                        <td>{{ $product->warranty }}</td>
                        <td>
                            <form action="/store/{{ $product->id }}" method="post">
                                @csrf
                                @method('DELETE')

                                <a href="/store/{{ $product->id }}" class="btn btn-outline-info">
                                    Mostrar
                                </a>
                                <a href="/store/{{ $product->id }}/edit" class="btn btn-outline-primary">
                                    Editar
                                </a>
                                <button type="submit" class="btn btn-outline-danger" onclick="confirm('¿Está seguro de querer eliminar el producto?')">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
