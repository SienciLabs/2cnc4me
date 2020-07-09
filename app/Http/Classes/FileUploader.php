<?php
/*
* FILE			:	FileUploader.php
* PROJECT		:   2cnc4me
* PROGRAMMER	:   Connor Lynch
* FIRST VERSION :   June 12th 2020
* DESCRIPTION	:   a class that abstracts the file uploading and validating processs. it returns a path to where it was saved
*                   
*/
namespace App\Http;

use Illuminate\Support\Facades\Facade;
use Illuminate\Http\Request;
use Illuminate\Filesystem\FilesystemManager;

class FileUploader
{

	public $files;
	public $extensions;
	public $filenames;
	public $paths;
	public $validation = [];

	protected $validationString;
    protected $elementName;

	public function __construct (string $inputString, string $element)
	{
		//figure out if the input string is good before assignment
		$this->validationString = $inputString;
        $this->elementName = $element;
	}
	
	    /*
        * Function		:	public function validate (Request $request)
        * Description	:	vlaidate the file against the validation string input on creation
        * Parameters	:	Request request
        * Returns		:	N/A
        */
    public function validate (Request $request)
    { 
        $arrayIndex;
        //have to alter the index slightly if the input on the page allows for single or multiple uploads
        if(is_array($request->file($this->elementName)))
        {
            $arrayIndex = $this->elementName . '.*';
        }
        else
        {
             $arrayIndex = $this->elementName;
        }

    	$this->validation = $request->validate([$arrayIndex => $this->validationString]);

        $this->files = $this->validation[$this->elementName]; // get the validated file
         
    }
		    /*
        * Function		:	public function save (Request $request, string $folder)
        * Description	:	vlaidate the file against the validation string input on creation
        * Parameters	:	Request request, string $folder
			Request request	: request object
			string $folder	: the folder where to save this
        * Returns		:	N/A
        */
    public function save (Request $request, string $folder)
    {

        $paths  = [];
        //this still gets the files if vlaidation wasnt called
    	if(empty($this->validation))
        {
             $this->files = $request->file($this->elementName);
        }

        if(!is_array($this->files))
        {
            $this->files =  array($this->files);
        }
        foreach($this->files as $file)
        {

            $extension = $file->getClientOriginalExtension();
            $filename  = uniqid() . '.' . $extension;
            //maybe make file path a param for save function
            $paths[] = $file->storeAs('public/' . $folder, $filename);
        }
        return $paths;
    }
}

?>