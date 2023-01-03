<?php

namespace App\Http\Controllers\User;

use App\Http\Requests\User\RegisterRequest;

class RegisterController extends BaseController
{
    public function __invoke(RegisterRequest $request)
    {
        $name = $request->name;
        $password = $request->password;
        $password_confirm = $request->password_confirm;
        $this->service->register($name, $password, $password_confirm);
        return redirect()->route('user.login');
    }
}
