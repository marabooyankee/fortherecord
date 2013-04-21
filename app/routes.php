<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::get("signup", array("uses" => "HomeController@showSignup"));

Route::post("signup", array("uses" => "HomeController@postSignup"));


Route::get("/", array("uses" => "HomeController@showWelcome"));

Route::get("feeling", array("uses" => "HomeController@getFeeling"));

Route::post("feeling", array("uses" => "HomeController@postFeeling"));

Route::get("{user}/feeling", array("uses" => "HomeController@getUserFeeling"))
        ->where("user", "[a-z]+");

Route::get('recentfeelings',array("uses"=>  'HomeController@getRecentfeelings'));
Route::get('strongfeelings',array("uses"=> 'HomeController@getStrogestFeelings'));
Route::resource('users', 'UsersController');




