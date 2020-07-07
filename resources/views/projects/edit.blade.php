@extends('layouts.app')

@section('content')

<div class="col">
      <title>Create Post | Post Store</title>
      <!-- styling etc. -->
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <form method="POST" enctype="multipart/form-data" action="{{ route('projects.update', ['project' => $project]) }}">
                    @method('PUT')
                    @csrf
                    @include('posts.fields')
                    <button type="submit">Publish</button>
                </form>
            </div>
        </div>
@endsection
