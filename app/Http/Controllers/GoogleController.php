<?php

namespace App\Http\Controllers;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback(Request $request)
    {
        try {
            // Configure Guzzle with the CA certificate
            $googleUser = Socialite::driver('google')
                ->setHttpClient(new Client([
                    'verify' => 'E:\wamp\bin\php\php8.2.13\extras\ssl\cacert.pem', // Path to cacert.pem
                ]))
                ->stateless()
                ->user();

            // Check if the user already exists
            $findUser = User::where('google_id', $googleUser->id)->orWhere('email', $googleUser->getEmail())->first();

            if ($findUser) {
                // If user exists, log them in
                Auth::login($findUser);
                return redirect()->intended(route('user.dashboard'))->with('success','User Login Successfully.');
            } else {
                // If user does not exist, create a new user
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'password' => bcrypt('12345'), // Dummy password
                ]);
                Auth::login($user);
                return redirect()->intended(route('user.dashboard'))->with('success','User Login Successfully.');
            }
        } catch (\Exception $e) {
            // Handle exceptions
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
