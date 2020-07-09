 @extends('layouts.app')

@section('content')

<div class="col">
      <title>Create Project | Project Store</title>
      <!-- styling etc. -->
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <form method="POST" enctype="multipart/form-data" action="{{ route('projects.store') }}">
                    @csrf
                    @include('projects.fields')
                    <button type="submit">Publish</button>
                </form>
            </div>
        </div>
<div>
@endsection
