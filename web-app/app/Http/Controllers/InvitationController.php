<?php

namespace App\Http\Controllers;

use App\Models\Invitation;
use Illuminate\Http\Request;

class InvitationController extends Controller
{
    public function store(Request $request)
    {
        $emails = explode(",", $request->get('emails'));

        foreach ($emails as $email) {
            Invitation::create([
                'email' => $email
            ]);
        }

        return redirect()->route('onboarding.invite');
    }
}
