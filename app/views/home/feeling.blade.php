@extends("layouts.twocolumns")

@section("title")
Your Feelings
@stop

@section("sidebar")

<div class="inner">
    <div class="block">
        <div class="input-append">
            <input class="span2" id="appendedInputButton" placeholder="Search" type="text">
            <button class="btn" type="button">Go!</button>
        </div>
    </div>
    <div class="block">
        <h4 class="title-divider"><span>Tags</span></h4>
        <div class="tag-cloud"> <span><a href="#">culture</a> (12)</span> <span><a href="#">general</a> (51)</span> <span><a href="#">coding</a> (43)</span> <span><a href="#">design</a> (84)</span> <span><a href="#">weather</a> (15)</span> <span><a href="#">jobs</a> (54)</span> <span><a href="#">health</a> (68)</span> </div>
    </div>

</div>

@stop

@section("content")

<div class="media row-fluid">
    <div class="span1 hidden-phone"> 
        <!-- Date desktop -->
        <div class="date-wrapper"> <span class="date-m">Jan</span> <span class="date-d">20</span> </div>
        <!-- Meta details desktop -->
        <p class="meta muted"> <i class="icon-user"></i> <a href="#">Alex</a> </p>
    </div>
    <div class="span11">

        <div class="span12">
            <div class="media-body">
                <div class="tags"><a href="#" class="tag">coding</a> / <a href="#" class="type">event</a></div>
                <h4 class="title media-heading"><a href="blog-post.htm">a nec in sed hac ultrices cursus</a></h4>

                <!-- Meta details mobile -->
                <ul class="inline meta muted visible-phone">
                    <li><i class="icon-calendar"></i> <span class="visible-desktop">Created:</span> Sun 20th Jan 2013</li>
                    <li><i class="icon-user"></i> <a href="#">Alex</a></li>
                </ul>
                <a href="blog-post.htm" class="media-object"> <img src="img/blog/ape.jpg" alt="Picture of frog by Ben Fredericson"> </a>
                <p>Nam risus magna, fringilla sit amet blandit viverra, dignissim eget est. Ut <strong>commodo ullamcorper risus nec</strong> mattis. Morbi tincidunt posuere turpis eu laoreet. Nulla facilisi. Aenean at massa leo. Vestibulum in varius arcu.</p>
                <p>Nam risus magna, fringilla sit amet blandit viverra, dignissim eget est. Ut <strong>commodo ullamcorper risus nec</strong> mattis</p>
                <ul class="inline links">
                    <li><a href="blog-post.htm" class="btn btn-mini"><i class="icon-circle-arrow-right"></i> Read more</a></li>
                    <li><a href="blog-post.htm#comments" class="btn btn-mini"><i class="icon-comment"></i> 50 Comments</a></li>
                </ul>
            </div>
        </div>

    </div>

</div>

@stop



