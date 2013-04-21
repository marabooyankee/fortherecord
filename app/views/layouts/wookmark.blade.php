@extends("layouts.main")

@section("container")
<div class="container">


    <div class="row-fluid">
        <h2 class="title-divider"><span>How are you <span class="de-em">Feeling</span></span> <small>We heart you</small></h2>
    </div>
    <div class="row"> 
        <!--Sidebar-->
        <div class="span3 sidebar sidebar-left">
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

                <div class="block"> <a href="#" class="btn btn-warning"><i class="icon-rss"></i> Subscribe via RSS feed</a> </div>
            </div>
        </div>

        <!--Blog Roll Content-->
        <div class="span9 blog-roll blog-list"> 



            <!-- Blog post -->
            <div class="media row-fluid">
                <div class="span1 hidden-phone"> 
                    <!-- Date desktop -->
                    <div class="date-wrapper"> <span class="date-m">Jan</span> <span class="date-d">20</span> </div>
                    <!-- Meta details desktop -->
                    <p class="meta muted"> <i class="icon-user"></i> <a href="#">Alex</a> </p>
                </div>
                <div class="span11">

                    <div class="span6">
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
                    <div class="span6">
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
            <div class="media row-fluid">
                <div class="span1 hidden-phone"> 
                    <!-- Date desktop -->
                    <div class="date-wrapper"> <span class="date-m">Jan</span> <span class="date-d">20</span> </div>
                    <!-- Meta details desktop -->
                    <p class="meta muted"> <i class="icon-user"></i> <a href="#">Alex</a> </p>
                </div>
                <div class="span11" id="pics">
                    <div id="main" role="main" class="row-fluid">

                        <ul id="tiles">
                            <!-- These are our grid blocks -->
                            <li><img src="{{URL::to('js/wookmark/example/images/image_1.jpg')}}" width="200" height="283"><p>1</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_2.jpg')}}" width="200" height="300"><p>2</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_3.jpg')}}" width="200" height="252"><p>3</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_4.jpg')}}" width="200" height="158"><p>4</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_5.jpg')}}" width="200" height="300"><p>5</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_6.jpg')}}" width="200" height="297"><p>6</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_7.jpg')}}" width="200" height="200"><p>7</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_8.jpg')}}" width="200" height="200"><p>8</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_9.jpg')}}" width="200" height="398"><p>9</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_10.jpg')}}" width="200" height="267"><p>10</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_1.jpg')}}" width="200" height="283"><p>11</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_2.jpg')}}" width="200" height="300"><p>12</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_3.jpg')}}" width="200" height="252"><p>13</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_4.jpg')}}" width="200" height="158"><p>14</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_5.jpg')}}" width="200" height="300"><p>15</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_6.jpg')}}" width="200" height="297"><p>16</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_7.jpg')}}" width="200" height="200"><p>17</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_8.jpg')}}" width="200" height="200"><p>18</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_9.jpg')}}" width="200" height="398"><p>19</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_10.jpg')}}" width="200" height="267"><p>20</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_1.jpg')}}" width="200" height="283"><p>21</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_2.jpg')}}" width="200" height="300"><p>22</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_3.jpg')}}" width="200" height="252"><p>23</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_4.jpg')}}" width="200" height="158"><p>24</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_5.jpg')}}" width="200" height="300"><p>25</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_6.jpg')}}" width="200" height="297"><p>26</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_7.jpg')}}" width="200" height="200"><p>27</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_8.jpg')}}" width="200" height="200"><p>28</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_9.jpg')}}" width="200" height="398"><p>29</p></li>
                            <li><img src="{{URL::to('js/wookmark/example/images/image_10.jpg')}}" width="200" height="267"><p>30</p></li>
                            <!-- End of grid blocks -->
                        </ul>

                    </div>

                </div>

            </div>


            <small>Blog photos by <a href="http://www.flickr.com/photos/xjrlokix/">Ben Fredericson</a></small>
            <div class="pagination pagination-centered">
                <button type="button" class="btn btn-block" data-loading-text="Loading...">Load More</button>
            </div>
        </div>
    </div>
</div>

@stop

@section("headerstyles")
<link href="{{URL::to('js/wookmark/css/style.css')}}"/>


@stop

@section("footerjs")

<script src="{{URL::to('js/wookmark/jquery.wookmark.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(new function() {
        // Prepare layout options.
        var options = {
            autoResize: true, // This will auto-update the layout when the browser window is resized.
            container: $('#pics'), // Optional, used for some extra CSS styling
            offset: 2, // Optional, the distance between grid items
            itemWidth: 210 // Optional, the width of a grid item
        };

        // Get a reference to your grid items.
        var handler = $('#tiles li');

        // Call the layout function.
        handler.wookmark(options);

        // Capture clicks on grid items.
        handler.click(function() {
            // Randomize the height of the clicked item.
            var newHeight = $('img', this).height() + Math.round(Math.random() * 300 + 30);
            $(this).css('height', newHeight + 'px');

            // Update the layout.
            handler.wookmark();
        });
    });
</script>
<style>
    #pics{position: relative;}
    #pics ul li{ list-style: none;}
</style>
@stop