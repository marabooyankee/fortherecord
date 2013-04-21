@extends("layouts.main")

@section("container")
<div class="container">


    <div class="row-fluid">
        <h2 class="title-divider"><span>How are you <span class="de-em">Feeling</span></span> <small>We heart you</small></h2>
    </div>
    <div class="row"> 
        <!--Sidebar-->
        <!-- sidebar -->
        <div class="span3 sidebar">
            <div class="section-menu">
                <ul class="nav nav-list">
                    <li class="nav-header">In This Section</li>
                    <li ><a href="{{URL::current()}}" class="first">View Profile <small>All About You</small><i class="icon-angle-right"></i></a></li>
                <!--    <li><a href="{{URL::to('/ses/home/about');}}">The Team <small>Our team of stars</small><i class="icon-angle-right"></i></a></li>-->
                    <li ><a href="{{URL::current().'/edit'}}">Edit Profile<small>Change Stuff About You</small><i class="icon-angle-right"></i></a></li>
                </ul>
            </div>
        </div>

        <!--Blog Roll Content-->
        <div class="span9 blog-roll blog-list"> 



            @yield('content')





        </div>
    </div>
</div>

@stop

@section("headerstyles")
<link href="{{URL::to('js/wookmark/css/style.css')}}"/>


@stop

@section("footerjs")

<script src="{{URL::to('js/wookmark/jquery.wookmark.min.js')}}"></script>
<style>
    #pics{position: relative;}
    #pics ul li{ list-style: none;}
</style>
@stop