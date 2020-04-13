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

                    @component('partials.store.checkbox')
                        @slot('n')
                            category-1
                        @endslot
                        @slot('category')
                            Laptops
                        @endslot
                        120
                    @endcomponent

                    @component('partials.store.checkbox')
                        @slot('n')
                            category-2
                        @endslot
                        @slot('category')
                            Smartphones
                        @endslot
                        740
                    @endcomponent

                    @component('partials.store.checkbox')
                        @slot('n')
                            category-3
                        @endslot
                        @slot('category')
                            Cameras
                        @endslot
                        1450
                    @endcomponent

                    @component('partials.store.checkbox')
                        @slot('n')
                            category-4
                        @endslot
                        @slot('category')
                            Accessories
                        @endslot
                        578
                    @endcomponent

                    @component('partials.store.checkbox')
                        @slot('n')
                            category-5
                        @endslot
                        @slot('category')
                            Laptops
                        @endslot
                        120
                    @endcomponent

                    @component('partials.store.checkbox')
                        @slot('n')
                            category-6
                        @endslot
                        @slot('category')
                            Smartphones
                        @endslot
                        740
                    @endcomponent
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
                    @component('partials.store.checkbox')
                        @slot('n')
                            brand-1
                        @endslot
                        @slot('category')
                            SAMUNG
                        @endslot
                        578
                    @endcomponent

                    @component('partials.store.checkbox')
                        @slot('n')
                            brand-2
                        @endslot
                        @slot('category')
                            LG
                        @endslot
                        125
                    @endcomponent

                    @component('partials.store.checkbox')
                        @slot('n')
                            brand-3
                        @endslot
                        @slot('category')
                            SONY
                        @endslot
                        755
                    @endcomponent

                    @component('partials.store.checkbox')
                        @slot('n')
                            brand-4
                        @endslot
                        @slot('category')
                            SAMSUNG
                        @endslot
                        578
                    @endcomponent

                    @component('partials.store.checkbox')
                        @slot('n')
                            brand-5
                        @endslot
                        @slot('category')
                            LG
                        @endslot
                        125
                    @endcomponent

                    @component('partials.store.checkbox')
                        @slot('n')
                            brand-6
                        @endslot
                        @slot('category')
                            SONY
                        @endslot
                        755
                    @endcomponent
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
