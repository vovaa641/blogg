<x-app-layout>

    <article class="px-4 mx-auto max-w-7xl blog-show" itemid="#" itemscope itemtype="http://schema.org/BlogPosting">
        <div class="previous">
            <a href="{{ url()->previous() }}" class="">←</a>
        </div>

        <div class="w-full mx-auto mb-12 text-left md:w-3/4 lg:w-1/2">

            <img src="{{ $post->getThumbnail() }}" class="object-cover w-full h-64 bg-center rounded-lg" alt="Kutty" />
            <h1 class="my-3 text-3xl font-bold leading-tight text-gray-900 md:text-4xl" itemprop="headline"
                title="Rise of Tailwind - A Utility First CSS Framework">
                {{ $post->title }}
            </h1>
            <x-sidebar />
            <a class="flex mb-5 items-center text-gray-700" href="#">
                <div class="flex">
                    <p class="text-sm font-semibold text-gray-800 mr-5">{{ $post->user->name }}</p>
                    <p class="text-sm text-gray-500">{{ $post->getFormattedDate() }}</p>
                </div>
            </a>
            <div class="flex mb-6 space-x-2">
                <span
                    class=" my-3 bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center rounded dark:bg-primary-200 dark:text-primary-800">
                    <h1 class="flex">
                        <h1 class="teg">#</h1>
                        @foreach ($post->categories as $category)
                            <div class="bot ml-2">{{ $category->title }}</div>
                        @endforeach
                    </h1>
                </span>
            </div>
        </div>

        <div class="w-full mx-auto prose md:w-3/4 lg:w-1/2">
            <p class="text-justify">
                {!! $post->body !!}
            </p>
        </div>
    </article>

    <script src="https://cdn.jsdelivr.net/npm/kutty@latest/dist/alpinejs.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/kutty@latest/dist/dropdown.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/kutty@latest/dist/kutty.min.js"></script>
</x-app-layout>
