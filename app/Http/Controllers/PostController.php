<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Filesystem\FilesystemManager;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



use App\Http\FileUploader;
//include 'App\Http\Classes\FileUploader';

class PostController extends Controller
{
	//hardcoded values
	public $machines = array("sienci longmill 30\" x 30\"", "sienci shortmil 10\" x 10\"");
	public $categories = array("Furniture", "Signs", "Joinery", "Games", "Toys", "Sculptures", "Kitchen", "CNC Mods", "Music");
	public $toolpathType = array("Roughing", "not Roughing", "Smoothing");
	public $endMill = array("1/4\" flat end mill", "another end mill option", "yet another option...");
	public $stepOver = array("yes, do step over", "do not step on");
	public $stepDown = array("option 1", "option 2", "option 3");
	public $feedRate = array("If you couldnt tell", "I do not know what values", "to put here");
	public $plungeRate = array("talk to chris", "and the gang", "about these");

    public function create()
    {

        return view('posts/create')
        ->with('machines', $this->machines)
        ->with('categories', $this->categories)
        ->with('toolpathType', $this->toolpathType)
        ->with('endMill', $this->endMill)
        ->with('stepOver', $this->stepOver)
        ->with('stepDown', $this->stepDown) 
        ->with('feedRate', $this->feedRate)
        ->with('plungeRate', $this->plungeRate);
    }

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




		    Post::create($result);

	   	return redirect('/posts');
    }

     public function index()
    {
    	//$user =  Auth::id();
    	$post = Post::all();
         
        return view('posts/index', ['allPosts' => $post]);
    }

    public function show(Post $post)
    {

        return view('posts/show', ['post' => $post])
        ->with('machines', $this->machines)
        ->with('categories', $this->categories)
        ->with('toolpathType', $this->toolpathType)
        ->with('endMill', $this->endMill)
        ->with('stepOver', $this->stepOver)
        ->with('stepDown', $this->stepDown) 
        ->with('feedRate', $this->feedRate)
        ->with('plungeRate', $this->plungeRate);

    }
    public function edit(Post $post)
    {
    	
    	//$post = DB::table('posts')->where('id', $post->id)->first();
        return view('posts.edit')
        ->with('post', $post)
        ->with('machines', $this->machines)
        ->with('categories', $this->categories)
        ->with('toolpathType', $this->toolpathType)
        ->with('endMill', $this->endMill)
        ->with('stepOver', $this->stepOver)
        ->with('stepDown', $this->stepDown) 
        ->with('feedRate', $this->feedRate)
        ->with('plungeRate', $this->plungeRate);
    }
     public function update(Request $request,Post $post)
    {
    	$post->fill($request->input());
        $post->save();
        //this syncss the users and posts once linked
        //$post->users()->sync([$request->input('user_id')]);

        return redirect()->action('PostController@index');
    }

    public function destroy(Post $post)
    {
    	//users and posts arent currently attached 
        //$post->users()->detach();

        $post->delete();

        return redirect()->action('PostController@index');
    }

}
