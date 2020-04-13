@extends('index')

@section('content')

    @include('partials.reusable.breadcrumb')

    @component('partials.reusable.section')
        <!-- TODO wislist home-->
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
