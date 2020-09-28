@if(count($matches))
    <ul>
        @foreach($matches as $match)
            <li>
                {{$match->slug}}
            </li>
        @endforeach
    </ul>
@else()
    <p>Pas de match</p>
@endif
