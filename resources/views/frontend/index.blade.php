@extends('frontend.layouts.app')
@section('title', 'Home')
@section('content')
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/pizza-facebook-cover-design-template-fadf7fe70b43b285c0227b249f5db46c_screen.jpg?ts=1594235128" width="100%" alt="">

                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Example headline.</h1>
                        <p>Some representative placeholder content for the first slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/it%27s-pizza-time-facebook-cover-advertisement-design-template-b86105960818fc3b4e0f53ab23ebf358_screen.jpg?ts=1605218438" width="100%" alt="">

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Some representative placeholder content for the second slide of the carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://visitnazareth.co.il/assets/uploads/property/property_1637403426_11154923_454209784741268_6755347017522228311_o1.png" width="100%" alt="">

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>One more for good measure.</h1>
                        <p>Some representative placeholder content for the third slide of this carousel.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row mt-5">
            <div class="col-lg-3">
                <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/pizza-advertisement-on-instagram-design-template-856fb0e881df38659aafab91f3504f95_screen.jpg?ts=1592154445" width="100%" alt="">
            </div>
            <div class="col-lg-3">
                <img src="https://png.pngtree.com/png-clipart/20210704/original/pngtree-simple-pizza-gourmet-fast-food-restaurant-social-media-advertising-png-image_6487225.jpg" width="100%" alt="">
            </div>
            <div class="col-lg-3">
                <img src="https://png.pngtree.com/png-clipart/20210704/original/pngtree-stylish-and-simple-vegetable-pizza-social-media-ads-png-image_6487233.jpg" width="100%" alt="">
            </div>
            <div class="col-lg-3">
                <img src=https://d1csarkz8obe9u.cloudfront.net/posterpreviews/pizza-delivery-square-ad-social-media-design-template-a444b0351284bb56be48b78dd4abf45f_screen.jpg?ts=1589641086" width="100%" alt="">
            </div>
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

{{--        <hr class="featurette-divider">--}}
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h2>
                <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
            </div>
        </div>
        <div class="cover my-3">
            <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="100%" height="300" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Cover Advertisement Pizza" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">Cover Advertisement Pizza</text></svg>
        </div>
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
                <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
            </div>
            <div class="col-md-5">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

            </div>
        </div>
    </div><!-- /.container -->

@endsection
