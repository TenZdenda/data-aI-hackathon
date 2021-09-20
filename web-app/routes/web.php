<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['logout' => false]);
Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {
    // Onboarding process
    Route::get('/onboarding/social-media', [\App\Http\Controllers\OnboardingController::class, 'stepOne']);
    Route::get('/onboarding/invite', [\App\Http\Controllers\OnboardingController::class, 'stepTwo']);
    Route::get('/onboarding/keywords', [\App\Http\Controllers\OnboardingController::class, 'stepThree']);
});


// Microsoft
Route::get('/sign-up/microsoft', function () {
    return Socialite::driver('microsoft')->redirect();
});

Route::get('/sign-up/callback', function () {

});

// FACEBOOK
Route::get('/facebook/sign-in', function () {
    return Socialite::driver('facebook')->scopes([
        "ads_management",
        "pages_manage_cta",
        "pages_manage_instant_articles",
        "pages_show_list",
        "pages_messaging",
        "pages_messaging_phone_number",
        "pages_messaging_subscriptions",
        "pages_read_engagement",
        "pages_manage_metadata",
        "pages_read_user_content",
        "pages_manage_ads",
        "pages_manage_posts",
        "pages_manage_engagement",
    ])->redirect();
});

Route::get('/auth/callback', [\App\Http\Controllers\ConnectionController::class, 'connectToFacebook']);

Route::get('/instagram/login', function () {
    return Socialite::driver('instagram')->redirect();
});

Route::get('instagram/callback', function () {
    $user = Socialite::driver('instagram')->user();

    dd($user);
});
