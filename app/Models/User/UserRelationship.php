<?php

namespace App\Models\User;

trait UserRelationship
{
    public function userDetail()
	{
		return $this->hasOne(\App\Models\UserDetail\UserDetailModel::class, 'user_id', 'id');
	}

    public function blog()
	{
	    return $this->hasMany(\App\Models\Blog\BlogModel::class, 'created_by', 'id');
	}
}