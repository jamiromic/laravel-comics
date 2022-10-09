    @foreach ($cards as $card)
    <div class="card">
        <div class="picture">
            <img class="thumbnail" src={{ $card['thumb'] }} alt={{$card['title']}}>
       </div>
        <h4>{{ $card['series'] }}</h4>
    </div>
    @endforeach
    
    
    
    

