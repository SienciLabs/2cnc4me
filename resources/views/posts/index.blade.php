@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
      <div class="content">
        <div class="title m-b-md">Post Store</div>
        <div class="links">
          <a href="{{ config('app.url')}}/posts/create">Create Posts</a>
          <a href="{{ config('app.url')}}/posts">View Posts</a>
        </div>
      </div>
    </div>

<!-- make this more modular instaed of copy pasting from view.blade.php --->
            <div class="flex-center position-ref full-height">
            <div class="content">
                <h1>Here's a list of available products</h1>
                <table>
                    <thead>
                        <td>Title</td>
                        <td>Description</td>
                         <td>Photo</td>
 
                    </thead>
                    <tbody>
                        @foreach ($allPosts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td class="inner-table">{{ $post->description }}</td>
                                <td class="inner-table"><img src="{{ url($post->photoPath) }}"/></td>
                                <td class="actions">
				                    <a
				                        href="{{ action('PostController@show', ['post' => $post->id]) }}"
				                        alt="View"
				                        title="View">
				                      View
				                    </a>
				                    <a
				                        href="{{ action('PostController@edit', ['post' => $post->id]) }}"
				                        alt="Edit"
				                        title="Edit">
				                      Edit
				                    </a>
				                    <form action="{{action('PostController@destroy', ['post' => $post->id])}}" method="POST">
					                    @method('DELETE')
					                    @csrf
					                    <button type="submit" class="btn btn-link" title="Delete" value="DELETE">Delete</button>
				                	</form>

				                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
@endsection