<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Inertia\Middleware;

use Illuminate\Support\Facades\Auth;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Defines the props that are shared by default.
     *
     * @see https://inertiajs.com/shared-data
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'flash' => [
                'success' => $request->session()->get('success')
            ],
           'user' => $request->user() ? [
                'id' => $request->user()->id,
                'first_name' => $request->user()->first_name,
                'last_name' => $request->user()->last_name, 
                'email' => $request->user()->email,
                'notificationCount' => $request->user()->unreadNotifications()->count()
            ] : null , 

            'prof' => Auth::guard('professional')->user() ? [
            'first_name' => Auth::guard('professional')->user()->first_name,
            'last_name' => Auth::guard('professional')->user()->last_name,
            'email' =>  Auth::guard('professional')->user()->email,
            'bio' => Auth::guard('professional')->user()->bio,
            'profession' => Auth::guard('professional')->user()->profession,
            'notificationCount' => Auth::guard('professional')->user()->unreadNotifications()->count()
            ] : null ,

            
        ]);
    }
}
 /* 'professional' => $request->user() ? [
                'id' => $request->user()->id,
                'email' => $request->user()->email,
            ] : null , */
         /*   'auth.user' => fn () => $request->user()
            ? $request->user()->only('id', 'email')
            : null, */