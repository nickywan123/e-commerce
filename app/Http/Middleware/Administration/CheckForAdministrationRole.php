<?php

namespace App\Http\Middleware\Administration;

use Closure;

use App\Models\Users\User;
use Auth;

class CheckForAdministrationRole
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
        $user = User::find(Auth::user()->id);

        if (!$user->hasRole(['dealer', 'panel', 'administrator'])) {
            abort(401, 'Unauthorized action.');
        } else {
            return $next($request);
        }
    }
}
