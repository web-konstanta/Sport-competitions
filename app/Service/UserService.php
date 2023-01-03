<?php

namespace App\Service;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Mockery\Exception;

class UserService
{
    public function register($name, $password, $password_confirm)
    {
        try {
            if ($password !== $password_confirm) {
                return redirect('/user/register')->with('error', 'Паролі не співпадають');
            }
            $user = [
                'name' => $name,
                'password' => Hash::make($password)
            ];
            User::create($user);
        } catch (Exception $exception) {
            abort(500);
        }
    }

    public function login($name, $request)
    {
        try {
            $user = User::where('name', $name)->first();
            if (!$user) {
                return redirect('/user/login')->with('error', 'Логін або пароль введені невірно');
            }
            if (Hash::check($request->password, $user->password)) {
                session(['user' => $user->id]);
                return redirect()->route('admin.index');
            }
            return redirect('/user/login')->with('error', 'Логін або пароль введені невірно');
        } catch (Exception $exception) {
            abort(500);
        }
    }
}
