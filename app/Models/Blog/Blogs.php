<?php
namespace App\Models\Blog;

trait Blogs {

    public function fetchBlogDetailsWithPaginate($request)
    {
        $query = self::query();

        $limit = $request->limit ?? 10;

        return $query->paginate($limit);
    }
}