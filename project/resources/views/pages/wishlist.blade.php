@extends('index')

@section('content')

    @component('partials.reusable.breadcrumb')
        <li><a href="{{route('home')}}">Home</a></li>
        <li class="active">Wishlist</li>
    @endcomponent

    @component('partials.reusable.section')
        <div class=" col-md-9 col-md-push-1">
            <div class="section-title">
                <h3 class="title">Your Wishlist</h3>
            </div>
            @foreach($data as $product)
                @include('partials.reusable.wishlist-product')
            @endforeach
        </div>
    @endcomponent

@endsection
