<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\Auth;


class ProductMiddleware
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
       if (Auth::user()->hasPermissionTo('Administer roles & permissions')) //If user has this //permission
    {
            return $next($request);
        }

        if ($request->is('products/create'))//If user is creating a product
         {
            if (!Auth::user()->hasPermissionTo('Create Product'))
         {
                abort('401');
            } 
         else {
                return $next($request);
            }
        }

        if ($request->is('products/*/edit')) //If user is editing a product
         {
            if (!Auth::user()->hasPermissionTo('Edit Product')) {
                abort('401');
            } else {
                return $next($request);
            }
        }

        if ($request->isMethod('Delete')) //If user is deleting a product
         {
            if (!Auth::user()->hasPermissionTo('Delete Product')) {
                abort('401');
            } 
         else 
         {
                return $next($request);
            }
        }

        return $next($request);
    }
}
