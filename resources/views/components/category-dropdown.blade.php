<div>
    <x-dropdown>
        <x-slot name="trigger">
            <button class="py-2 pl-3 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
                {{ isset($currentCategory) ? $currentCategory->name : 'Category' }}
                <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" />
            </button>
        </x-slot>

        <x-dropdown-item :active="request()->routeIs('home')" href="/?{{ http_build_query(request()->except('category', 'page')) }}">All
        </x-dropdown-item>

        @foreach ($categories as $category)
            <x-dropdown-item :active='request()->is("categories/{$category->slug}")'
                href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}">
                {{ ucwords($category->name) }}
            </x-dropdown-item>
        @endforeach
    </x-dropdown>
</div>
