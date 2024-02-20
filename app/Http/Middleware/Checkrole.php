<?php
namespace App\Http\Middleware;
use Closure;
class CheckRole
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {
        foreach ($roles as $role) {
          if (! $request->user()->hasRole($role)) {
           return redirect('/login');
          }
          return $next($request);
        }
        return redirect('/login');
    }
}
