<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Route;

class Authenticate extends Middleware
{
    protected $admin_route = 'admin.login';
    protected $user_route = 'user.login';
    protected $owner_route = 'owner.login';

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if(Route::is('admin.*')) {
                return route($this->admin_route);
            } elseif(Route::is('owner.*')) {
                return route($this->owner_route);
            } else {
                return route($this->user_route);
            }
        }
    }
}
