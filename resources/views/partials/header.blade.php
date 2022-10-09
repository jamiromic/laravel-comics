<div class="container_header_top">
    <ul class="wrapper_header_top">
        <li class="items_header_top">
            <a href="#">DC POWER™ VISA®</a>
        </li>
        <li class="items_header_top">
            <a href="#">ADDITIONAL DC SITES</a>
            <i class="fa-solid fa-caret-down"></i>
        </li>
    </ul>
</div>
<div class="container_header">
    <div class="logo">
        <img src="{{ asset('img/dc-logo.png') }}" alt="Logo Digital Comics">
    </div>
    <ul class="main_list">
            @foreach ($items as $item)
                <li class="list_links">  
                    <a href="#" class="{{$loop->first ? 'active link' : 'link'}}">{{$item}}</a>
                    @if($loop->last)
                    <i class="fa-solid fa-caret-down"></i>
                     @endif
                </li>
            @endforeach
    </ul>
    <div class="wrapper_searchbar">
        <div class="wrapper_input">
            <input type="search" name="search" placeholder="Search">
        </div>
        <i class="fa-solid fa-magnifying-glass"></i>
    </div>
</div>
<div class="hero">
    <button>CURRENT SERIES</button>
</div>