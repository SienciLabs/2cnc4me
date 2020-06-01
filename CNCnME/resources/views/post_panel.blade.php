{{-- This is div for the avatar --}}
<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-2 flex-shrink-0">
        <img
            src=" {{ $post->user->avatar}}"
            alt=""
            class="rounded-full mr-2"
        >
    </div>


{{-- This is div for the user's name and details --}}
    <div>
        <h4 class="font-bold mb-4">{{ $post->user->name }}</h4>

        <p class="text-sm">
            {{ $post->body }}
        </p>
    </div>
</div>