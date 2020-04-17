@extends('index')

@section('content')

    @component('partials.reusable.section')
        <div class="section-title">
            <h3 class="title">Hot deals products</h3>
        </div>
        <!-- ASIDE -->
        <div id="aside" class="col-md-3">
            <!-- aside Widget -->
            <div class="aside">
                <h3 class="aside-title">Categories</h3>
                <div class="checkbox-filter">

                    @foreach($categories as $category)
                        @component('partials.store.checkbox')
                            @slot('route')
                                ?category={{$category->id}}
                            @endslot
                            @slot('n')
                                category-{{$category->id}}
                            @endslot
                            @slot('category')
                                {{$category->name}}
                            @endslot
                            120
                        @endcomponent
                    @endforeach
                </div>
            </div>
            <!-- /aside Widget -->

            <!-- aside Widget -->
            <div class="aside">
                <h3 class="aside-title">Price</h3>
                <div class="price-filter">
                    <div id="price-slider"></div>
                    <div class="input-number price-min">
                        <input id="price-min" type="number">
                        <span class="qty-up">+</span>
                        <span class="qty-down">-</span>
                    </div>
                    <span>-</span>
                    <div class="input-number price-max">
                        <input id="price-max" type="number">
                        <span class="qty-up">+</span>
                        <span class="qty-down">-</span>
                    </div>
                </div>
            </div>
            <!-- /aside Widget -->

            <!-- aside Widget -->
            <div class="aside">
                <h3 class="aside-title">Brand</h3>
                <div class="checkbox-filter">
                    @foreach($brands as $brand)
                        @component('partials.store.checkbox')
                            @slot('route')
                                ?brand={{$brand->id}}
                            @endslot
                            @slot('n')
                                brand-{{$brand->id}}
                            @endslot
                            @slot('category')
                                {{$brand->name}}
                            @endslot
                            578
                        @endcomponent
                    @endforeach
                </div>
            </div>
            <!-- /aside Widget -->

            <!-- aside Widget -->
            <div class="aside">
                <h3 class="aside-title">Top selling</h3>
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
            <!-- /aside Widget -->
        </div>
        <!-- /ASIDE -->

        <!-- STORE -->
        <div id="store" class="col-md-9">

            <!-- store products -->
            <div class="row">
                <!-- product -->
                <div class="col-md-4 col-xs-6">
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
                            4
                        @endslot
                    @endcomponent
                </div>
                <!-- /product -->

                <!-- product -->
                <div class="col-md-4 col-xs-6">
                    @component('partials.reusable.product-overview')
                        @slot('image')
                            <img src="{{ asset('images/product02.png')}}" alt="">
                            <div class="product-label">
                                <span class="new">-50%</span>
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
                <div class="col-md-4 col-xs-6">
                    @component('partials.reusable.product-overview')
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

                <div class="clearfix visible-lg visible-md"></div>

                <!-- product -->
                <div class="col-md-4 col-xs-6">
                    @component('partials.reusable.product-overview')
                        @slot('image')
                            <img src="{{ asset('images/product04.png')}}" alt="">
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
                            2
                        @endslot
                    @endcomponent
                </div>
                <!-- /product -->

                <div class="clearfix visible-sm visible-xs"></div>

                <!-- product -->
                <div class="col-md-4 col-xs-6">
                    @component('partials.reusable.product-overview')
                        @slot('image')
                            <img src="{{ asset('images/product05.png')}}" alt="">
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
                            3
                        @endslot
                    @endcomponent
                </div>
                <!-- /product -->

                <!-- product -->
                <div class="col-md-4 col-xs-6">
                    @component('partials.reusable.product-overview')
                        @slot('image')
                            <img src="{{ asset('images/product06.png')}}" alt="">
                            <div class="product-label">
                                <span class="new">-50%</span>
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

                <div class="clearfix visible-lg visible-md visible-sm visible-xs"></div>

                <!-- product -->
                <div class="col-md-4 col-xs-6">
                    @component('partials.reusable.product-overview')
                        @slot('image')
                            <img src="{{ asset('images/product07.png')}}" alt="">
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
                            3
                        @endslot
                    @endcomponent
                </div>
                <!-- /product -->

                <!-- product -->
                <div class="col-md-4 col-xs-6">
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
                </div>
                <!-- /product -->

                <div class="clearfix visible-sm visible-xs"></div>

                <!-- product -->
                <div class="col-md-4 col-xs-6">
                    @component('partials.reusable.product-overview')
                        @slot('image')
                            <img src="{{ asset('images/product09.png')}}" alt="">
                            <div class="product-label">
                                <span class="new">-50%</span>
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
                </div>
                <!-- /product -->
            </div>
            <!-- /store products -->

            <!-- store bottom filter -->
            <div class="store-filter clearfix">
                <span class="store-qty">Showing 20-100 products</span>
                <ul class="store-pagination">
                    <li class="active">1</li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
            <!-- /store bottom filter -->
        </div>
        <!-- /STORE -->
    @endcomponent

@endsection
