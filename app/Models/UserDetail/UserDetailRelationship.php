<?php

namespace App\Models\UserDetail;

trait UserDetailRelationship
{
    public function user()
	{
	    return $this->belongsTo(\App\Models\User\UserModel::class, 'user_id', 'id');
	}

	public function userType()
	{
		return $this->belongsTo(\App\Models\UserType\UserTypeModel::class, 'user_id', 'id')->select('name','wid');
	}
}