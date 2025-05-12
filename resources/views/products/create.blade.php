@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold text-center mb-6">Agregar Producto</h1>
    <div class="bg-white p-6 rounded-lg shadow-md">
        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 gap-4">
                <div>
                    <label for="name" class="block text-sm font-medium">Nombre</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="border p-2 rounded w-full" required>
                    @error('name')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="category" class="block text-sm font-medium">Categoría</label>
                    <select name="category" id="category" class="border p-2 rounded w-full" required>
                        <option value="Ropa" {{ old('category') == 'Ropa' ? 'selected' : '' }}>Ropa</option>
                        <option value="Accesorios" {{ old('category') == 'Accesorios' ? 'selected' : '' }}>Accesorios</option>
                    </select>
                    @error('category')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="price" class="block text-sm font-medium">Precio</label>
                    <input type="number" name="price" id="price" step="0.01" value="{{ old('price') }}" class="border p-2 rounded w-full" required>
                    @error('price')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="stock" class="block text-sm font-medium">Stock</label>
                    <input type="number" name="stock" id="stock" value="{{ old('stock') }}" class="border p-2 rounded w-full" required>
                    @error('stock')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600">Guardar</button>
            </div>
        </form>
    </div>
@endsection