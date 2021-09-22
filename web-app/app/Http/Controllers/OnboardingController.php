<?php

namespace App\Http\Controllers;

use App\Models\Connection;
use App\Models\Invitation;
use App\Models\Keyword;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OnboardingController extends Controller
{
    public function stepOne()
    {
        $facebook = Connection::where('type', 'facebook')->where('user_id', Auth::id())->first();

        return view('onboarding.social-media')
            ->with('facebook', $facebook)
            ->with('step', 1);
    }

    public function stepTwo()
    {
        $teams = Team::where('user_id', Auth::id())->get();
        $invitations = Invitation::all();

        return view('onboarding.invite')
            ->with('teams', $teams)
            ->with('invitations', $invitations)
            ->with('step', 2);
    }

    public function stepThree()
    {
        $keywords = Keyword::where('user_id', Auth::id())->get();

        return view('onboarding.keywords')
            ->with('keywords', $keywords)
            ->with('step', 3);
    }
}
