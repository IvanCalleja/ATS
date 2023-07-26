<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
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
        Log::info('handleProviderCallback - Start');

        $user = Socialite::driver('google')->user();

        //dd($user);

        Log::info('User Data:', (array)$user);

        $allowedDomain = 'my.cspc.edu.ph';
        $userEmailDomain = explode('@my.cspc.edu.ph', $user->email)[1];

        Log::info('User Email Domain:', ['email_domain' => $userEmailDomain]);

        if ($userEmailDomain !== $allowedDomain) {
            Log::warning('Unauthorized access attempt from domain: ' . $userEmailDomain);

            return redirect('/login')->with('error', 'You are not authorized to access this application.');
        }

        $existingUser = User::where('email', $user->getEmail())->first();

        if (!$existingUser) {
            Log::info('Creating a new user');

            $newUser = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'google_id' => $user->getId()
            ]);

            Log::info('New User Data:', ['user' => $newUser->toArray()]);

            Auth::guard()->login($newUser);
        } else {
            Log::info('Existing user login');

            Auth::guard()->login($existingUser);
        }

        Log::info('handleProviderCallback - End');

        return redirect('/home');
    }
}
