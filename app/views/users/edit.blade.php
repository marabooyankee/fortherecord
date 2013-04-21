@extends('layouts.wookmark')


@section('content')

<script type="text/javascript">

    function PreviewImage() {
        oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById("preview").src = oFREvent.target.result;
        };
    }
    ;

</script>
<div class="span9">
    <h2 class="title-divider"><span>Your <span class="de-em">Details</span></span> <small>Stuff about you...</small></h2>
    {{Form::open(array('url'=>URL::to('users/'.$user->id),'method'=>'put'))}}
        <!-- About company -->
        <div class ="span2"><img src='{{URL::to("img/male.jpg")}}' alt='profile pic' class="img-polaroid" id="preview"/></div>
        <div class="pull-left">
            
            <span class="span1"><b>firstname:</b></span><span class="span5"><input name='firstname' type="text" class="input-block-level" value="{{$user->firstname}}" required></span><br>
            <span class="span1"><b>lastname:</b></span><span class="span5"><input type="text" name='lastname' class="input-block-level" value="{{$user->lastname}}" placeholder="last name" required></span><br>
            <span class="span1"><b>email:</b></span><span class="span5"><input type="text" name='email' class="input-block-level" value="{{$user->email}}" placeholder="First name" required></span><br>
            <span class="span1"><b>date of birth:</b></span><span class="span5"><input type="text" name='date_of_birth' class="input-block-level" value="{{$user->date_of_birth}}" placeholder="First name" required></span><br>
            <span class="span1"><b>major:</b></span><span class="span5"><input type="text" name='major' class="input-block-level" id ="uploadImage" value="{{$user->major}}" onchange="PreviewImage();"></span><br>
            <span class="span1"><b>education level:</b></span><span class="span5"><input type="text"name='education_level' class="input-block-level" id ="uploadImage" value="{{$user->education_level}}" onchange="PreviewImage();"></span><br>
            <span class="span1"><b>activity:</b></span><span class="span5"><input type="text" name='activity' class="input-block-level" id ="uploadImage" value="{{$user->activity}}" onchange="PreviewImage();"></span><br>
            <span class="span1"><b>age:</b></span><span class="span5"><input type="text" name='age' class="input-block-level" id ="uploadImage" value="{{$user->age}}" onchange="PreviewImage();"></span><br>
            <span class="span1"><b>location:</b></span><span class="span5"><input type="text" name='location' class="input-block-level" id ="uploadImage" value="{{$user->location}}" onchange="PreviewImage();"></span><br>
             
            <span class="span1"></span><span class="span5"><br><button class="btn btn-inverse" type="submit">Edit Profile</button></span><br>

        </div>
    </form>

</div>

@endsection