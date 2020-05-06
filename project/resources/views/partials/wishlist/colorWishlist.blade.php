@if($colors[$key] != null)

    @foreach($colors[$key] as $color)
        <option value="{{$color->color}}">{{$color->color}}</option>
    @endforeach

@endif
