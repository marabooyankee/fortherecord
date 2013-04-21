@extends("layouts.template")

@section("slider")
<div class="hero" id="highlighted">
    <div class="inner"> 
        <!--Flexslider Showshow-->
        <section class="flexslider-wrapper container">
            <div class="flexslider" data-slidernav="auto" data-transition="slide"> 
                <!--The Slides-->
                <div class="slides">
                    <!--Slide #1 with caption-->
                    <div class="slide row-fluid">
                        <div class="span"><img src="img/slides/slide1.jpg" alt="Slide 1" /></div>

                    </div>

                    <!--Slide #2 straight image 1170px wide x 390px high-->

                    <div class="slide  row-fluid"> <img src="img/slides/slide2.jpg" alt="Slide 2" /> </div>
                    <!--Slide #3 & so on below--> 
                    <div class="slide row-fluid"> <img src="img/slides/jsc2007e035824TAS.jpg" alt="Slide 3" /> </div>
                </div>
            </div>
        </section>
    </div>
</div>
@stop


@section("content")

<h2 class="title-divider"><span>Core <span class="de-em">Features</span></span> <small>Core features included in all plans.</small></h2>
<ul class="thumbnails">
    <li class="span4"> <a href=""><img src="img/features/feature-1.png" alt="Feature 1" /></a>
        <h3 class="title"><a href="">Mobile <span class="de-em">Friendly</span></a></h3>
        <p>Built with twitter bootsrapp. This enables us to leverage both the same Application for multiple enviroments</p>
    </li>
    <li class="span4"> <a href=""><img src="img/features/feature-2.png" alt="Feature 2" /></a>
        <h3 class="title"><a href="">Json Api <span class="de-em"></span></a></h3>
        <p>Want to build an app that works with our data . No problem Get started right away </p>
    </li>
    <li class="span4"> <a href=""><img src="img/features/feature-3.png" alt="Feature 3" /></a>
        <h3 class="title"><a href="">Any problems <span class="de-em"> Do you need Assistance</span></a></h3>
        <p>Feel free to contribute on the Git repo </p>
    
</ul>


@stop

