<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke()
    {
        $customers = Customer::all();
        $user = User::where('id', session('user'))->first();
        return view('admin.index', compact('customers', 'user'));
    }
}
