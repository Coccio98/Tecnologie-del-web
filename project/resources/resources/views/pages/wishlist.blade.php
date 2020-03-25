@extends('index')

@section('content')

    @include('partials.reusable.breadcrumb')

    @component('partials.reusable.section')

        <div class=" col-md-9 col-md-push-1">
            <div class="section-title">
                <h3 class="title">Your Wishlist</h3>
            </div>

            @component('partials.reusable.wishlist-product')
                {{asset('images/product02.png')}}
                @slot('category')
                    Category
                @endslot
                @slot('name')
                    product name goes here
                @endslot
                @slot('price')
                    $980.00
                @endslot
                @slot('old_price')
                    $990.00
                @endslot
                @slot('s')
                    4
                @endslot
            @endcomponent

            @component('partials.reusable.wishlist-product')
                {{asset('images/product06.png')}}
                @slot('category')
                    Category
                @endslot
                @slot('name')
                    product name goes here
                @endslot
                @slot('price')
                    $980.00
                @endslot
                @slot('old_price')
                    $990.00
                @endslot
                @slot('s')
                    4
                @endslot
            @endcomponent

            @component('partials.reusable.wishlist-product')
                {{asset('images/product05.png')}}
                @slot('category')
                    Category
                @endslot
                @slot('name')
                    product name goes here
                @endslot
                @slot('price')
                    $980.00
                @endslot
                @slot('old_price')
                    $990.00
                @endslot
                @slot('s')
                    4
                @endslot
            @endcomponent

            @component('partials.reusable.wishlist-product')
                {{asset('images/product09.png')}}
                @slot('category')
                    Category
                @endslot
                @slot('name')
                    product name goes here
                @endslot
                @slot('price')
                    $980.00
                @endslot
                @slot('old_price')
                    $990.00
                @endslot
                @slot('s')
                    4
                @endslot
            @endcomponent
        </div>
    @endcomponent

@endsection
