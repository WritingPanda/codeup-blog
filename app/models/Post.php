<?php

use Carbon\Carbon;

class Post extends Eloquent {

    protected $table = 'posts';

    public static $rules = [
	    'title'      => 'required|max:100',
	    'body'       => 'required|max:10000'
	];

	public function getCreatedAtAttribute($value)
	{
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
    	return $utc->setTimezone('America/Chicago');
	}
}