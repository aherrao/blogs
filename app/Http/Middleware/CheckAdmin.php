<?php

namespace App\Http\Middleware;

use App\Models\UserDetail\UserDetailModel;
use Closure;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		if(1 != auth()->id()) {
			 $userDetail = UserDetailModel::where('user_id', auth()->id())->first();

			if (is_null($userDetail) || 1 != $userDetail->user_type_id) {
				return redirect('access_denied');
			}
		}
       
        return $next($request);
    }
}
