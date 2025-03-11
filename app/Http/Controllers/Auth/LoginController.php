<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login()
    {
        $user = User::query()
            ->where('email', '=', request()->email)
            ->first();

        if ($user) {
            $verifyPassword = Hash::check(request()->password, $user->password);

            if ($verifyPassword) {
                auth()->login($user);

                return redirect()->route('dashboard');
            }
        }

        return back()->with(['message' => 'Uusário ou senha inválidos!']);
    }
}
