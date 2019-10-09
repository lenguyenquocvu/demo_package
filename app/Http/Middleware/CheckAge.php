<?php 
namespace App\Http\Middleware;
use Closure;
class CheckAge {
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}