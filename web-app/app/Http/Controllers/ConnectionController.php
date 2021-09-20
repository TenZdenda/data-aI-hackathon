<?php

namespace App\Http\Controllers;

use App\Models\Connection;
use Facebook\Facebook;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class ConnectionController extends Controller
{
    /**
     * @throws \Facebook\Exceptions\FacebookSDKException
     */
    public function connectToFacebook()
    {
        $facebookSocialite = Socialite::driver('facebook')->user();

        $facebook = new Facebook([
            'app_id' => env('FACEBOOK_CLIENT_ID'),
            'app_secret' => env('FACEBOOK_CLIENT_SECRET'),
        ]);

        $access_token = $facebook->getOAuth2Client()->getLongLivedAccessToken($facebookSocialite->token);

        Connection::create([
            'user_id' => Auth::id(),
            'type' => 'facebook',
            'access_token' => $access_token
        ]);

        $pages = $facebook->get('/' . $facebookSocialite->id . '/accounts', $access_token);
        $jsonFormat = json_decode($pages->getBody());

        return redirect()->route('/onboarding/social-media');
    }
}
