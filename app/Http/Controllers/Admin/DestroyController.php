<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;

class DestroyController extends Controller
{
    public function __invoke(Customer $customer)
    {
        $customer->delete();
        return redirect('/admin')->with('success', 'Дані відалені успішно');
    }
}
