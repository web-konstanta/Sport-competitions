<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function __invoke(Request $request)
    {
        if ($request->session()->has('user')) {
            session()->forget('user');
            return redirect()->route('user.login');
        }
    }
}
