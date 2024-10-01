<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/signin', function() {
    return view('signinpage');
});

Route::get('/signup', function() {
    return view('signuppage');
});

Route::get('/profile', function() {
    return view('Profile');
});
