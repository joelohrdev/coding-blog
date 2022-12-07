<div class="space-y-4">
    @foreach($posts as $post)
        <livewire:show-post :post="$post" />
    @endforeach
    <div>
        {{ $posts->links('pagination::tailwind') }}
    </div>
</div>
