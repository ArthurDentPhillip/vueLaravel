@extends('layouts.app')

@section('content')

<div class="container">
    <section class="row justify-content-center contHide">
        <div class="col-6 blockOneleft">
            <h3 class="textColorWhite textBlockOneLeftTop">The furniture brand for the future, with timeless designs</h3>
            <button class="btn btnMiddle">View collection</button>
            <h5 class="textColorWhite textBlockOneLeftBot">A new era in eco friendly furniture with Avelon, the French luxury retail brand with nice fonts, tasteful colors and a beautiful way to display things digitally using modern web technologies.</h5>
        </div>
        <div class="col-6 imgBig">
              <img src="{{ asset('img/стул.png') }}">
        </div>
    </section>

<section class="row justify-content-center mt-4">
        <div class="col-12">
            <h3 class="text-center">What makes our brand different</h3>
        </div>
        <div class="col-md-3 .col-lg-3 .col-xl-3 col-sm-12">
            <img src="{{ asset('img/car.png') }}" class="icons">
            <h4>Next day as standard</h4>
            <p>Next day as standard Order before 3pm and get your order the next day as standard</p>
        </div>
        <div class="col-md-3 .col-lg-3 .col-xl-3 col-sm-12">
            <img src="{{ asset('img/check.png') }}" class="icons">
            <h4>Made by true artisans</h4>
            <p>Handmade crafted goods made withreal passion and craftmanship</p>
        </div>
        <div class="col-md-3 .col-lg-3 .col-xl-3 col-sm-12">
            <img src="{{ asset('img/form.png') }}" class="icons">
            <h4>Unbeatable prices</h4>
            <p>For our materials and quality you won’t find better prices anywhered</p>
        </div>
        <div class="col-md-3 .col-lg-3 .col-xl-3 col-sm-12">
            <img src="{{ asset('img/flower.png') }}" class="icons">
            <h4>Recycled packaging</h4>
            <p>We use 100% recycled packaging to ensure our footprint is manageable</p>
        </div>
</section>

<section class="row mt-4">
        <div class="col-12">
            <h3>New ceramics</h3>
        </div>

        @foreach ($categories as $category)
        <div class="col-3 pb-2 col-sm-6">
            <img src="{{asset($category->img)}}">
            <h4 class="mt-2">{{$category->title}}</h4>
            <p>Цена: {{$category->price}} руб.</p>
            <add-to-cart-button :product="{{$category}}"/>
        </div>
        @endforeach 
</section>

<section class="row mt-4">
    <div class="col-12">
            <h3>Our popular products</h3>
    </div>
    @foreach ($products as $product)
        <div class="col-3 pb-4 col-sm-6">
            <img src="{{asset($product->img)}}">
            <h4 class="mt-2">{{$product->title}}</h4>
            <p>Цена: {{$product->price}} руб.</p>
            <add-to-cart-button :product="{{$product}}"/>
        </div>
        @endforeach 
</section>

<section class="row container-fluid mt-2 xblock">
    <div class=" row justify-content-center">
        <div class="outerBlock">

            <div class="col-12">
                <h2 class="text-center">Join the club and get the benefits</h2>
                <p class="text-center">Sign up for our newsletter and receive exclusive offers on new ranges, sales, pop up stores and more</p>
    
                <form action="{{route('home')}}" method="post" class="row" style="margin-left: 23% !important">
                    @csrf
                    <div class="col-auto">
                        <label for="inputPassword2" class="visually-hidden">Email</label>
                        <input type="email" id="inputPassword2" name="emailUser" class="inputReg1" placeholder="your@gmail.com">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btnReg1">Sign up</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>

{{-- <section class="row mt-4 blockLittleHide">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 col-6">
    <h2>From a studio in London to a global brand with over 400 outlets</h2>
    <p>When we started Avion, the idea was simple. Make high quality furniture affordable and available for the mass market.   Handmade, and lovingly crafted furniture and homeware is what we live, breathe and design so our Chelsea boutique become the hotbed for the London interior design community.</p>
    <button type="button" class="btn btn-primary btnMiddleTwo" style="margin-top: 45% !important;">Get in touch</button>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 col-6">
    <img src="https://images.unsplash.com/photo-1550226891-ef816aed4a98?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80">
    </div>
</section> --}}
</div>
@endsection