<?php

namespace App\Models\Blog;

trait BlogRelationship
{
    public function user()
	{
	    return $this->belongsTo(\App\Models\User\UserModel::class, 'created_by', 'id');
	}
}