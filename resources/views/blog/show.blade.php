<x-layout>
    @section('title') {{ $post->title }} @endsection
    <div class="max-w-3xl mx-auto pb-6 md:pb-12 md:pt-6 px-8 md:px-0">
        <livewire:single-post :post="$post" />
    </div>
</x-layout>
