 @extends('layouts.app')

@section('content')

<div class="col">
      <title>Create Post | Post Store</title>
      <!-- styling etc. -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <form method="POST" enctype="multipart/form-data" action="{{ route('posts.store') }}">
                    @csrf
                    @include('posts.fields')
                    <button type="submit">Publish</button>
                </form>
            </div>
        </div>
       <!--<iframe width="420" height="315" src="//www.youtube.com/embed/Py-RV87Jk1s" frameborder="0" allowfullscreen></iframe>-->
<div>
@endsection