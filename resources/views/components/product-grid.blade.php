<div class="container mx-auto px-4 py-6">
    <h2 class="text-2xl font-semibold text-gray-800 mb-6">Galería de Productos</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($products as $product)
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-lg font-semibold text-gray-800">{{ $product->name }}</h3>
                    <p class="text-gray-600 mt-2">{{ $product->description }}</p>
                    <div class="flex justify-between items-center mt-4">
                        <span class="text-gray-800 font-bold">{{ $product->price }}</span>
                        <a href="#" class="text-green-500 hover:text-green-700">Ver más</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
