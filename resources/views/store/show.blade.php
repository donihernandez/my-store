@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1>{{ $product->name }}</h1>
        </div>
        <div class="col-md-12">
            <div class="card" style="width: 100%">
                <div class="card-body">
                    @foreach($images as $image)
                        <div class="card-img-top">
                            <img src="{{ asset('storage/images/'.$image->url) }}" class="d-block w-100" alt="{{ $image->name }}">
                        </div>
                    @endforeach

                    <h5 class="card-title pt-4">Precio: {{ $product->price }}</h5>
                    <p class="card-text">
                        {{ $product->description }}
                    </p>
                    <p class="card-text">
                        Estado: {{ $product->status }}
                    </p>
                    <p class="card-text">
                        Garantía: {{ $product->warranty }}
                    </p>
                    <p class="card-text">
                        En stock: {{ $product->stock }}
                    </p>

                    <a href="/store" class="btn btn-outline-primary">Volver atrás</a>

                </div>
            </div>
        </div>
    </div>
@endsection