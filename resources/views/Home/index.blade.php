@extends('layouts.app')

@section('content')

<section class="home-hero">
    <div class="container">
        <h1 class="title">Gaëlle Hardy</h1>
        <h2>Web Developer & Interior designer</h2>
        <a href="" class="button button-accent">See our work</a>
    </div>
</section>

<div class="container">
    <section class="home-about">
        <div class="home-about-textbox">
        <h1>Who we are</h1>
        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

        </div>
    </section>
</div>

<section class="portfolio">
    <h1>Some of our work</h1>
    <!-- portfolio item 01 -->
    <figure class="port-item">
        <img src="../storage/app/public/iphone2.jpeg" alt="portfolio item">
        <figcaption class="port-desc">
            <p>Project title</p>
            <a href="" class="button button-accent button-small">See Project</a>
        </figcaption>
    </figure>

    <!-- portfolio item 02 -->
    <figure class="port-item">
        <img src="../storage/app/public/iphone2.jpeg" alt="portfolio item">
        <figcaption class="port-desc">
            <p>Project title</p>
            <a href="" class="button button-accent button-small">See Project</a>
        </figcaption>
    </figure>

    <!-- portfolio item 03 -->
    <figure class="port-item">
        <img src="../storage/app/public/iphone2.jpeg" alt="portfolio item">
        <figcaption class="port-desc">
            <p>Project title</p>
            <a href="" class="button button-accent button-small">See Project</a>
        </figcaption>
    </figure>

    <!-- portfolio item 04 -->
    <figure class="port-item">
        <img src="../storage/app/public/iphone2.jpeg" alt="portfolio item">
        <figcaption class="port-desc">
            <p>Project title</p>
            <a href="" class="button button-accent button-small">See Project</a>
        </figcaption>
    </figure>

    <!-- portfolio item 05 -->
    <figure class="port-item">
        <img src="../storage/app/public/iphone2.jpeg" alt="portfolio item">
        <figcaption class="port-desc">
            <p>Project title</p>
            <a href="" class="button button-accent button-small">See Project</a>
        </figcaption>
    </figure>

    <!-- portfolio item 06 -->
    <figure class="port-item">
        <img src="../storage/app/public/iphone2.jpeg" alt="portfolio item">
        <figcaption class="port-desc">
            <p>Project title</p>
            <a href="" class="button button-accent button-small">See Project</a>
        </figcaption>
    </figure>
</section>

<section class="cta">
    <div class="container">
        <h1 class="title title-cta">Making things look great</h1>
        <a href="" class="button button-dark">See our work</a>
    </div>
</section>

<footer>
    <p><a href="{{ route('login') }}">Gaëlle Hardy</a></p>
</footer>
@endsection