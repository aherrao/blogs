<?php

namespace App\Models\UserDetail;

trait UserDetailAttribute {

	public function getCreatedByAttribute()
	{
		return $this->attributes['created_by'];
	}

	public function setCreatedByAttribute($value)
	{
		$this->attributes['created_by'] = auth()->id();
	}

	public function getUpdatedByAttribute()
	{
	    return $this->attributes['updated_by'];
	}

	public function setUpdatedByAttribute($value)
	{
	    $this->attributes['updated_by'] = auth()->id();
	}
}