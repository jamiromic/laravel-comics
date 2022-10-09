<div class="hero">
    <button>CURRENT SERIES</button>
</div>
<div class="container_main">
    <div class="wrapper">
        @include('partials.comic_card')
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