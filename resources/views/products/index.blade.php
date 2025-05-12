@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-center mb-6">Gestión de Productos</h1>
    <a href="{{ route('products.create') }}" class="bg-blue-500 text-white p-2 rounded mb-4 inline-block hover:bg-blue-600">Agregar Producto</a>
    <div class="bg-white p-6 rounded-lg shadow-md">
        <table class="w-full table-auto border-separate border-spacing-y-2 bg-red-500">
            <thead>
                <tr class="bg-gray-200">
                    <th class="p-3 text-left">Nombre</th>
                    <th class="p-3 text-left">Categoría</th>
                    <th class="p-3 text-left">Precio</th>
                    <th class="p-3 text-left">Stock</th>
                    <th class="p-3 text-left">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr class="bg-gray-50 hover:bg-gray-100 transition-colors">
                        <td class="p-3 border-b">{{ $product->name }}</td>
                        <td class="p-3 border-b">{{ $product->category }}</td>
                        <td class="p-3 border-b">${{ number_format($product->price, 2) }}</td>
                        <td class="p-3 border-b">{{ $product->stock }}</td>
                        <td class="p-3 border-b">
                            <a href="{{ route('products.edit', $product) }}" class="bg-yellow-500 text-white px-3 py-1 rounded mr-2 hover:bg-yellow-600">Editar</a>
                            <form action="{{ route('products.destroy', $product) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('¿Estás seguro de eliminar este producto?')" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-3 text-center text-gray-500">No hay productos registrados.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
                <div class="mt-4">
            {{ $products->links() }}
        </div>
    </div>
@endsection