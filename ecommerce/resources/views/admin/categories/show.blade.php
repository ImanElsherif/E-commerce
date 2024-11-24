<!-- resources/views/categories/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $category->name }} - Products</h1>
        <div class="row">
            @foreach ($category->products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('storage/' . $product->image_path) }}" alt="{{ $product->name }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">Price: ${{ $product->price }}</p>
                            <p class="card-text">
                                        Stock: 
                                        <span class="{{ $product->stock_quantity > 0 ? 'in-stock' : 'out-of-stock' }}">
                                            {{ $product->stock_quantity > 0 ? $product->stock_quantity : 'Out of Stock' }}
                                        </span>
                                    </p>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
