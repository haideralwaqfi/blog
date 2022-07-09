<x-layout>

    @include('posts/header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-post-featured-card :post="$posts[0]" />
            <x-posts-grid :posts="$posts" />
            {{ $posts->links() }}
        @else
            <p class="text-center">We Do not have any Posts, Please get back later.</p>
        @endif
        <div class="lg:grid lg:grid-cols-3">
    </main>
</x-layout>
