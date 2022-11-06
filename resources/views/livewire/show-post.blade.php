<div>
    <a class="group block" href="{{ route('post.show', $post) }}">
        <div class="border border-gray-100 px-4 py-3 space-y-2 rounded-md group-hover:border-cyan-500 transition-colors duration-150 ease-in-out">
            <h3 class="font-medium text-gray-800">{{ $post->title }}</h3>
            <div class="flex flex-col md:flex-row md:items-center md:space-x-2 text-sm text-gray-500">
                <time>{{ $post->created_at->format('F d, Y') }}</time>
            </div>
        </div>
    </a>
</div>
