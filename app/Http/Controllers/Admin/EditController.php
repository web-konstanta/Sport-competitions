<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;

class EditController extends Controller
{
    public function __invoke(Customer $customer)
    {
        return view('admin.edit', compact('customer'));
    }
}
