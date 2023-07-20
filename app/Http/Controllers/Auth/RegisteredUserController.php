<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Mail\NotifyMail;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Mail\RegisterNotifyMail;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

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
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ],
        [
            'email.required' => 'Email field is required',
            'email.unique' => 'This email address has already been registered. Thank you!',
            'name.required' => 'You have to choose type of the file!',
            'password.required' => 'You have to choose type of the file!'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'config_level' => "first",
            'id_user_type' => 1
        ]);

        event(new Registered($user));
        Mail::to($request->email)->send(new NotifyMail($request->email,$request->name));
        Mail::to("register@dielpi.com")->send(new RegisterNotifyMail());


        Auth::login($user);

        //return redirect(RouteServiceProvider::HOME);
        return redirect('mail-confirm')->with('status','Thanks for signing up, we value your business.')
        ->with('email',$request->email)
        ->with('name',$request->name);
    }
}
