<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SocialAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();

        $allowedDomain = 'my.cspc.edu.ph';
        $userEmailDomain = explode('@my.cspc.edu.ph', $user->email)[1];

        if ($userEmailDomain !== $allowedDomain) {
            return redirect('/login')->with('error', 'You are not authorized to access this application.');
        }

        $existingUser = User::where('email', $user->getEmail())->first();

        if (!$existingUser) {
            $newUser = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'google_id' => $user->getId()
            ]);

            Auth::guard()->login($newUser);
        } else {
            Auth::guard()->login($existingUser);
        }

        return redirect('/home');
    }
}