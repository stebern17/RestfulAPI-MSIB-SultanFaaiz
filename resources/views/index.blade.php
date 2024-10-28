<!-- resources/views/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="text-center p-6 bg-white shadow-md rounded-lg">
        <p class="text-lg text-gray-700">Sultan Faaiz</p>
        <p class="text-lg text-gray-700">Hello, Welcome to MSIB Restful API</p>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
            <a href="{{ route('products.index') }}">View Products</a>
    </div>
</div>
@endsection