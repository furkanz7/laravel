<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return 'about';
});

Route::get('/hello/{name}/info', function ($name) {
    return 'Hello ' . $name.'!';
});

Route::get('/tmp', [TempController::class, 'tmpFunction']);

Route::resource('customers', CustomerController::class);
Route::resource('meals', MealController::class);
Route::resource('foods', FoodController::class);
Route::resource('exercises', ExerciseController::class);
Route::resource('activities', ActivityController::class);

