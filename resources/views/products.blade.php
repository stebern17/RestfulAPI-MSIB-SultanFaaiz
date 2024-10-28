<!-- resources/views/products.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold mb-6 text-center">Products</h1>

    @if($products->isEmpty())
    <p class="text-center text-gray-500">No products found</p>
    @else
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach ($products as $product)
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-lg font-semibold mb-2">{{ $product->product_name }}</h2>
            <p class="text-gray-600">{{ $product->description }}</p>
            <p class="text-green-500 font-bold mt-4">${{ number_format($product->price, 2) }}</p>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection