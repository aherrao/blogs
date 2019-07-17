<?php
namespace App\Models\Blog;

use App\Models\BaseModel;

class BlogModel extends BaseModel
{
    use Blogs, BlogAttribute, BlogRelationship;

    protected $table = 'blogs';

    protected $fillable = [
        'title',
        'slug',
        'description',
		'created_by',
        'updated_by'
    ];

    public static $validations =  [
        'title' => 'required',
    ];
    protected static function boot()
    {
    }
}
