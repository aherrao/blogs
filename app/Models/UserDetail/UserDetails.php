<?php
namespace App\Models\UserDetail;

trait UserDetails {

    public function fetchUserDetailsWithPaginate($request)
    {
        $query = self::query();

        $limit = $request->limit ?? 10;

        return $query->with('user')->paginate($limit);
    }
}