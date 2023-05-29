<article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
    <div class="flex justify-between items-center mb-5 text-gray-500">
        <span
            class=" my-3 bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
            <h1 class="flex">
               
                @foreach ($post->categories as $category)
                    <div class="bot mr-2">{{ $category->title }}</div>
                @endforeach
            </h1>
        </span>
        <span class="text-sm">{{ $post->getFormattedDate() }}</span>
    </div>
    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a
            href="#">{{ $post->title }}</a></h2>
    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">
        {{ $post->shortBody() }}
    </p>
    <div class="flex justify-between items-center">
        <div class="flex items-center space-x-4">
            <span class="font-medium dark:text-white">
                {{ $post->user->name }}
            </span>
        </div>
        <a href="{{ route('view', $post) }}"
            class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
           Читать
            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </a>
    </div>
</article>
