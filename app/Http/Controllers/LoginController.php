<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class LoginController extends Controller
{
    public function index(Request $request) {
        return Inertia::render('Auth/login');
    }

    public function store(LoginRequest $request) {

        if (!Auth::attempt($request->validated())) {
            return back()->withErrors([
                'message' => 'Não foi possivel efetuar o login'
            ]);
        }
        return redirect()->route('dashboard');
    }
}
