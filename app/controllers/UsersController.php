<?php

class UsersController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        return View::make('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store() {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($user) {
        $user = User::findOrFail($user);

        return View::make('users.show')->with("user", $user->toArray());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        $user = User::findOrFail($id);
        return View::make("users.edit")->with("user", $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        $user = User::find($id);

        
            $user->firstname = Input::get('firstname');

       
            $user->lastname = Input::get('lastname');
        
  
            $user->email = Input::get('email');
        
       
            $user->major = Input::get('major');
        
       
            $user->education_level = Input::get('education_level');
        
        
            $user->activity = Input::get('activity');

      
//            $user->secondname = Input::get('location');


        $user->save();
        return Redirect::to("/users/".$user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}