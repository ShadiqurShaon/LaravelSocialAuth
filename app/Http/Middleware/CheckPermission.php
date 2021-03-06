<?php

namespace App\Http\Middleware;

use Closure;

class CheckPermission
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
        if($request->user()===null){
            return response("Insufficient permission",401);
        }

        $action = $request->route()->getAction();

        $roles  = isset($action['roles'])? $action['roles']:null;

        if($request->user()->hasAnyRole($roles)){
            return $next($request);
        }

        return response("Insufficient permission",401);

    }
}
