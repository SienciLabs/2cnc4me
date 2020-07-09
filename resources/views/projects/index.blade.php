@extends('layouts.app')

@section('content')
    <div class="flex-center position-ref full-height">
      <div class="content">
        <div class="title m-b-md">project Store</div>
        <div class="links">
          <a href="{{ config('app.url')}}/projects/create">Create projects</a>
          <a href="{{ config('app.url')}}/projects">View projects</a>
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
                        @foreach ($allprojects as $project)
                            <tr>
                                <td>{{ $project->title }}</td>
                                <td class="inner-table">{{ $project->description }}</td>
                                <td class="inner-table"><img src="{{ url($project->photoPath) }}"/></td>
                                <td class="actions">
				                    <a
				                        href="{{ action('projectController@show', ['project' => $project->id]) }}"
				                        alt="View"
				                        title="View">
				                      View
				                    </a>
				                    <a
				                        href="{{ action('projectController@edit', ['project' => $project->id]) }}"
				                        alt="Edit"
				                        title="Edit">
				                      Edit
				                    </a>
				                    <form action="{{action('projectController@destroy', ['project' => $project->id])}}" method="project">
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
