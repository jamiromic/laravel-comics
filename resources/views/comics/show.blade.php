@extends('layouts.structure')

@section('metaTitle','Homepage - DC Comics')

@section('content')
<div class="hero"></div>
<div class="container_color"></div>
<div class="container_show">
    <div class="figure_box">
        <img class="figure" src="{{$card['thumb']}}" alt="{{$card['title']}}">
        <span class="figure_box1">comic book</span>
        <span class="figure_box2">view gallery</span>
    </div> 
    <div class="container_information">
        <h1>{{ $card['title'] }}</h1>
        <div class="wrapper_price_availability">
            <div class="price_availability">
                <span class="price">U.S. PRICE: <span>{{$card['price']}}</span></span>
                <span class="available">AVAILABLE</span>
            </div>
            <span class="check_availability">
                Check Availability
                <i class="fa-solid fa-caret-down"></i>
            </span>
            

        </div>
        <div class="description">
            <p>{{$card['description']}}</p>
        </div>
    </div>
    <div class="advertisement">
        <h4>ADVERTISEMENT</h4>
        <img src="../img/adv.jpg" alt="">
    </div>
</div>


@endsection