@extends('index')

@section('content')

    @component('partials.home.section')

        @component('partials.home.collection')
            @slot('image')
                {{ asset('images/shop01.png')}}
            @endslot
            Laptop
        @endcomponent

        @component('partials.home.collection')
            @slot('image')
                {{ asset('images/shop03.png')}}
            @endslot
            Accessories
        @endcomponent

        @component('partials.home.collection')
            @slot('image')
                {{ asset('images/shop02.png')}}
            @endslot
            Cameras
        @endcomponent

    @endcomponent


    @component('partials.home.section')

        @component('partials.home.tab')
            New Products
            @slot('products')
                @component('partials.product')
                    @slot('image')
                        <img src="{{ asset('images/product01.png')}}" alt="">
                        <div class="product-label">
                            <span class="sale">-30%</span>
                            <span class="new">NEW</span>
                        </div>
                    @endslot
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

                @component('partials.product')
                    @slot('image')
                        <img src="{{ asset('images/product02.png')}}" alt="">
                        <div class="product-label">
                            <span class="new">NEW</span>
                        </div>
                    @endslot
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

                @component('partials.product')
                    @slot('image')
                        <img src="{{ asset('images/product03.png')}}" alt="">
                        <div class="product-label">
                            <span class="sale">-30%</span>
                        </div>
                    @endslot
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

                @component('partials.product')
                    @slot('image')
                        <img src="{{ asset('images/product04.png')}}" alt="">
                    @endslot
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

                @component('partials.product')
                    @slot('image')
                        <img src="{{ asset('images/product05.png')}}" alt="">
                    @endslot
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
            @endslot
        @endcomponent
    @endcomponent

    @include('partials.home.hot-deal')

    @component('partials.home.section')

        @component('partials.home.tab')
            Top Selling
            @slot('products')
                @component('partials.product')
                    @slot('image')
                        <img src="{{ asset('images/product06.png')}}" alt="">
                        <div class="product-label">
                            <span class="sale">-30%</span>
                            <span class="new">NEW</span>
                        </div>
                    @endslot
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

                @component('partials.product')
                    @slot('image')
                        <img src="{{ asset('images/product07.png')}}" alt="">
                        <div class="product-label">
                            <span class="new">NEW</span>
                        </div>
                    @endslot
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

                @component('partials.product')
                    @slot('image')
                        <img src="{{ asset('images/product08.png')}}" alt="">
                        <div class="product-label">
                            <span class="sale">-30%</span>
                        </div>
                    @endslot
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

                @component('partials.product')
                    @slot('image')
                        <img src="{{ asset('images/product09.png')}}" alt="">
                    @endslot
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

                @component('partials.product')
                    @slot('image')
                        <img src="{{ asset('images/product01.png')}}" alt="">
                    @endslot
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
            @endslot
        @endcomponent
    @endcomponent

    @component('partials.home.section')
        @component('partials.list')
            Top Selling
            @slot('widgets')
                <div>
                    @component('partials.widget')
                        {{asset('images/product07.png')}}
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

                    @component('partials.widget')
                        {{asset('images/product08.png')}}
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

                    @component('partials.widget')
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
                </div>

                <div>
                    @component('partials.widget')
                        {{asset('images/product01.png')}}
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

                    @component('partials.widget')
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

                    @component('partials.widget')
                        {{asset('images/product03.png')}}
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
                </div>
            @endslot
        @endcomponent
        @component('partials.list')
            Top Selling
            @slot('widgets')
                <div>
                    @component('partials.widget')
                        {{asset('images/product04.png')}}
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

                    @component('partials.widget')
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

                    @component('partials.widget')
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
                </div>

                <div>
                    @component('partials.widget')
                        {{asset('images/product07.png')}}
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

                    @component('partials.widget')
                        {{asset('images/product08.png')}}
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

                    @component('partials.widget')
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
                </div>
            @endslot
        @endcomponent

        <div class="clearfix visible-sm visible-xs"></div>

        @component('partials.list')
            Top Selling
            @slot('widgets')
                <div>
                    @component('partials.widget')
                        {{asset('images/product01.png')}}
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

                    @component('partials.widget')
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

                    @component('partials.widget')
                        {{asset('images/product03.png')}}
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
                </div>

                <div>
                    @component('partials.widget')
                        {{asset('images/product04.png')}}
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

                    @component('partials.widget')
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

                    @component('partials.widget')
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
                </div>
            @endslot
        @endcomponent

    @endcomponent

@endsection
