 @extends('layouts.app')
 @section('content')
 
 <head>
        <!-- Styles etc. -->
    </head>
        <body>
            <label>{{$post->title}}</label>
            <br>
            <!-- carsouel view or foreach loop once multiple files -->
            <img src="{{$post->photoPath}}">
             <br>
            <label>Video</label>
            <!-- use iframe to for embededed url needs to be parsed on creation/edit, will this be added to carousel? -->
            <p>{{$post->video}}</p>
           
            <label>Description</label>
            <p>{{$post->description}}</p>
            <label>Materials Used</label>
            <p>{{$post->material}}</p>
            <!-- foreach loop once multiple paths -->
            <label>Toolpaths</label>
            <p>{{$toolpathType[$post->toolpathType]}}</p>
            <p>{{$endMill[$post->endMill] }}</p>
            <p>{{$feedRate[$post->feedRate]}}</p>
            <p>{{$plungeRate[$post->plungeRate]}}</p>
            <p>{{$stepDown[$post->stepDown]}}</p>
            <P>{{$stepOver[$post->stepOver]}}</P>
            <label>project details</label>
            <p>{{$post->details}}</p>
            <label>Postprocessing</label>
            <p>{{$post->postProcessing}}</p>
            <label>PostProcessing Time</label>
            <p>{{$post->processingTime}} {{$post->processingTimeUnit}}</p>
            <label>Cut Time</label>
            <p> {{$post->cutTime}} {{$post->cutTimeUnit}}</p>
            <label>Machine</label>
            <p>{{$machines[$post->machine]}}</p>
            <label>Dimensions</label>
            <p>{{$post->shorterWidth}} {{$post->shorterWidthUnit}} x {{$post->longerWidth}} {{$post->longerWidthUnit}} x {{$post->height}} {{$post->heightUnit}}</p>



        </body>
    </html>
@endsection