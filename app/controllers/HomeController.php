<?php

class HomeController extends BaseController {
    /*
      |--------------------------------------------------------------------------
      | Default Home Controller
      |--------------------------------------------------------------------------
      |
      | You may wish to use controllers instead of, or in addition to, Closure
      | based routes. That's great! Here is an example controller method to
      | get you started. To route to this controller, just add the route:
      |
      |	Route::get('/', 'HomeController@showWelcome');
      |
     */

    public function __construct() {
        
    }

    public function showWelcome() {
        return View::make('home.hello');
    }

    public function showSignup() {
        return View::make("home.signup");
    }

    public function postSignup() {

        $rules = array(
            "firstname" => "required",
            "lastname" => "required",
            "password" => "required",
            "gender" => "required|in:F,M",
            "location" => "required",
            "email" => "unique:users,email",
        );

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {

            return Redirect::to("/signup")->withErrors($validator);
        }

        $userCredentials = array(
            "firstname" => Input::get("firstname"),
            "lastname" => Input::get("lastname"),
            "password" => Hash::make(Input::get("password")),
            "gender" => Input::get("gender"),
            "location" => Input::get("location"),
            "email" => Input::get("email"),
        );

        $user = User::create($userCredentials);

       Auth::loginUsingId($user->id);
        return Redirect::to("/users/$user->id");
    }

    public function getProfile() {
        return View::make("home.profile");
    }

    public function getFeeling() {
        return View::make("home.feeling");
    }

    public function postFeeling() {

        $feeling = Input::get('emotion');
        //clean feeling
        $feeling = preg_replace("/[^A-Za-z0-9 ]/", '', $feeling);

        /* @var $dbfeeling Feeling */
        $dbfeeling = Feeling::whereFeeling($feeling)->first();

        $text = Input::get('text');

        $post = new Post();
        $post->text = $text;

        return $dbfeeling->posts()->save($post);
    }

    public function getRecentfeelings() {
        return Post::with("feelings")->take(10)->get();
    }

    public function getStrogestFeelings() {

        return FeelingsPost::with(array("feeling"))->groupBy('feeling_id')->orderBy('num', 'desc')->get(array(
                    'feeling_id', DB::raw('Count(*) as num')));
    }

    public function postLogin() {
        $email = Input::get('email');
        $password = Input::get('password');

        if (Auth::attempt(array('email' => $email, 'password' => $password))) {
            return Redirect::to('user/' . Auth::user()->id);
        }

        return Redirect::to('/')->with('message', 'Login failed');
    }

}