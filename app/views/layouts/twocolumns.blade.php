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

                <form  id="postIt" class=" block">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Post It</legend>
                        <div >
                            <input id="Emotion" name="emotion" placeholder="emotion here" class="span3">
                            <hr>
                            <textarea id='PostTextArea' name="text" class="span2" placeholder="Speak your heart out"></textarea>

                            <button class="btn pull-center span2 "  type="submit">Post</button>
                        </div>
                    </fieldset>
                </form>
                <div class="block">
                    <h4 class="title-divider"><span>Trending</span></h4>
                    <div class="tag-cloud" id="tags">

                    </div>
                </div>


            </div>
        </div>

        <!--Blog Roll Content-->
        <div class="span9 blog-roll blog-list"> 



            <!-- Blog post -->
            <div class="media row-fluid">

                <div class="span12">

                    <div class="span12">
                        <div class="media-body hero-unit">
                            <!-- Meta details mobile -->
                            <ul class="inline meta muted visible-phone">
                                <li><i class="icon-calendar"></i> <span class="visible-desktop">Created:</span> Sun 20th Jan 2013</li>
                                <li><i class="icon-user"></i> <a href="#">Alex</a></li>
                            </ul>


                            <ul id="kucatchnayo">

                            </ul>
                        </div>
                    </div>

                </div>

            </div>
            <div class="media row-fluid">

                <div class="span12">

                    <div class="span12">
                        <canvas id="myChart" width="800" height="800"></canvas>
                    </div>

                </div>
                <div class="span12">
                    <div id="map">map</div>
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

@section('headerstyles')

<link href='/js/jquery.cssemoticons.css'/>
<link rel="stylesheet" href="/js/USmap/leaflet.css" />
<link rel="stylesheet" href="/js/USmap/mapus.css" />
<script src="/js/USmap/leaflet.js"></script>
@stop

@section("footerjs")
<script src="{{URL::to('js/textillate/assets/jquery.fittext.js')}}"></script>
<script src="{{URL::to('js/textillate/assets/jquery.lettering.js')}}"></script>
<script src="{{URL::to('js/jquery.innerfade.js')}}"></script>
<script src="{{URL::to('js/textext/txtext.js')}}"></script>
<script src="{{URL::to('js/Chart.min.js')}}"></script>
<script src="{{URL::to('js/jquery.cssemoticons.min.js')}}"></script>
<script src='/js/USmap/us-states.js'></script>
<script src='/js/USmap/us.js'></script>
<script>

    $(document).ready(new function() {

        var ctx = document.getElementById("myChart").getContext("2d");

        $('textarea').change(function() {
            $("textarea").emoticonize();
        });


        var colours = [
            'rgba(151,187,205,0.5)', 'rgba(151,11,205,0.5)', 'rgba(191,187,225,0.5)', 'rgba(90,187,167,0.5)', 'rgba(189,109,111,0.5)', 'rgba(000,00,000,0.5)', 'rgba(111,0,255,0.5)', 'rgba(255,255,255,0.5)'

        ];

        $.get('{{URL::to("strongfeelings")}}', function(parameters) {

            var numdata = [];
            var names = [];
//            var piedata=[];
            $.each(parameters, function(key, value) {
                numdata.push(value.num);
                names.push(value.feeling.feeling);
//                piedata.push({value.num,colours[key]});
            });

            var data = {
                labels: names,
                datasets: [
                    {
                        fillColor: "rgba(151,187,205,0.5)",
                        strokeColor: "rgba(151,187,205,1)",
                        pointColor: "rgba(151,187,205,1)",
                        pointStrokeColor: "#fff",
                        data: numdata,
                    }
//                    ,{
//                        fillColor: "rgba(151,187,205,0.5)",
//                        strokeColor: "rgba(151,187,205,1)",
//                        pointColor: "rgba(151,187,205,1)",
//                        pointStrokeColor: "#fff",
//                        data: [28, 48, 40, 19, 96, 27, 100]
//                    }
                ]
            };
            options = {
                //Boolean - If we show the scale above the chart data			
                scaleOverlay: false,
                //Boolean - If we want to override with a hard coded scale
                scaleOverride: false,
                //** Required if scaleOverride is true **
                //Number - The number of steps in a hard coded scale
                scaleSteps: null,
                //Number - The value jump in the hard coded scale
                scaleStepWidth: null,
                //Number - The centre starting value
                scaleStartValue: null,
                //Boolean - Whether to show lines for each scale point
                scaleShowLine: true,
                //String - Colour of the scale line	
                scaleLineColor: "rgba(0,0,0,.1)",
                //Number - Pixel width of the scale line	
                scaleLineWidth: 1,
                //Boolean - Whether to show labels on the scale	
                scaleShowLabels: false,
                //Interpolated JS string - can access value
                scaleLabel: "<%=value%>",
                //String - Scale label font declaration for the scale label
                scaleFontFamily: "'Arial'",
                //Number - Scale label font size in pixels	
                scaleFontSize: 12,
                //String - Scale label font weight style	
                scaleFontStyle: "normal",
                //String - Scale label font colour	
                scaleFontColor: "#666",
                //Boolean - Show a backdrop to the scale label
                scaleShowLabelBackdrop: true,
                //String - The colour of the label backdrop	
                scaleBackdropColor: "rgba(255,255,255,0.75)",
                //Number - The backdrop padding above & below the label in pixels
                scaleBackdropPaddingY: 2,
                //Number - The backdrop padding to the side of the label in pixels	
                scaleBackdropPaddingX: 2,
                //Boolean - Whether we show the angle lines out of the radar
                angleShowLineOut: true,
                //String - Colour of the angle line
                angleLineColor: "rgba(0,0,0,.1)",
                //Number - Pixel width of the angle line
                angleLineWidth: 1,
                //String - Point label font declaration
                pointLabelFontFamily: "'Arial'",
                //String - Point label font weight
                pointLabelFontStyle: "normal",
                //Number - Point label font size in pixels	
                pointLabelFontSize: 12,
                //String - Point label font colour	
                pointLabelFontColor: "#666",
                //Boolean - Whether to show a dot for each point
                pointDot: true,
                //Number - Radius of each point dot in pixels
                pointDotRadius: 3,
                //Number - Pixel width of point dot stroke
                pointDotStrokeWidth: 1,
                //Boolean - Whether to show a stroke for datasets
                datasetStroke: true,
                //Number - Pixel width of dataset stroke
                datasetStrokeWidth: 2,
                //Boolean - Whether to fill the dataset with a colour
                datasetFill: true,
                //Boolean - Whether to animate the chart
                animation: true,
                //Number - Number of animation steps
                animationSteps: 60,
                //String - Animation easing effect
                animationEasing: "easeOutQuart",
                //Function - Fires when the animation is complete
                onAnimationComplete: null

            };
            new Chart(ctx).Radar(data, options);
//             <span><a href="#">culture</a> (12)</span> 
            var tags = '';
            $.each(names, function(key, value) {
                tags += '<span><a href="#">' + value + '</a> (' + numdata[key] + ')</span>';
            });
            $("#tags").html(tags);

//            var piechart = document.getElementById("pieChart").getContext("2d");
//            var data = [];
//
//            new Chart(piechart).Pie(piedata);

        });


        $.get('{{URL::to("recentfeelings")}}', function(data) {
            var paragraph = '';
            $.each(data, function(key, value) {
                paragraph += '<li class="animated">\n\
            <div class="tags"><a href="#" class="type">feeling</a>/<a href="#" class="tag">' + value.feelings[0].feeling + '</a> \n\
        \n\
            </div>' + value.text + '</li>';



            });
            $('#kucatchnayo').html(paragraph);

            $('#kucatchnayo').innerfade(
                    {animationtype: 'fade',
                        speed: 'slow',
                        timeout: 2000,
                        type: 'random',
                        containerheight: '1em'}
            );

        });
        $('#Emotion').textext({
            plugins: 'tags prompt focus autocomplete ajax',
            //            tagsItems: ['love'],
            prompt: 'Add one only...',
            ajax: {
                url: '{{URL::to("assets/emotions.json")}}',
                dataType: 'json',
                cacheResults: true
            }
        });

        $('#postIt').submit(function() {
            var data = $('#postIt').serialize();

            $.post("{{URL::to('feeling')}}", data, function(result) {
                console.log(result);
            });
            return false;
        });




    });
</script>
<style>
    #kucatchnayo ul li {list-style: none}



</style>

@stop