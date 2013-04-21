@extends('layouts.wookmark')


@section('content')

<div class="span9">
    <h2 class="title-divider"><span>Your <span class="de-em">Details</span></span> <small>Stuff about you...</small></h2>

    <!-- About company -->
    <div class ="span2"><img src='{{URL::to("img/male.jpg")}}' alt='profile pic' class="img-polaroid" id="preview"/></div>
    <div>
        <span class="span1"><b>firstname:</b></span><span class="span2">{{$user['firstname']}}</span><br>
        <span class="span1"><b>lastname:</b></span><span class="span2">{{$user['lastname']}}</span><br>
        <span class="span1"><b>email:</b></span><span class="span2">{{$user['email']}}</span><br>
        <span class="span1"><b>date_of_birth:</b></span><span class="span2">{{$user['date_of_birth']}}</span><br>
        <span class="span1"><b>major:</b></span><span class="span2">{{$user['major']}}</span><br>
        <span class="span1"><b>education_level:</b></span><span class="span2">{{$user['education_level']}}</span><br>
        <span class="span1"><b>activity:</b></span><span class="span2">{{$user['activity']}}</span><br>
        <span class="span1"><b>age:</b></span><span class="span2">{{$user['age']}}</span><br>
        <span class="span1"><b>location:</b></span><span class="span2">{{$user['location']}}</span><br>

    </div>

</div>

@endsection