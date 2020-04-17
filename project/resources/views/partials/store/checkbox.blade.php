<div class="input-checkbox">
    <input type="checkbox" id="{{$n}}" onclick="window.location='{{route("store")}}{{$route}}'">
    <label for="{{$n}}">
        <span></span>
        {{$category}}
        <small>({{$slot}})</small>
    </label>
</div>
