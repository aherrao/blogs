<?php

namespace App\Models\UserType;

use App\Models\BaseModel;

class UserTypeModel extends BaseModel {

	use UserTypes, UserTypeAttribute, UserTypeRelationship;

	protected $table = 'user_types';

	protected $fillable = [
		'name',
		'sub_domain',
		'description',
		'UserDetail_type_id',
		'UserDetail_status_type_id',
		'created_by',
		'updated_by'
	];

	protected static function boot() {
		/**
		 * Override boot function with parent boot function
		 * 1. Avoide to add global scope
		 * 2. It's blank function
		 */
	}
}
