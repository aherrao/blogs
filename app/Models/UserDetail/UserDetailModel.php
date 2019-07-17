<?php
namespace App\Models\UserDetail;

use App\Models\BaseModel;

class UserDetailModel extends BaseModel
{

    use UserDetails,  UserDetailRelationship;

    protected $table = 'user_details';

    protected $fillable = [
        'user_id',
        'first_name',
        'middile_name',
        'surname',
        'user_type_id',
        'created_by',
        'updated_by'
    ];

    public static $validations =  [
        'first_name' => 'required',
        'user_id' => 'required|integer',
        'user_type_id' => 'required|integer'
    ];
    protected static function boot()
    {
    /**
     * Override boot function with parent boot function
     * 1.
     * Avoide to add global scope
     * 2. It's blank function
     */
    }
}
