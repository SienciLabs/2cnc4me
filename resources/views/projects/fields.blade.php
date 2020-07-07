
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

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
    <label>Title</label> <input type="text" name="title" value="{{$project->title ?? ''}}">
</div>
<div class="form-input">
    <label>Category</label>
    <select name="category">
        <option value="" disabled selected>Select your option</option>
        @foreach($categories as $id => $value)
            <option value="{{ $id }}" {{isset($project->category) && $project->category == $id ? 'selected' : ''}}>{{ $value }}</option>
        @endforeach
    </select>
</div>

<div class="form-input">
    <label for="photos">
        <input type="file" name="photos" id="photos" >
    </label>
</div>

<div class="form-input">
    <label>Video URL</label> <input type="url" name="video" placeholder="Past your YouTube video URL" value="{{$project->video ?? ''}}">
</div>

<div class="form-input">
    <label>Description</label> <textarea name="description" rows="10" cols="30" placeholder="An overview of the final project">{{$project->description ?? ''}}</textarea>
</div>

<div class="form-input">
    <label>Project Details</label> <textarea name="details" rows="10" cols="30" placeholder="Give as much detail as you can about process of making this - other tools used, instruction, tips, common mistakes, iterations, etc."> {{$project->details ?? ''}}</textarea>
</div>
<div class="form-input">
    <label>Machine Used</label>
    <select name="machine" >
        <option value="" disabled selected>Select your option</option>
        @foreach($machines as $id => $value)
            <option value="{{ $id }}" {{isset($project->machine) && $project->machine == $id ? 'selected' : ''}}>{{ $value }}</option>
        @endforeach
    </select>
</div>

<div class="form-input">
    <label>Materials used</label> <textarea name="material" rows="10" cols="30" placeholder="What Material(s) were used to make this?" > {{$project->material ?? ''}} </textarea>
</div>

<div class="form-input">
    <label for="files">
        <input type="file" name="files" id="files" >
    </label>
</div>

<div class="form-input">
    <label>Project Dimensions</label>
    <input type="text" name="longerWidth" placeholder="Longer Width" value="{{$project->longerWidth ?? ''}}" /><input list="measurements" name="longerWidthUnit" placeholder="units" value="{{$project->longerWidthUnit ?? ''}}">
    <input type="text" name="shorterWidth" placeholder="Shorter Width" value = "{{$project->shorterWidth ?? ''}}"/><input list="measurements" name="shorterWidthUnit" placeholder="units" value="{{$project->longerWidthUnit ?? ''}}">
    <input type="text" name="height" placeholder="Height" value = "{{$project->height ?? ''}}"/><input list="heightUnit" name="heightUnit" placeholder="units" value = "{{$project->heightUnit ?? ''}}">
</div>
<div class="form-input">
    <label>Approximate cutting time</label>
    <input type="text" name="cutTime" value="{{$project->cutTime ?? ''}}"/>
    <input list="timeUnits" name="cutTimeUnit" placeholder="units" value="{{$project->cutTimeUnit ?? ''}}">
</div>
<div class="form-input">
    <label>Toolpaths</label>
    <table  name = "table0" border="1">
        <tr id="dynamic_toolpaths">
            <td >

                <table style="border:3px solid #0000ff;">
                    <tr>
                        <td>
                            <label>Toolpath Type</label>
                            <select id = "toolpathType" name="toolpathType" class="dynamic_selector">
                                <option value="" disabled selected>Select your option</option>
                                @foreach($toolpathType as $id => $value)
                                    <option value="{{$id}}"{{isset($project->toolpathType)&&$project->toolpathType==$id?'selected':''}}>{{$value}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <div id = "dynamic_add_fields" ></div>
                </table>
            </td>
        </tr>
    </table>
    <button type="button" name="add" id="add" class="btn btn-success">Add Toolpath</button>
</div>

<div class="form-input">
    <label>post Processing</label> <textarea name="projectProcessing" rows="10" cols="30"> {{$project->projectProcessing ?? ''}}</textarea>
</div>
<div class="form-input">
    <label>Approximate project-proccessing time</label>
    <input type="text" name="processingTime" value = "{{$project->processingTime ?? ''}}"/>
    <input list="timeUnits" name="processingTimeUnit" placeholder="units" value="{{$project->processingTimeUnit ?? ''}}">
</div>

<div class="form-input">
    <label>Is this an Alteration of a project?</label> <input type="url" name="alteration" placeholder="if so, please enter the origonal project URL" value="{{$project->alteration ?? ''}}">
</div>

<div class="form-input">
    <label>Are there other projects you were inspired by?</label> <input type="url" name="inspiration" placeholder="if so, please enter the project URL" value="{{$project->inspiration ?? ''}}">
</div>



<script type="text/javascript">

    $(document).ready(function(){
        var projectURL = "<?php echo route('projects.store'); ?>";
        var i=1;

        $('#add').click(function(){
            i++;
            var html ='<td id="table'+i+'" class="dynamic_added"><table style="border: 3px blue solid;"><tr><td><label>Toolpath Type '+i+'</label><select id = "toolpathType" name="toolpathType" class="dynamic_selector">  <label>Toolpath Type</label> <option value="" disabled selected>Select your option</option>';

            var toolpathType = <?php if(isset($toolpathType)){ echo json_encode($toolpathType);} ?>;
            toolpathType.forEach(function (value, id) {
                html += '<option value="' + id + '"';
                //add is selected if project present
                html += '>' + value + '</option>';
            });

            html += '</select></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr></table></td>';
            $('#dynamic_toolpaths').append(html);
        });

        $(document).on('change', ".dynamic_selector", function(){

            var selected = this.options[this.selectedIndex].text;

           var detachedElements = $(this).closest("table").find(".dynamic_delete_field").detach();
           var html;

            if(selected == "Roughing")
            {
                //Step over
                html += '<tr class="dynamic_delete_field"><td><label>Step Over</label><input type="number" step="0.1" id = "stepOver" name="stepOver"   placeholder="percent" ></td></tr>';
                //step down
                html += '<tr class="dynamic_delete_field"><td><label>Step Down</label><input type="number"  step="0.1"  id = "stepDown " name="stepDown" class="dynamic_delete_field"></td><td><select id = "stepDownUnits" name="stepDownUnits">  <option value="" disabled selected>Select your option</option><option value = "0" >mm</option><option value = "1" >in</option></select></td></tr>';
                //Feed Rate
                html += '<tr class="dynamic_delete_field"><td><label>Feed Rate</label><input type="number"  step="50"  id = "feedRate " name="feedRate" class="dynamic_delete_field"></td><td><select id = "feedRateUnits" name="feedRateUnits">  <option value="" disabled selected>Select your option</option><option value = "0" >mm/min</option><option value = "1" >ipm</option></select></td></tr>';
                //plunge Rate
                html += '<tr class="dynamic_delete_field"><td><label>Plunge Rate</label><input type="number"  step="50"  id = "plungeRate " name="feedRate" class="dynamic_delete_field"></td><td><select id = "plungeRateUnits" name="plungeRateUnits">  <option value="" disabled selected>Select your option</option><option value = "0" >mm/min</option><option value = "1" >ipm</option></select></td></tr>';
                //spindle Speed
                html += '<tr class="dynamic_delete_field"><td><label>Spindle Speed</label><input type="number"  step="50"  id = "spindleSpeed" name="spindleSpeed" class="dynamic_delete_field" placeholder="RPM"></td></tr>';
                //leave Stock
                html += '<tr class="dynamic_delete_field"><td><label>Leave Stock</label><input type="number"  step="50"  id = "leaveStock" name="leaveStock" class="dynamic_delete_field"></td><td><select id = "leaveStockUnits" name="leaveStockUnits"><option value="" disabled selected>Select your option</option><option value = "0" >mm</option><option value = "1" >in</option></select></td></tr>';
                //climb/conventional
                html += '<tr class="dynamic_delete_field"><td><label>Climb/Conventional</label></td><td><select id = "CC" name="CC"><option value="" disabled selected>Select your option</option><option value = "0" >Climb </option><option value = "1" >Conventional</option></select></td></tr>';

                //set a flag if 3D file is uploaded and remove fields if gone
                //Inside/Outside/Inside/Pocket
                html += '<tr class="dynamic_delete_field"><td><label>Inside/Outside/Iline/Pocket</label></td><td><select id = "IOIP" name="IOIP"><option value="" disabled selected>Select your option</option><option value = "0" >Inside</option><option value = "1" >Outside</option><option value = "2" >Inline</option><option value = "3" >Outside</option></select></td></tr>';
                //Cutting Depth
                html += '<tr class="dynamic_delete_field"><td><label>Cutting Depth</label><input type="number"  step="0.1"  id = "stepDown " name="stepDown" class="dynamic_delete_field"></td><td><select id = "stepDownUnits" name="stepDownUnits">  <option value="" disabled selected>Select your option</option><option value = "0" >mm</option><option value = "1" >in</option></select></td></tr>';
            }
            else if(selected == "Finishing")
            {
                //step down
                html += '<tr class="dynamic_delete_field"><td><label>Step Down</label><input type="number"  step="0.1"  id = "stepDown " name="stepDown" class="dynamic_delete_field"></td><td><select id = "stepDownUnits" name="stepDownUnits">  <option value="" disabled selected>Select your option</option><option value = "0" >mm</option><option value = "1" >in</option></select></td></tr>';
                //Feed Rate
                html += '<tr class="dynamic_delete_field"><td><label>Feed Rate</label><input type="number"  step="50"  id = "feedRate " name="feedRate" class="dynamic_delete_field"></td><td><select id = "feedRateUnits" name="feedRateUnits">  <option value="" disabled selected>Select your option</option><option value = "0" >mm/min</option><option value = "1" >ipm</option></select></td></tr>';
                //plunge Rate
                html += '<tr class="dynamic_delete_field"><td><label>Plunge Rate</label><input type="number"  step="50"  id = "plungeRate " name="feedRate" class="dynamic_delete_field"></td><td><select id = "plungeRateUnits" name="plungeRateUnits">  <option value="" disabled selected>Select your option</option><option value = "0" >mm/min</option><option value = "1" >ipm</option></select></td></tr>';
                //spindle Speed
                html += '<tr class="dynamic_delete_field"><td><label>Spindle Speed</label><input type="number"  step="50"  id = "spindleSpeed" name="spindleSpeed" class="dynamic_delete_field" placeholder="RPM"></td></tr>';
                //climb/conventional
                html += '<tr class="dynamic_delete_field"><td><label>Climb/Conventional</label></td><td><select id = "CC" name="CC"><option value="" disabled selected>Select your option</option><option value = "0" >Climb </option><option value = "1" >Conventional</option></select></td></tr>';

            }
            else if(selected == "Relief")
            {
                //Step over
                html += '<tr class="dynamic_delete_field"><td><label>Step Over</label><input type="number" step="0.1" id = "stepOver" name="stepOver"   placeholder="percent" ></td></tr>';
                //Feed Rate
                html += '<tr class="dynamic_delete_field"><td><label>Feed Rate</label><input type="number"  step="50"  id = "feedRate " name="feedRate" class="dynamic_delete_field"></td><td><select id = "feedRateUnits" name="feedRateUnits">  <option value="" disabled selected>Select your option</option><option value = "0" >mm/min</option><option value = "1" >ipm</option></select></td></tr>';
                //plunge Rate
                html += '<tr class="dynamic_delete_field"><td><label>Plunge Rate</label><input type="number"  step="50"  id = "plungeRate " name="feedRate" class="dynamic_delete_field"></td><td><select id = "plungeRateUnits" name="plungeRateUnits">  <option value="" disabled selected>Select your option</option><option value = "0" >mm/min</option><option value = "1" >ipm</option></select></td></tr>';
                //Path Angle
                 html += '<tr class="dynamic_delete_field"><td><label>Path Angle</label><input type="number" step="0.1" id = "pathAngle" name="pathAngle" placeholder="degrees" ></td></tr>';
                //Max Angle
                html += '<tr class="dynamic_delete_field"><td><label>Max Angle</label><input type="number"  step="0.1"  id = "maxAngle" name="maxAngle"  placeholder="degrees" class="dynamic_delete_field"></td></tr>';

            }
            else if(selected == "Drilling")
            {
                //Plunge Depth
                 html += '<tr class="dynamic_delete_field"><td><label>Plunge Depth</label><input type="number" step="0.1" id = "plungeDepth" name="plungeDepth" placeholder="degrees" ></td><td><select id = "plungeDepthUnits" name="plungeDepthUnits">  <option value="" disabled selected>Select your option</option><option value = "0" >mm</option><option value = "1" >in</option></select></td></tr>';
                //Plunge Per
                html += '<tr class="dynamic_delete_field"><td><label>Plunge Per</label><input type="number"  step="0.1"  id = "plungePer" name="plungePer" class="dynamic_delete_field"></td><td><select id = "plungePerUnits" name="plungePerUnits">  <option value="" disabled selected>Select your option</option><option value = "0" >mm</option><option value = "1" >in</option></select></td></tr>';
                //plunge Rate
                html += '<tr class="dynamic_delete_field"><td><label>Plunge Rate</label><input type="number"  step="50"  id = "plungeRate " name="feedRate" class="dynamic_delete_field"></td><td><select id = "plungeRateUnits" name="plungeRateUnits">  <option value="" disabled selected>Select your option</option><option value = "0" >mm/min</option><option value = "1" >ipm</option></select></td></tr>';
                //Dwell Time
                html += '<tr class="dynamic_delete_field"><td><label>Dwell Time</label><input type="number"  step="0.1"  id = "dwellTime" name="dwellTime"  placeholder="seconds" class="dynamic_delete_field"></td></tr>';
                //Drill lift
                html += '<tr class="dynamic_delete_field"><td><label>Drill Lift</label><input type="number"  step="0.1"  id = "drillLift" name="drillLift"  placeholder="degrees" class="dynamic_delete_field"></td><select id = "drillLiftUnits" name="drillLiftUnits">  <option value="" disabled selected>Select your option</option><option value = "0" >mm/min</option><option value = "1" >ipm</option></select></td></tr>';
            }
            else {
               $(this).closest("table").find(".dynamic_delete_field").detach();
            }

            $(this).closest("table").append(html);
        });

        $(document).on('click', '.btn_remove', function(){
            var button_id = $(this).attr("id");
            $('#table'+button_id+'').remove();
        });


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });


        $('#submit').click(function(){
            $.ajax({
                url:projectURL,
                method:"project",
                data:$('#add_name').serialize(),
                type:'json',
                success:function(data)
                {
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        i=1;
                        $('.dynamic-added').remove();
                        $('#add_name')[0].reset();
                        $(".print-success-msg").find("ul").html('');
                        $(".print-success-msg").css('display','block');
                        $(".print-error-msg").css('display','none');
                        $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                    }
                }
            });
        });


        function printErrorMsg (msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display','block');
            $(".print-success-msg").css('display','none');
            $.each( msg, function( key, value ) {
                $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
            });
        }
    });
</script>
