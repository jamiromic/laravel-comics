@extends('layouts.structure')

@section('metaTitle','Comics - DC Comics')

@section('content')

<div class="hero">
    <button>CURRENT SERIES</button>
</div>
<div class="container_main">
    <div class="wrapper">
    @foreach ($cards as $key => $card)
    <a href="{{ route('comics',$loop->index) }}">
        <div class="card">
            <div class="picture">
                <img class="thumbnail" src={{ $card['thumb'] }} alt={{$card['title']}}>
           </div>
            <h4>{{ $card['series'] }}</h4>
        </div>
    </a>
    @endforeach
   </div>
    <button>LOAD MORE</button>
</div>
<div class="menu_options">
    <div class="services">
            @foreach ($options as $option)
            <div class="service_item">
                <img class="img_options" src={{$option['img']}} alt={{$option['name']}}>
                <a href="#">{{ $option['name'] }}</a>
            </div>
            @endforeach
    </div>
</div>

@endsection