<div>
    <article>
        <div class="space-y-3">
            <h1 class="text-2xl font-medium">{{ $post->title }}</h1>
            <div class="flex items-center space-x-4">
                <time class="text-sm text-gray-500">{{ $post->created_at->format('F d, Y') }}</time>
                @foreach($post->categories as $category)
                    <livewire:post-categories :category="$category" />
                @endforeach
            </div>
        </div>
        <div class="prose max-w-none prose-sky">
            <x-markdown theme="nord">
                {!! $post->body !!}
            </x-markdown>
        </div>
    </article>
</div>
