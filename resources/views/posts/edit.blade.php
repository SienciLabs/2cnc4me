@extends('layouts.app')

@section('content')

<div class="col">
      <title>Create Post | Post Store</title>
      <!-- styling etc. -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <form method="POST" enctype="multipart/form-data" action="{{ route('posts.update', ['post' => $post]) }}">
                    @method('PUT')
                    @csrf
                    @include('posts.fields')
                    <button type="submit">Publish</button>
                </form>
            </div>
        </div>
@endsection