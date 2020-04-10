@extends('index')

@section('content')

    @include('partials.reusable.breadcrumb')

    @component('partials.reusable.section')
        @include('partials.product.images')

        @component('partials.product.details')
            @slot('name')
                {{$product->name}}
            @endslot
            @slot('price')
                ${{$product->price*(100-$product->sale)/100}}
            @endslot
            @slot('old_price')
                ${{$product->price}}
            @endslot
            @slot('description')
                {{$product->summary}}
            @endslot
            @slot('s')
                <!-- TODO -->
                4
            @endslot
        @endcomponent

        @component('partials.product.product-tab')
            @slot('description')
                {{$product->description}}
            @endslot
            @slot('details')
                {{$product->details}}
            @endslot
            @slot('questions')
                TODO
            @endslot
        @endcomponent
    @endcomponent

    @component('partials.reusable.section')

        <!--TODO -->
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
