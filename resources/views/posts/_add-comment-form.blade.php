@auth
    <form class="border border-gray-200 p-6 rounded-xl" action="/posts/{{ $post->slug }}/comments" method="post">
        @csrf
        <header class="flex items-center">
            <img class="rounded rounded-full" src="https://i.pravatar.cc/150/?u='{{ auth()->id() }}'" alt=""
                width="40px">
            <h2 class="ml-4">Want to participate?</h2>
        </header>
        <div class="mt-6">
            <textarea name="body" placeholder="Quick, thing of something to say!" class="w-full focus:outline-none focus:ring"
                id="" cols="30" rows="6" required></textarea>
            @error('body')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>
        <div class="flex justify-end mt-10 border-t border-gray-200 pt-6">
            <button type="submit"
                class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600">Post</button>
        </div>

    </form>
@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline">Register</a> or
        <a href="/login" class="hover:underline">log in</a> to leave a comment.
    </p>
@endauth
