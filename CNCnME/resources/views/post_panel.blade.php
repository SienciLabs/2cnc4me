{{-- This is div for the avatar --}}
<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-2 flex-shrink-0">
        {{-- Routing to the specific profile once clicked on--}}
        <a href="{{ route('profile', $post->user) }}">
            <img
                src=" {{ $post->user->avatar}}"
                alt=""
                class="rounded-full mr-2"
                width="50"
                height="50"
            >            
        </a>
    </div>


{{-- This is div for the user's name and details --}}
    <div>
        <h4 class="font-bold mb-4">
        {{-- Routing to the specific profile once clicked on--}}
            <a href="{{ route('profile', $post->user) }}">
                {{ $post->user->name }}
            </a>
        </h4>
        <p class="text-sm">
            {{ $post->body }}
        </p>
    </div>
</div>