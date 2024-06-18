<div x-cloak x-show="productDescription{{ $product->id }}" x-transition.opacity.duration.200ms x-trap.inert.noscroll="productDescription{{ $product->id }}" @keydown.esc.window="productDescription{{ $product->id }} = false" @click.self="productDescription{{ $product->id }} = false" class="fixed inset-0 z-30 flex items-end justify-center bg-black/20 p-4 pb-8 backdrop-blur-md sm:items-center lg:p-8" role="dialog" aria-modal="true" aria-labelledby="defaultModalTitle">
    <div x-show="productDescription{{ $product->id }}" x-transition:enter="transition ease-out duration-200 delay-100 motion-reduce:transition-opacity" x-transition:enter-start="opacity-0 scale-50" x-transition:enter-end="opacity-100 scale-100" class="flex flex-col gap-4 overflow-hidden rounded-xl border border-slate-300 bg-white text-slate-700 dark:border-slate-700 dark:bg-slate-800 dark:text-slate-300" style="width: 500px; max-height: 100vh;">

        <!-- Header -->
        <div class="flex items-center justify-between border-b border-slate-300 bg-slate-100/60 p-4 dark:border-slate-700 dark:bg-slate-900/20">
            <h3 id="defaultModalTitle" class="font-semibold tracking-wide text-black dark:text-white">{{ $product->name }}</h3>
            <button @click="productDescription{{ $product->id }} = false" aria-label="close modal">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" stroke="currentColor" fill="none" stroke-width="1.4" class="w-5 h-5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Content -->
        <div class="px-4 py-8 overflow-y-auto">
            <p>{{ $product->description }}</p>
        </div>

        <!-- Footer -->
        <div class="flex justify-end gap-2 border-t border-slate-300 bg-slate-100/60 p-4 dark:border-slate-700 dark:bg-slate-900/20">
            <button @click="productDescription{{ $product->id }} = false" type="button" class="cursor-pointer whitespace-nowrap rounded-xl bg-blue-700 px-4 py-2 text-center text-sm font-medium tracking-wide text-slate-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-700 active:opacity-100 active:outline-offset-0 dark:bg-blue-600 dark:text-slate-100 dark:focus-visible:outline-blue-600">Close</button>
        </div>
    </div>
</div>
