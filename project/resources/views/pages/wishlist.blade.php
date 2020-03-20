@extends('index')

@section('content')

    @include('partials.reusable.breadcrumb')

    @component('partials.reusable.section')


        <div class="section-title">
            <h3 class="title">Your Wishlist</h3>
        </div>

        @component('partials.reusable.widget')
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
        @endcomponent

        @component('partials.reusable.widget')
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
        @endcomponent

        @component('partials.reusable.widget')
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
        @endcomponent

        @component('partials.reusable.widget')
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
        @endcomponent

    @endcomponent

@endsection
