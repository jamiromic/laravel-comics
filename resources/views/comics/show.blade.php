@extends('layouts.structure')

@section('metaTitle', $card['title'].'DC Comics')

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
    <div class="container_details">
        <div class="wrapper_details">
            <div class="details sx">
                <h1 class="title">Talent</h1>
                <ul class="list artist">
                    <li class="title_list">
                        <span>Art by:</span>
                    </li>
                    <li class="content_list">
                        @foreach ($card['artists'] as $artist)
                            @if ($loop->last)
                                <span>{{$artist}}</span>
                            @else
                                <span>{{$artist}},</span>
                            @endif  
                        @endforeach
                    </li>
                </ul>
                <ul class="list written">
                    <li class="title_list">
                        <span class="title_list">Written by:</span>
                    </li>
                    <li class="content_list">
                        @foreach ($card['writers'] as $writer)
                            @if ($loop->last)
                                <span>{{$writer}}</span>
                            @else
                                <span>{{$writer}},</span>
                            @endif  
                        @endforeach
                    </li>
                </ul>
            </div>
            <div class="details dx">
                <h1 class="title">Specs</h1>
                <ul class="list_series">
                    <li>
                        <span>Series:</span>
                        <span class="action_comics">{{$card['series']}}</span>
    
                    </li>
                    <li>
                        <span>U.S. Price:</span>
                        <span>{{$card['price']}}</span>
    
                    </li>
                    <li>
                        <span>On Sale Date:</span>
                        <span>{{$card['sale_date']}}</span>
    
                    </li>
                </ul>
                
                
            </div>
        </div>
        <div class="container_footer_option">
            <div class="footer_options_menu">
                <div class="options_menu">
                        @foreach ($options as $option)
                        <div class="service_item">
                            <div class="title_service">
                                <a href="#">{{ $option['name'] }}</a>   
                            </div>
                            <div class="figure_service">
                                <img class="img_menu" src={{asset($option['img'])}} alt={{$option['name']}}>
                            </div>
                            
                            
                        </div>
                        @endforeach
                </div>
            </div>

        </div>
        

        
    </div>


@endsection