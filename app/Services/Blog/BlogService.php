<?php
namespace App\Services\Blog;

class BlogService 
{
    /**
     * make an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return mixed
     */
	function __construct()
	{
		
	}
    
	public function action($objRequest)
    {
		return (new BlogManager)->action($objRequest);
    }
}