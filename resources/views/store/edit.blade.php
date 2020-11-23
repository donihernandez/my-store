@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>Editar producto</h1>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-md-12">
            <form action="/store/{{ $product->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Nombre del producto</label>
                            <input type="text" class="form-control" id="name" name="name" required value="{{ $product->name }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price">Precio</label>
                            <input type="number" class="form-control" id="price" name="price" required value="{{ $product->price }}">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea class="form-control" id="description" name="description">
                                {{ $product->description }}
                            </textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="stock">Quedan en stock</label>
                            <input type="number" class="form-control" id="stock" name="stock" value="{{ $product->stock }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="status">Estado</label>
                                <select class="form-control" id="status" name="status" value="{{ $product->status }}">
                                    <option value="new">Nuevo</option>
                                    <option value="used">Usado</option>
                                    <option value="broken">Roto</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="warranty">Garantía</label>
                                <select class="form-control" id="warranty" name="warranty" value="{{ $product->warranty ? 'yes' : 'no'}}">
                                    <option value="yes">Sí</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="images">Imágenes</label>
                            <input type="file" class="form-control-file" id="images" multiple name="image[]">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success">Actualizar</button>
                        <a href="/store" class="btn btn-secondary">Volver</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection