<?php

use Illuminate\Support\Facades\Route;

Route::get('/firebase-otp', function () {
    return view('firebase-otp');
});