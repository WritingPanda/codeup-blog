<?php

use Carbon\Carbon;

Class BaseModel extends Eloquent {

	// Accessor to change the output of time zones
	public function getCreatedAtAttribute($value)
	{
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
    	return $utc->setTimezone('America/Chicago');
	}

	public function getUpdatedAtAttribute($value)
	{
		$utc = Carbon::createFromFormat($this->getDateFormat(), $value);
    	return $utc->setTimezone('America/Chicago');
	}

}