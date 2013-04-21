@extends("layouts.template")

@section("content")



<form class="form-login form-wrapper form-medium" method="POST">
    <h3 class="title-divider"><span>Sign Up</span> <small>Already signed up? <a href="login">Login here</a>.</small></h3>
    @foreach ($errors->all() as $message)
    <div class="alert-error">{{$message}}</div>
    @endforeach
    <h5>Gender</h5>

    {{Form::select("gender",array("__","M"=>"Male","F"=>"Female"))}}
    <h5>Account Information</h5>
    {{Form::text("firstname",Input::old("firstname"),array("placeholder"=>"First Name","class"=>"input-block-level"))}}
    {{Form::text("lastname",Input::old("lastname"),array("placeholder"=>"Last Name","class"=>"input-block-level"))}}
    {{Form::email("email",Input::old("email"),array("placeholder"=>"email","class"=>"input-block-level"))}}
    {{Form::password("password",array("placeholder"=>"password","class"=>"input-block-level"))}}
    {{Form::text("location",Input::old("location"),array("placeholder"=>"Location","class"=>"input-block-level"))}}
    <label class="checkbox">
        <input value="term" type="checkbox">
        I agree with the Terms and Conditions. </label>
    <button class="btn btn-primary" type="submit">Sign up</button>
</form>

@stop