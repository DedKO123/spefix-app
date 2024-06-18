<div>
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold text-center my-8">Products</h1>
        <div class="grid grid-cols-3 gap-4">
            @foreach($products as $product)
                <div x-data="{ productDescription{{ $product->id }}: false }" class="bg-white p-4 shadow-md rounded-md">
                    <img src="{{ $product->getFirstMedia(\App\Models\Product::MEDIA_COLLECTION)?->getUrl() ?? asset('default_product.jpg') }}" alt="{{ $product->name }}" class="w-full h-64 object-cover rounded-t-md">
                    <h2 class="text-xl font-bold mt-4">{{ $product->name }}</h2>
                    <p class="text-gray-500">Price: ${{ $product->price }}</p>
                    <button @click="productDescription{{ $product->id }} = true" type="button" class="mt-4 cursor-pointer whitespace-nowrap rounded-xl bg-blue-700 px-4 py-2 text-center text-sm font-medium tracking-wide text-slate-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 dark:bg-blue-600 dark:text-slate-100 dark:focus-visible:outline-blue-600">Show Description</button>
                    @include('products.modals.description', ['product' => $product])
                </div>
            @endforeach
        </div>
    </div>
    <div class="container mx-auto mt-8">
        {{ $products->links() }}
    </div>
</div>
