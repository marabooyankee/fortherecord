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

Route::resource('users', 'UsersController');

Route::get("mail",
        function () {
            $token = 'haha';
            return Mail::send("emails.auth.reminder", array('token' => $token),
                            function ($m) {
                                $m->from('nightmare365@codegladiators.com');
                                $m->to("kimkam90@gmail.com");
                            });
        });