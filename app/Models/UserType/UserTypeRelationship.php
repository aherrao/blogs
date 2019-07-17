<?php

namespace App\Models\UserType;

trait UserTypeRelationship
{
    public function userDetail()
	{
		return $this->hasMany(\App\Models\UserDetail\UserDetailModel::class, 'user_type_id', 'id');
	}

}