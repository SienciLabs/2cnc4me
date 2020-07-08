 @extends('layouts.app')
 @section('content')

 <head>
        <!-- Styles etc. -->
    </head>
        <body>
            <label>{{$project->title}}</label>
            <br>
            <!-- carsouel view or foreach loop once multiple files -->
            <img src="{{$project->photoPath}}">
             <br>
            <label>Video</label>
            <!-- use iframe to for embededed url needs to be parsed on creation/edit, will this be added to carousel? -->
            <p>{{$project->video}}</p>

            <label>Description</label>
            <p>{{$project->description}}</p>
            <label>Materials Used</label>
            <p>{{$project->material}}</p>
            <!-- this does not currently support the multiple toolpath upload -->
            <label>Toolpaths</label>
            <p>{{$toolpathType[$project->toolpathType]}}</p>
            <p>{{$endMill[$project->endMill] }}</p>
            <p>{{$feedRate[$project->feedRate]}}</p>
            <p>{{$plungeRate[$project->plungeRate]}}</p>
            <p>{{$stepDown[$project->stepDown]}}</p>
            <P>{{$stepOver[$project->stepOver]}}</P>
            <label>project details</label>
            <p>{{$project->details}}</p>
            <label>projectprocessing</label>
            <p>{{$project->projectProcessing}}</p>
            <label>projectProcessing Time</label>
            <p>{{$project->processingTime}} {{$project->processingTimeUnit}}</p>
            <label>Cut Time</label>
            <p> {{$project->cutTime}} {{$project->cutTimeUnit}}</p>
            <label>Machine</label>
            <p>{{$machines[$project->machine]}}</p>
            <label>Dimensions</label>
            <p>{{$project->shorterWidth}} {{$project->shorterWidthUnit}} x {{$project->longerWidth}} {{$project->longerWidthUnit}} x {{$project->height}} {{$project->heightUnit}}</p>



        </body>
    </html>
@endsection
