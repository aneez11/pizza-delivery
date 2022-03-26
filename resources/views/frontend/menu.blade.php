@extends('frontend.layouts.app')
@section('title', 'Menu')
@section('content')
    <section class="all-menu">
        <div class="menu-header">
            <img class="w-100" style="object-fit: cover" height="500px" src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/it%27s-pizza-time-facebook-cover-advertisement-design-template-b86105960818fc3b4e0f53ab23ebf358_screen.jpg?ts=1605218438https://img2.s3wfg.com/web/img/images_uploaded/4/f/pizza_hut.jpg" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="categories">
                        <ul class="category-list">
                            <li class="category-item">
                                <a href="">
                                    <i class="fa fa-bars"></i>
                                    <span>All Categories</span>
                                </a>
                            </li>
{{--                            @foreach($categories as $category)--}}
                                <li class="category-item">
                                    <a href="">
                                        <i class="fa fa-bars"></i>
                                        <span>cat</span>
{{--                                        <span>{{ $category->name }}</span>--}}
                                    </a>
                                </li>
{{--                            @endforeach--}}
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <h2 class="Menu text-center">MENU</h2>
                </div>
            </div>
        </div>
    </section>
@endsection
