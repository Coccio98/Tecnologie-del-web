@if($colors != null)

    @foreach($colors as $color)
        <option value="{{$color->color}}">{{$color->color}}</option>
    @endforeach

@endif
