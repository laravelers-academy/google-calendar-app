<?php

use Illuminate\Support\Facades\Route;


# API
    use Illuminate\Support\Facades\Auth;
    use Innoboxrr\GoogleCalendar\Facades\Auth as GoogleAuth;
    use Innoboxrr\GoogleCalendar\Facades\Calendar;
    use Illuminate\Http\Request;
    use Innoboxrr\GoogleCalendar\Models\GoogleCalendarSetup;

    Route::get('google/redirect', function (){
        return GoogleAuth::authRedirect();
    });

    Route::get('google/callback', function (Request $request){
        $user = \App\Models\User::find(1); // Hardcoded user id
        Auth::login($user);
        return GoogleCalendarSetup::callback($request->code);
    });

    Route::get('google/events', function (){
        $user = \App\Models\User::find(1); // Hardcoded user id
        Auth::login($user);
        return response()->json(Calendar::getEvents());
    });

# VUE APP

    Route::get('{any?}', '\App\Http\Controllers\AppController@app')
        ->where('any', '^(?!api).*$')
        ->name('app');

    Route::domain('{subdomain}.' . env('SESSION_DOMAIN'))->group(function () {

        Route::get('{any?}', '\App\Http\Controllers\AppController@app')
            ->where('any', '^(?!api).*$')
            ->name('subdomain.app');

    });