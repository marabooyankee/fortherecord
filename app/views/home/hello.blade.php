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
                        <div class="span7"><img src="img/slides/slide1.png" alt="Slide 1" /></div>
                        <div class="span5 caption">
                            <h2>AppStrap Bootstrap Theme</h2>
                            <h4>By <a href="http://themelize.me">Themelize.me</a></h4>
                            <p>Perfect for your App, Web service or hosting company!</p>
                            <a href="#" class="btn btn-large btn-primary">Buy Now</a> </div>
                    </div>

                    <!--Slide #2 straight image 1170px wide x 390px high-->
                    <div class="slide row-fluid"> <img src="img/slides/slide2.png" alt="Slide 2" /> </div>

                    <!--Slide #3 & so on below--> 
                </div>
            </div>
        </section>
    </div>
</div>
@stop


@section("content")

<h2 class="title-divider"><span>Core <span class="de-em">Features</span></span> <small>Core features included in all plans.</small></h2>
<ul class="thumbnails">
    <li class="span3"> <a href="features.htm"><img src="img/features/feature-1.png" alt="Feature 1" /></a>
        <h3 class="title"><a href="features.htm">Mobile <span class="de-em">Friendly</span></a></h3>
        <p>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio! Elementum tortor sociis in eu dis dictumst pulvinar lorem nec aliquam a nascetur.</p>
    </li>
    <li class="span3"> <a href="features.htm"><img src="img/features/feature-2.png" alt="Feature 2" /></a>
        <h3 class="title"><a href="features.htm">24/7 <span class="de-em">Support</span></a></h3>
        <p>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio! Elementum tortor sociis in eu dis dictumst pulvinar lorem nec aliquam a nascetur.</p>
    </li>
    <li class="span3"> <a href="features.htm"><img src="img/features/feature-3.png" alt="Feature 3" /></a>
        <h3 class="title"><a href="features.htm">Free Upgrade <span class="de-em">Assistance</span></a></h3>
        <p>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio! Elementum tortor sociis in eu dis dictumst pulvinar lorem nec aliquam a nascetur.</p>
    </li>
    <li class="span3"> <a href="features.htm"><img src="img/features/feature-4.png" alt="Feature 4" /></a>
        <h3 class="title"><a href="features.htm">99.9% <span class="de-em">Uptime</span></a></h3>
        <p>Rhoncus adipiscing, magna integer cursus augue eros lacus porttitor magna. Dictumst, odio! Elementum tortor sociis in eu dis dictumst pulvinar lorem nec aliquam a nascetur.</p>
    </li>
</ul>


@stop



@section("extra")

<div class="block testimonials margin-top-large">
    <h2 class="title-divider"><span>Highly <span class="de-em">Recommended</span></span> <small>99% of our customers recommend us!</small></h2>
    <div class="row">
        <div class="span4">
            <blockquote>
                <p>"It's totally awesome, we're could imagine life without it!"</p>
                <small><img src="img/team/jimi.jpg" alt="Jimi Bloggs" class="img-circle"> Jimi Bloggs <span class="spacer">/</span> <a href="#">@mrjimi</a></small> </blockquote>
        </div>
        <div class="span4">
            <blockquote>
                <p>"10 out of 10, highly recommended!"</p>
                <small><img src="img/team/jobs.jpg" alt="Jimi Bloggs" class="img-circle"> Steve Bloggs <span class="spacer">/</span> <a href="#">Founder of Apple</a></small> </blockquote>
        </div>
        <div class="span4">
            <blockquote>
                <p>"Our productivity &amp; sales are up! Couldn't be happier with this product!"</p>
                <small><img src="img/team/adele.jpg" alt="Adele Bloggs" class="img-circle"> Adele Bloggs <span class="spacer">/</span> <a href="#">@iamadele</a></small> </blockquote>
        </div>
    </div>
</div>
@stop