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
        <div class="row mt-4 specials">
            <div class="col-md-7 order-md-2 my-auto">
                <h2 class="featurette-heading">Specials*</h2>
                <p class="lead">These are the best that we are offering.</p>
                <ul>
                    <li>
                        <h4 class="mb-0">Combo Picollo</h4>
                        <p class="lead"><small>Lorem</small></p>
                    </li>
                    <li>
                        <h4 class="mb-0">Combo Mezzo</h4>
                        <p class="lead"><small>Lorem</small></p>
                    </li>
                    <li>
                        <h4 class="mb-0">Combo Grande</h4>
                        <p class="lead"><small>Lorem</small></p>
                    </li>
                </ul>
            </div>
            <div class="col-md-5 order-md-1">

                <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/weekend-special-pizza-deals-flyer-instagram-p-design-template-8abc53416d653c8601312dc6d00caf37_screen.jpg?ts=1615738482" alt="">
            </div>
        </div>
        <div class="cover my-3">
            <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto w-100" src="https://media.istockphoto.com/vectors/best-italian-pizza-banner-with-ribbon-tomato-cheese-mozzarella-flour-vector-id1253496654?k=20&m=1253496654&s=170667a&w=0&h=RnlWrLTh386Gm18QnUmLKe3b47deOI9z1u37hMo_0gI=" alt="">
        </div>
    </div><!-- /.container -->
    <section class="menu mt-5">
        <div class="container">
            <div class="section-header text-center d-flex flex-column align-items-center">
                <h2>Latest Offerings</h2>
                <p class="w-50 text-muted">The lastest in our menu</p>
                <a href="#" class="all btn btn-sm btn-warning">View All</a>
            </div>
            <div class="section-content mt-5">
                <div class="row justify-content-center g-5">
                    @for($i=0; $i<10;$i++)
                    <div class="col-md-2">
                        <div class="menu-item d-flex flex-column align-items-center">
                            <img class="w-100" src="https://www.freeiconspng.com/thumbs/pizza-png/pizza-png-13.png" alt="">
                            <div class="item-content mt-2">
                                <h4 class="item-name mb-0">Pizza</h4>
                                <p class="item-price mt-0">$50.55</p>
                            </div>
                        </div>
                    </div>
                        @endfor
                </div>
            </div>
        </div>
    </section>
@endsection
