<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\StoreRequest;
use App\Models\Customer;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        unset($data['checkout']);
        Customer::create($data);
        return redirect('/')->with('success', 'Дані успішно відправлені. Ми вам перездзвонуємо');
    }
}
