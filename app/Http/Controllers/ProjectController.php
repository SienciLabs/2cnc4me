<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Filesystem\FilesystemManager;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



use App\Http\FileUploader;
//include 'App\Http\Classes\FileUploader';

class ProjectController extends Controller
{
	//hardcoded values
	public $machines = array("sienci longmill 30\" x 30\"", "sienci shortmil 10\" x 10\"");
	public $categories = array("Furniture", "Signs", "Joinery", "Games", "Toys", "Sculptures", "Kitchen", "CNC Mods", "Music");
	public $toolpathType = array("Roughing", "Finishing", "Relief", "Drilling");
	public $endMill = array("1/4\" flat end mill", "another end mill option", "yet another option...");
	public $stepOver = array("yes, do step over", "do not step on");
	public $stepDown = array("option 1", "option 2", "option 3");
	public $feedRate = array("If you couldnt tell", "I do not know what values", "to put here");
	public $plungeRate = array("talk to chris", "and the gang", "about these");

	        /*
        * Function		:   public function create()
        * Description	:	returns the creaet project currently with hardcoded values but in the future will call on the DB
        * Parameters	:	N/A
        * Returns		: 	the create project page
        */
    public function create()
    {

        return view('projects/create')
        ->with('machines', $this->machines)
        ->with('categories', $this->categories)
        ->with('toolpathType', $this->toolpathType)
        ->with('endMill', $this->endMill)
        ->with('stepOver', $this->stepOver)
        ->with('stepDown', $this->stepDown)
        ->with('feedRate', $this->feedRate)
        ->with('plungeRate', $this->plungeRate);
    }

		/*
        * Function		:	public function store(Request $request)
        * Description	:	validates files and saves photos to local storage. create a project object and saves it to the database
        * Parameters	:	Request request
        * Returns		:	redirects back to the prject index page
        */
    public function store(Request $request)
    {
    	$result = $request->input();
	    // validate the uploaded file
	    //$validation = $request->validate(['photo' => 'required|file|image|mimes:jpeg,png,gif,webp|max:2048']);

	    //$file      = $validation['photo']; // get the validated file
	    //$extension = $file->getClientOriginalExtension();
	    //$filename  = time() . '.' . $extension;
	    //the path for save as differs for calling the image this code saves the correct path into the DB






	    $fileUploader  = new FileUploader('file|mimes:svg,dxf,stl,obj,step', 'files');
	    //update validation string its breaking stuff
	    //$fileUploader->validate($request);
	    $filePaths = $fileUploader->save($request, 'files');

		foreach($filePaths as $path)
		{
			$path = Str::after($path, 'public');
		    $path = '/storage' . $path;
		    $result = Arr::add($result, 'filePath', $path);
		}


	    $imageUploader  = new FileUploader('file|image|mimes:jpeg,png,gif,webp|max:2048', 'photos');
	    $imageUploader->validate($request);
	    $imagePaths = $imageUploader->save($request, 'photo');
	    foreach($imagePaths as $path)
	    {
	    	$path = Str::after($path, 'public');
		    $path = '/storage' . $path;
		   	//adds path to arr of values to be added to DB
		    $result = Arr::add($result, 'photoPath', $path);
		}




		    project::create($result);

	   	return redirect('/projects');
    }
	        /*
        * Function		:   public function Index
        * Description	:	returns all projects to the page
        * Parameters	:	N/A
        * Returns		: 	all projects regardless of user
        */
     public function index()
    {
    	//$user =  Auth::id();
    	$project = project::all();

        return view('projects/index', ['allprojects' => $project]);
    }

		/*
        * Function		:   public function show(project $project)
        * Description	:	shows a project details
        * Parameters	:	project $project
        * Returns		: 	the project and its parameters on display
        */
    public function show(project $project)
    {
        return view('projects/show', ['project' => $project])
        ->with('machines', $this->machines)
        ->with('categories', $this->categories)
        ->with('toolpathType', $this->toolpathType)
        ->with('endMill', $this->endMill)
        ->with('stepOver', $this->stepOver)
        ->with('stepDown', $this->stepDown)
        ->with('feedRate', $this->feedRate)
        ->with('plungeRate', $this->plungeRate);

    }
	
	    /*
        * Function		:   public function edit(project $project)
        * Description	:	allows the editing of a field
        * Parameters	:	project proect
        * Returns		: 	a page to edit the chosen project
        */
    public function edit(project $project)
    {

    	//$project = DB::table('projects')->where('id', $project->id)->first();
        return view('projects.edit')
        ->with('project', $project)
        ->with('machines', $this->machines)
        ->with('categories', $this->categories)
        ->with('toolpathType', $this->toolpathType)
        ->with('endMill', $this->endMill)
        ->with('stepOver', $this->stepOver)
        ->with('stepDown', $this->stepDown)
        ->with('feedRate', $this->feedRate)
        ->with('plungeRate', $this->plungeRate);
    }
	
	   /*
        * Function		:   public function update(Request $request,project $project)
        * Description	:	updates one project with another
        * Parameters	:	Request $request,project $project
        * Returns		: redirects back to project index
        */
     public function update(Request $request,project $project)
    {
    	$project->fill($request->input());
        $project->save();
        //this syncss the users and projects once linked
        //$project->users()->sync([$request->input('user_id')]);

        return redirect()->action('ProjectController@index');
    }
        /*
        * Function		:    public function destroy(project $project)
        * Description	:	deletes a project from the DB (currently using soft deletes)
        * Parameters	:	project $project
        * Returns		: 	return to project index
        */
    public function destroy(project $project)
    {
    	//users and projects arent currently attached
        //$project->users()->detach();

        $project->delete();

        return redirect()->action('ProjectController@index');
    }

}
