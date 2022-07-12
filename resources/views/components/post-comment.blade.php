@props(['comment'])
<article class="flex bg-gray-100 border boder-gray-200 border-gray-200 p-6 rounded-xl">
    <div class="pr-2 flex-shrink-0">
        <img class="rounded rounded-xl" src="https://i.pravatar.cc/150/?u='{{ $comment->user_id }}'" alt=""
            width="60px">
    </div>
    <div>
        <header>
            <h3 class="font-bold">{{ $comment->author->username }}</h3>
            <p class="text-xs">
                <time>{{ $comment->created_at->diffForHumans() }}</time>
            </p>
            <p>{{ $comment->body }}</p>

        </header>
    </div>
</article>
