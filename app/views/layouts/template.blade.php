@extends("layouts.main")

@section("container")
<div class="container">
    <!-- Services -->
    <div class="block features">
      @yield("content")
    </div>
    
  
    
    <!--Extra block-->
    <div class="block">
        @yield("extra")
    </div>
</div>
@stop