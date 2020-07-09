<?php
/*
* FILE			:	Project.php
* PROJECT		:   2cnc4me
* PROGRAMMER	:   Connor Lynch
* FIRST VERSION :   June 8th 2020
* DESCRIPTION	:   model of a project including its attributes and relations
*                   
*/
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
	use SoftDeletes;
	protected $table = 'project';

	//need to accommodate multiple toolpaths
        protected $fillable = [
        'title',
        'description',
        'photoPath',
        'category',
        'video',
        'details',
        'machine',
        'material',
        'filePath',
        'longerWidth',
        'longerWidthUnit',
        'shorterWidth',
        'shorterWidthUnit',
        'height',
        'heightUnit',
        'cutTime',
        'cutTimeUnit',
        'processingTime',
        'processingTimeUnit',
        'toolpathType',
        'endMill',
        'stepOver',
        'stepDown',
        'feedRate',
        'plungeRate',
        'postProcessing',
        'alteration',
        'inspiration'
    ];




    public function user()
    {
    	return $this->belongsTo(App\User);
    }
}
