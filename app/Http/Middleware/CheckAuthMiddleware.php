<?php

namespace App\Http\Middleware;

use App\Http\Controllers\HomeController;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (!$request->cookie('email')) {
            // Người dùng đã đăng xuất, chuyển hướng đến trang đăng nhập
            // return redirect()->route('page.loginForm');
        }else{
            // dd(2);
            app(HomeController::class)->home();
            // return redirect()->route('page.home');
        }
        return $next($request);
    }
}
