@extends('layouts.app')

@section('content')
    <div class="lg:flex lg:justify-between">
        <div class="lg:w-32">
            @include('sidebar_layout')
        </div>
        
        <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
            {{-- This is a file used to create the 'publishing of a tweet' functionality --}}            
            @include('publish_post_panel')

            {{-- This is for the timeline of posts --}}
            <div class="border border-gray-300 rounded-lg">
                @foreach ($posts as $post)
                    @include('post_panel')
                @endforeach
            </div>
        </div>
        
        <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
            @include('friends_list')
        </div>
    </div>
@endsection
