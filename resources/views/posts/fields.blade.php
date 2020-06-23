    <datalist id="measurements">
        <option value="mm">
        <option value="cm">
        <option value="m">
    </datalist>
    <datalist id="timeUnits">
        <option value="min">
        <option value="hour">
        <option value="day">
    </datalist>
                    <h1> Share Your Project</h1>
                    <div class="form-input">
                        <label>Title</label> <input type="text" name="title" value="{{$post->title ?? ''}}">
                    </div>
                     <div class="form-input">
                        <label>Category</label> 
                        <select name="category">
                            <option value="" disabled selected>Select your option</option>
                            @foreach($categories as $id => $value)
                                <option value="{{ $id }}" {{isset($post->category) && $post->category == $id ? 'selected' : ''}}>{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-input">
                        <label for="photos">
                            <input type="file" name="photos" id="photos" >
                        </label>
                    </div>

                     <div class="form-input">
                        <label>Video URL</label> <input type="url" name="video" placeholder="Past your YouTube video URL" value="{{$post->video ?? ''}}">
                    </div>

                    <div class="form-input">
                        <label>Description</label> <textarea name="description" rows="10" cols="30" placeholder="An overview of the final project">{{$post->description ?? ''}}</textarea>
                    </div>

                    <div class="form-input">
                        <label>Project Details</label> <textarea name="details" rows="10" cols="30" placeholder="Give as much detail as you can about process of making this - other tools used, instruction, tips, common mistakes, iterations, etc."> {{$post->details ?? ''}}</textarea>
                    </div>
                    <div class="form-input">
                        <label>Machine Used</label> 
                        <select name="machine" >
                            <option value="" disabled selected>Select your option</option>
                            @foreach($machines as $id => $value)
                                <option value="{{ $id }}" {{isset($post->machine) && $post->machine == $id ? 'selected' : ''}}>{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-input">
                        <label>Materials used</label> <textarea name="material" rows="10" cols="30" placeholder="What Material(s) were used to make this?" > {{$post->material ?? ''}} </textarea>
                    </div>

                    <div class="form-input">
                        <label for="files">
                            <input type="file" name="files" id="files" >
                        </label>
                    </div>

                     <div class="form-input">
                        <label>Project Dimensions</label> 
                        <input type="text" name="longerWidth" placeholder="Longer Width" value="{{$post->longerWidth ?? ''}}" /><input list="measurements" name="longerWidthUnit" value="{{$post->longerWidthUnit ?? ''}}">
                        <input type="text" name="shorterWidth" placeholder="Shorter Width" value = "{{$post->shorterWidth ?? ''}}"/><input list="measurements" name="shorterWidthUnit" value="{{$post->longerWidthUnit ?? ''}}">
                        <input type="text" name="height" placeholder="Height" value = "{{$post->height ?? ''}}"/><input list="heightUnit" name="heightUnit" value = "{{$post->heightUnit ?? ''}}">
                    </div>
                    <div class="form-input">
                        <label>Approximate cutting time</label> 
                        <input type="text" name="cutTime" value="{{$post->cutTime ?? ''}}"/>
                        <input list="timeUnits" name="cutTimeUnit" value="{{$post->cutTimeUnit ?? ''}}">
                    </div>
                    <div class="form-input">
                        <label>Toolpaths</label> 
                        <label>Toolpath type</label>
                         <select name="toolpathType" >
                            <option value="" disabled selected>Select your option</option>
                            @foreach($toolpathType as $id => $value)
                                <option value="{{ $id }}" {{isset($post->toolpathType) && $post->toolpathType == $id ? 'selected' : ''}}>{{ $value }}</option>
                            @endforeach
                        </select>
                         <label>end mill</label>
                         <select name="endMill" >
                            <option value="" disabled selected>Select your option</option>
                            @foreach($endMill as $id => $value)
                                <option value="{{ $id }}" {{isset($post->endMill) && $post->endMill == $id ? 'selected' : ''}}>{{ $value }}</option>
                            @endforeach
                        </select>
                         <label>Step Over</label>
                         <select name="stepOver" >
                            <option value="" disabled selected>Select your option</option>
                            @foreach($stepOver as $id => $value)
                                <option value="{{ $id }}" {{isset($post->stepOver) && $post->stepOver == $id ? 'selected' : ''}}>{{ $value }}</option>
                            @endforeach
                        </select>
                        <label>Step Down</label>
                         <select name="stepDown" >
                            <option value="" disabled selected>Select your option</option>
                            @foreach($stepDown as $id => $value)
                                <option value="{{ $id }}" {{isset($post->stepDown) && $post->stepDown == $id ? 'selected' : ''}}>{{ $value }}</option>
                            @endforeach
                        </select>
                       <label>Feed Rate</label>
                         <select name="feedRate" >
                            <option value="" disabled selected>Select your option</option>
                            @foreach($feedRate as $id => $value)
                                <option value="{{ $id }}" {{isset($post->feedRate) && $post->feedRate == $id ? 'selected' : ''}}>{{ $value }}</option>
                            @endforeach
                        </select>
                        <label>Plunge Rate</label>
                         <select name="plungeRate" >
                            <option value="" disabled selected>Select your option</option>
                            @foreach($plungeRate as $id => $value)
                                <option value="{{ $id }}" {{isset($post->plungeRate) && $post->plungeRate == $id ? 'selected' : ''}}>{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-input">
                        <label>Post Processing</label> <textarea name="postProcessing" rows="10" cols="30"> {{$post->postProcessing ?? ''}}</textarea>
                    </div>
                    <div class="form-input">
                        <label>Approximate post-proccessing time</label> 
                        <input type="text" name="processingTime" value = "{{$post->processingTime ?? ''}}"/>
                        <input list="timeUnits" name="processingTimeUnit" value="{{$post->processingTimeUnit ?? ''}}">
                    </div>

                     <div class="form-input">
                        <label>Is this an Alteration of a project?</label> <input type="url" name="alteration" placeholder="if so, please enter the origonal project URL" value="{{$post->alteration ?? ''}}">
                    </div>

                     <div class="form-input">
                        <label>Are there other projects you were inspired by?</label> <input type="url" name="inspiration" placeholder="if so, please enter the project URL" value="{{$post->inspiration ?? ''}}">
                    </div>