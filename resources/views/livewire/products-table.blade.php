<div>å
    <div class="container mx-auto">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-3xl font-bold">Products</h1>
            <a href="{{ route('products.create') }}" class="inline-flex items-center gap-1 px-3 py-1 text-sm font-medium tracking-wide text-white bg-blue-700 rounded-lg hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M13 3a1 1 0 0 1 1 1v2h2a1 1 0 1 1 0 2h-2v2a1 1 0 1 1-2 0V8h-2a1 1 0 0 1 0-2h2V4a1 1 0 0 1 1-1z"/>
                    <path fill-rule="evenodd" d="M3 9a1 1 0 0 1 1-1h2V6a1 1 0 1 1 2 0v2h2a1 1 0 1 1 0 2H8v2a1 1 0 1 1-2 0V9H4a1 1 0 0 1-1-1z"/>
                </svg>
                <span>Create Product</span>
            </a>
        </div>

        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Product name</th>
                    <th scope="col" class="px-6 py-3">Description</th>
                    <th scope="col" class="px-6 py-3">Price</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr wire:key="{{ $product->id }}" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <div class="flex items-center">
                                <div class="flex-shrink-0">
                                    <img class="h-16 w-16 rounded-full object-cover" src="{{ $product->getFirstMedia(\App\Models\Product::MEDIA_COLLECTION)?->getUrl() ?? asset('default_product.jpg') }}" alt="Product image">
                                </div>
                                <div class="ml-4">
                                    {{ $product->name }}
                                </div>
                            </div>
                        </th>
                        <td class="px-6 py-4">
                            {{ $product->description }}
                        </td>
                        <td class="px-6 py-4">
                            ${{ $product->price }}
                        </td>
                        <td class="px-4 py-2">
                            <button wire:click="delete({{ $product->id }})" type="button" class="flex items-center gap-1 cursor-pointer rounded-lg bg-gray-200 hover:bg-gray-300 px-3 py-1 text-sm font-medium tracking-wide text-gray-700 transition focus:outline-none focus:ring-2 focus:ring-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-600" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M15 5a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2H3a1 1 0 0 0 0 2h1v10a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V7h1a1 1 0 0 0 0-2h-1zm-1 0H6a1 1 0 0 0-1 1v10h10V6a1 1 0 0 0-1-1z" />
                                </svg>
                                <span class="text-gray-600">Delete</span>
                            </button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-4">
            {{ $products->links() }}
        </div>
    </div>
</div>
