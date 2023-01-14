<x-layout>
    @section('title') {{ __('Blog') }} @endsection
    <div class="max-w-3xl mx-auto pt-14 pb-6 md:pb-12 md:pt-6 px-8 md:px-0 flex-1">
        <livewire:show-posts />
    </div>
</x-layout>
