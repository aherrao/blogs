<?php

namespace App\Http\Middleware;

use App\Models\Blog\BlogModel;
use Closure;

class CheckAuthor
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
        $blog = BlogModel::where('created_by', auth()->id())->first();

        if (is_null($blog)) {
            return redirect('access_denied1');
        }

        return $next($request);
    }
}
