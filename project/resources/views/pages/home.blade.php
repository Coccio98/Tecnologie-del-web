@extends('index')

@section('content')

    @component('partials.reusable.section')

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


    @component('partials.reusable.section')

        @component('partials.home.tab')
            New Products
            @slot('n')
                1
            @endslot
            @slot('products')
                @foreach($newLaptop as $product)
                    @component('partials.reusable.product-overview')
                        @slot('image')
                            <img src="@if(!empty($product->image)){{$product->image}}@else {{asset('images/no_image.jpg')}} @endif" alt="">
                            <div class="product-label">
                                @if($product->sale != 0)
                                    <span class="sale">-{{$product->sale}}%</span>
                                @endif
                                <span class="new">NEW</span>
                            </div>
                        @endslot
                        @slot('category')
                            Laptop
                        @endslot
                        @slot('name')
                            {{$product->name}}
                        @endslot
                        @slot('id')
                            {{$product->id}}
                        @endslot
                        @slot('price')
                            ${{$product->price*(100-$product->sale)/100}}
                        @endslot
                        @slot('old_price')
                            ${{$product->price}}
                        @endslot
                        @slot('s')
                            {{$product->score}}
                        @endslot
                    @endcomponent
                @endforeach
            @endslot
        @endcomponent
    @endcomponent

    @include('partials.home.hot-deal')

    @component('partials.reusable.section')

        @component('partials.home.tab')
            Top Selling
            @slot('n')
                2
            @endslot
            @slot('products')
                @component('partials.reusable.product-overview')
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
                    @slot('id')
                        1
                    @endslot
                    @slot('price')
                        $980.00
                    @endslot
                    @slot('old_price')
                        $990.00
                    @endslot
                    @slot('s')
                        5
                    @endslot
                @endcomponent

                @component('partials.reusable.product-overview')
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
                    @slot('id')
                        1
                    @endslot
                    @slot('price')
                        $980.00
                    @endslot
                    @slot('old_price')
                        $990.00
                    @endslot
                    @slot('s')
                        3
                    @endslot
                @endcomponent

                @component('partials.reusable.product-overview')
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
                    @slot('id')
                        1
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

                @component('partials.reusable.product-overview')
                    @slot('image')
                        <img src="{{ asset('images/product09.png')}}" alt="">
                    @endslot
                    @slot('category')
                        Category
                    @endslot
                    @slot('name')
                        product name goes here
                    @endslot
                    @slot('id')
                        1
                    @endslot
                    @slot('price')
                        $980.00
                    @endslot
                    @slot('old_price')
                        $990.00
                    @endslot
                    @slot('s')
                        3
                    @endslot
                @endcomponent

                @component('partials.reusable.product-overview')
                    @slot('image')
                        <img src="{{ asset('images/product01.png')}}" alt="">
                    @endslot
                    @slot('category')
                        Category
                    @endslot
                    @slot('name')
                        product name goes here
                    @endslot
                    @slot('id')
                        1
                    @endslot
                    @slot('price')
                        $980.00
                    @endslot
                    @slot('old_price')
                        $990.00
                    @endslot
                    @slot('s')
                        2
                    @endslot
                @endcomponent
            @endslot
        @endcomponent
    @endcomponent

    @component('partials.reusable.section')
        @component('partials.reusable.list')
            Top Selling
            @slot('n')
                3
            @endslot
            @slot('widgets')
                <div>
                    @component('partials.reusable.widget')
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

                    @component('partials.reusable.widget')
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
                </div>

                <div>
                    @component('partials.reusable.widget')
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
        @component('partials.reusable.list')
            Top Selling
            @slot('n')
                4
            @endslot
            @slot('widgets')
                <div>
                    @component('partials.reusable.widget')
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
                    @component('partials.reusable.widget')
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

                    @component('partials.reusable.widget')
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
                </div>
            @endslot
        @endcomponent

        <div class="clearfix visible-sm visible-xs"></div>

        @component('partials.reusable.list')
            Top Selling
            @slot('n')
                5
            @endslot
            @slot('widgets')
                <div>
                    @component('partials.reusable.widget')
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
                    @component('partials.reusable.widget')
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
