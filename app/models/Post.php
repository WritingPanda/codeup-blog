<?php

class Post extends BaseModel {

	// The db table this model relates to
    protected $table = 'posts';
    protected $imgDir = 'img-upload';

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

	public function addUploadedImage($image)
	{
		$systemPath = public_path() . '/' . $this->imgDir . '/';

		$imageName = $this->id . '-' . $image->getClientOriginalName();

		$image->move($systemPath, $imageName);

		$this->img_path = '/' . $this->imgDir . '/' . $imageName;
	}

}