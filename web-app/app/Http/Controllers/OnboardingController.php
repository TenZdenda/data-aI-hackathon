<?php

namespace App\Http\Controllers;

use App\Models\Connection;
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
        return view('onboarding.invite')
            ->with('step', 2);
    }

    public function stepThree()
    {
        return view('onboarding.keywords')
            ->with('step', 3);
    }
}
