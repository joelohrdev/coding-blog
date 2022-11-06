<div>
    <a
        href="{{ route('category.show', $category) }}"
        class="
            normal-case
            inline-flex
            items-center
            px-2.5
            py-0.5
            rounded-full
            text-sm
            font-medium
            bg-slate-100
            text-slate-800
            hover:text-slate-600
            transition
        ">
            {{ $category->name }}
    </a>
</div>
