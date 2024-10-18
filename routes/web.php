<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingPage');
})->name('landing');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function () {
    return view('login');
})->name('login-post');

use faker\Factory as Faker;

Route::post('/main', function () {
    $contacts = [];
    $faker = Faker::create();
    for ($i = 1; $i <= 10; $i++) {
        $contacts[] = [
            'nama' => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'nohp' => $faker->phoneNumber
        ];
    };
    return view("contactPage", ['contacts' => $contacts]);
})->name('main');

Route::get('/register', function () {
    return view('register');
})->name('register');
