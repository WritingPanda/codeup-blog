<?php

class Post extends BaseModel {

	// The db table this model relates to
    protected $table = 'posts';

    // Validation rules for the model properties
    public static $rules = [
	    'title'      => 'required|max:100',
	    'body'       => 'required|max:10000'
	];

	// Method to show relationship
	public function user()
	{
	    return $this->belongsTo('User');
	}

}