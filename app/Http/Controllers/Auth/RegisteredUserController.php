<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:users', 'regex:/^\S*$/u'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'string'],
            'notelepon' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'tipemember' => ['required', 'string', 'max:255'],
            'imnotrobot' => ['required', 'string', 'max:255'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'notelepon' => $request->notelepon,
            'alamat' => $request->alamat,
            'tipemember' => $request->tipemember,
            'imnotrobot' => $request->imnotrobot,
            'institutlemdikti' => $request->institutlemdikti,
            'perguruantinggi' => $request->perguruantinggi,
            'institusi' => $request->perguruantinggi,
            'ktp' => $request->ktp,
            'karpeg' => $request->karpeg,
            'ijasah' => $request->ijasah,
        ]);

        // event(new Registered($user));

        // Auth::login($user);

        return view('auth.login');
    }
}
