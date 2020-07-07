<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
	use SoftDeletes;
	protected $table = 'posts';
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
