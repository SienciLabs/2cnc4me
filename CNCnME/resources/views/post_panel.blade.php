{{-- This is div for the avatar --}}
<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400'}}">
    <div class="mr-2 flex-shrink-0">
        {{-- Routing to the specific profile once clicked on--}}
        <a href="{{ $post->user->path() }}">
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
            <a href="{{ $post->user->path() }}">
                {{ $post->user->name }}
            </a>
        </h4>
        <p class="text-sm mb-4">
            {{ $post->body }}
        </p>

        <x-like-buttons :post="$post" />
        
    </div>
</div>