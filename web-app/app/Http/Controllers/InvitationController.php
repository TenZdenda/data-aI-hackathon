<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvitationController extends Controller
{
    public function store(Request $request)
    {
        $emails = explode(",", $request->get('emails'));

        foreach ($emails as $email) {
            Invitation::create([
                'user_id' => Auth::id(),
                'email' => $email
            ]);
        }

        return redirect()->route('onboarding.invite');
    }
}
