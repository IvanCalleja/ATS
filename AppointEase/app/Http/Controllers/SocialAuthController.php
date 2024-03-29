<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\DB;


class SocialAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleProviderCallback()
    {
        try {
            $google_user = Socialite::driver('google')->user();
            $user = User::where('email', $google_user->getEmail())->first();

            if (!$user) {
                // If User does not exist in the database
                $new_user = User::create([
                    'name' => $google_user->getName(),
                    'email' => $google_user->getEmail(),
                    'google_id' => $google_user->getId(),
                    'profile_image' => $google_user->getAvatar(),
                    'role_id' => 3, // 1-ADMIN, 2-STAFF, 3-CLIENT
                ]);

                Auth::login($new_user);

                return redirect()->intended('client1');
            } else {
                Auth::login($user);

                return redirect()->intended('client1');
            }
        } catch (\Throwable $th) {
            //dd('Something went wrong!' . $th->getMessage());
        }
    }

}