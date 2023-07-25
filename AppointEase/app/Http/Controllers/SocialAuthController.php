<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User; // Import the User model
use Illuminate\Support\Facades\Auth; // Import the Auth facade

class SocialAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('google')->user();

        // Check if the user's email belongs to the organizational domain.
        $allowedDomain = 'my.cspc.edu.ph';
        $userEmailDomain = explode('@my.cspc.edu.ph', $user->email)[1];

        if ($userEmailDomain !== $allowedDomain) {
            // Unauthorized access, redirect or show an error message.
            return redirect('/login')->with('error', 'You are not authorized to access this application.');
        }

        // Check if the user already exists in the database
        $existingUser = User::where('email', $user->getEmail())->first();

        if (!$existingUser) {
            // If the user doesn't exist, create a new user record in the database
            $newUser = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'google_id' => $user->getId()
            ]);

            // Log in the new user
            Auth::guard()->login($newUser);
        } else {
            // If the user already exists, log in the existing user
            Auth::guard()->login($existingUser);
        }

        return redirect('/home'); // Redirect the user after successful login.
    }
}
