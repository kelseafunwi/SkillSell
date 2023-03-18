@extends('product.layout')

@section('title', "Index Product")

@section('content')
    <div class="controller">
        <div class="display-1">Hello from the primary view</div>

        @foreach ($products as $product) 
            <div>
                <div class="alert-primary">{{ $product->name }} -> {{ $product->details }}</div>
            </div>
        @endforeach
    </div>
@endsection