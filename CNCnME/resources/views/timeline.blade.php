{{-- This is for the timeline of posts --}}
<div class="border border-gray-300 rounded-lg">
    @foreach ($posts as $post)
        @include('post_panel')
    @endforeach
</div>