<x-layout>
    <div class="max-w-3xl mx-auto pb-6 md:pb-12 md:pt-6 px-8 md:px-0">
        <article>
            <div class="space-y-3">
                <h1 class="text-2xl font-medium">{{ $post->title }}</h1>
                <div class="flex items-center space-x-4">
                    <time class="text-sm text-gray-500">{{ $post->created_at->format('F d, Y') }}</time>
                    @foreach($post->categories as $category)
                        <span class="normal-case inline-flex items-center px-2.5 py-0.5 rounded-full text-sm font-medium bg-gray-100 text-gray-800">{{ $category->name }}</span>
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
</x-layout>
