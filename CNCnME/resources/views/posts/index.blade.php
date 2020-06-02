@extends('layouts.app')

@section('content')
    {{-- This is a file used to create the 'publishing of a tweet' functionality --}}            
    @include('publish_post_panel')

    @include('timeline')
@endsection
