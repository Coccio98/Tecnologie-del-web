@extends('index')

@section('content')

    @component('partials.reusable.breadcrumb')
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('store')}}">All Categories</a></li>
        @foreach($productCategories as $productCategory)
            <li><a href="{{ route('store') }}?category={{$productCategory->id}}">{{$productCategory->name}}</a></li>
        @endforeach
        <li class="active">{{$product->name}}</li>
    @endcomponent

    @component('partials.reusable.section')
        @include('partials.product.images')

        @include('partials.product.details')

        @include('partials.product.product-tab')
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
        </div>
        <!-- /product -->
    @endcomponent
@endsection
