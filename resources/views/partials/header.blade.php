<div class="container_header">
    <div class="logo">
        <img src="{{ asset('img/dc-logo.png') }}" alt="Logo Digital Comics">
    </div>
        <ul class="main_list">
            @foreach ($items as $item)
                <li class="{{$loop->first ? 'active list item' : 'list_item'}}"> {{$item}} </li>
            @endforeach
           
        </ul>
</div>