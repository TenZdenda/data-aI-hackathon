<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function store(Request $request)
    {
        Team::create([
            'user_id' => Auth::id(),
            'name' => $request->get('name'),
            'description' => $request->get('description'),
        ]);

        return redirect()->route('onboarding.invite');
    }
}
