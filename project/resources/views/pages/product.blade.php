@extends('index')

@section('content')

    @include('partials.reusable.breadcrumb')

    @component('partials.reusable.section')
<!-- TODO rivedere immagini-->
        @component('partials.product.images')
            @slot('img1')
                {{ asset('images/product01.png')}}
            @endslot
            @slot('img2')
                {{ asset('images/product03.png')}}
            @endslot
            @slot('img3')
                {{ asset('images/product06.png')}}
            @endslot
            @slot('img4')
                {{ asset('images/product08.png')}}
            @endslot
        @endcomponent

        @component('partials.product.details')
            @slot('name')
                PRODUCT NAME GOES HERE
            @endslot
            @slot('price')
                $980.00
            @endslot
            @slot('old_price')
                $990.00
            @endslot
            @slot('description')
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            @endslot
            @slot('s')
                4
            @endslot
        @endcomponent

        @component('partials.product.product-tab')
            @slot('description')
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            @endslot
            @slot('details')
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            @endslot
            @slot('questions')
                TODO
            @endslot
        @endcomponent
    @endcomponent

    @component('partials.reusable.section')

        <div class="col-md-12">
            <div class="section-title text-center">
                <h3 class="title">Related Products</h3>
            </div>
        </div>

        <!-- product -->
        <div class="col-md-3 col-xs-6">
            @component('partials.reusable.product-overview')
                @slot('image')
                    <img src="{{ asset('images/product01.png')}}" alt="">
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
                @slot('s')
                    1
                @endslot
            @endcomponent
        </div>
        <!-- /product -->

        <!-- product -->
        <div class="col-md-3 col-xs-6">
            @component('partials.reusable.product-overview')
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
                @slot('s')
                    5
                @endslot
            @endcomponent
        </div>
        <!-- /product -->

        <div class="clearfix visible-sm visible-xs"></div>

        <!-- product -->
        <div class="col-md-3 col-xs-6">
            @component('partials.reusable.product-overview')
                @slot('image')
                    <img src="{{ asset('images/product03.png')}}" alt="">
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
                @slot('s')
                    2
                @endslot
            @endcomponent
        </div>
        <!-- /product -->

        <!-- product -->
        <div class="col-md-3 col-xs-6">
            @component('partials.reusable.product-overview')
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
                @slot('s')
                    2
                @endslot
            @endcomponent
        </div>
        <!-- /product -->
    @endcomponent
@endsection
