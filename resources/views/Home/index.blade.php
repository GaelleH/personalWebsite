@extends('layouts.app')

@section('content')
@foreach($settings as $setting)

<section class="home-hero">
    <div class="container">
        <h1 class="title">{{$setting->site_title}}</h1>
        <h2>{{$setting->sub_site_title}}</h2>
        <a href="" class="button button-accent">{{$setting->accent_button_text}}</a>
    </div>
</section>

<div class="container">
    <section class="home-about">
        <div class="home-about-textbox">
            <h1>{{$setting->block_site_title}}</h1>
            <p>{{$setting->block_site_text}}</p>
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
        <h1 class="title title-cta">{{$setting->contact_site_title}}</h1>
        <p style="margin-bottom:20px">{{$setting->sub_contact_site_title}}</p>
        <a href="" class="button button-dark">{{$setting->dark_button_text}}</a>
    </div>
</section>
@endforeach

<footer>
    <p><a href="{{ route('login') }}">Gaëlle Hardy</a></p>
</footer>
@endsection