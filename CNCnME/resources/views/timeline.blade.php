{{-- This is for the timeline of posts --}}
<div class="border border-gray-300 rounded-lg">
    @forelse ($posts as $post)
        @include('post_panel')
    @empty
        <p class="p-4">
            No posts yet.
        </p>
    @endforelse

    {{ $posts->links() }}
</div>