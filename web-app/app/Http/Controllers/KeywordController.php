<?php

namespace App\Http\Controllers;

use App\Models\keyword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeywordController extends Controller
{
    public function store(Request $request)
    {
        $keywords = explode(",", $request->get('keywords'));

        foreach ($keywords as $keyword) {
            Keyword::create([
                'user_id' => Auth::id(),
                'keyword' => $keyword
            ]);
        }

        return redirect()->route('onboarding.keywords');
    }
}
