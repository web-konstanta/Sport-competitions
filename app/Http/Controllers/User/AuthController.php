<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\LoginRequest;
use App\Models\User;

class AuthController extends BaseController
{
    public function __invoke(LoginRequest $request, User $user)
    {
        $name = $request->name;
        $this->service->login($name, $request);
        return redirect()->route('admin.index');
    }
}
