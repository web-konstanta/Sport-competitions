<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreRequest;
use App\Models\Customer;

class UpdateController extends Controller
{
    public function __invoke(Customer $customer, StoreRequest $request)
    {
        $data = $request->validated();
        $customer->update($data);
        return redirect('/admin')->with('success', 'Дані успішно відновлені');
    }
}
