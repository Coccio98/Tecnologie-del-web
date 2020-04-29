@extends('index')

@section('content')

    @component('partials.reusable.section')

        @component('partials.home.collection')
            @slot('image')
                {{ asset('images/shop01.png')}}
            @endslot
            @slot('category')
                1
            @endslot
            Laptop
        @endcomponent

        @component('partials.home.collection')
            @slot('image')
                {{ asset('images/shop03.png')}}
            @endslot
            @slot('category')
                6
            @endslot
            Accessories
        @endcomponent

        @component('partials.home.collection')
            @slot('image')
                {{ asset('images/shop02.png')}}
            @endslot
            @slot('category')
                5
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
                <div id="tab1-1" class="tab-pane active">
                    <div class="products-slick" data-nav="#slick-nav-1-1">
                        @foreach($newProducts[1] as $product)
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
                    </div>
                <div id="slick-nav-1-1" class="products-slick-nav"></div>
                </div>
                <div id="tab2-1" class="tab-pane">
                    <div class="products-slick" data-nav="#slick-nav-2-1">
                        @foreach($newProducts[2] as $product)
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
                    </div>
                    <div id="slick-nav-2-1" class="products-slick-nav"></div>
                </div>
                <div id="tab3-1" class="tab-pane">
                    <div class="products-slick" data-nav="#slick-nav-3-1">
                        @foreach($newProducts[3] as $product)
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
                    </div>
                    <div id="slick-nav-3-1" class="products-slick-nav"></div>
                </div>
                <div id="tab4-1" class="tab-pane">
                    <div class="products-slick" data-nav="#slick-nav-4-1">
                        @foreach($newProducts[4] as $product)
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
                    </div>
                    <div id="slick-nav-4-1" class="products-slick-nav"></div>
                </div>
            @endslot
        @endcomponent
    @endcomponent

    @foreach($showcases as $key=>$showcase)
        @include('partials.home.hot-deal')
    @endforeach
    @component('partials.reusable.section')

        @component('partials.home.tab')
            Top Selling
            @slot('n')
                2
            @endslot
            @slot('products')
                <div id="tab1-2" class="tab-pane active">
                    <div class="products-slick" data-nav="#slick-nav-1-2">
                        @foreach($topSelling[1] as $product)
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
                    </div>
                    <div id="slick-nav-1-2" class="products-slick-nav"></div>
                </div>
                <div id="tab2-2" class="tab-pane">
                    <div class="products-slick" data-nav="#slick-nav-2-2">
                        @foreach($topSelling[2] as $product)
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
                    </div>
                    <div id="slick-nav-2-2" class="products-slick-nav"></div>
                </div>
                <div id="tab3-2" class="tab-pane">
                    <div class="products-slick" data-nav="#slick-nav-3-2">
                        @foreach($topSelling[3] as $product)
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
                    </div>
                    <div id="slick-nav-3-2" class="products-slick-nav"></div>
                </div>
                <div id="tab4-2" class="tab-pane">
                    <div class="products-slick" data-nav="#slick-nav-4-2">
                        @foreach($topSelling[4] as $product)
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
                    </div>
                    <div id="slick-nav-4-2" class="products-slick-nav"></div>
                </div>
            @endslot
        @endcomponent
    @endcomponent

    @component('partials.reusable.section')
        @component('partials.reusable.list')
            New Products
            @slot('n')
                3
            @endslot
            @slot('widgets')
                <div>
                    @for($i = 0; $i < sizeof($newProducts[0]); $i++)
                        @component('partials.reusable.widget')
                            @if(!empty($newProducts[0][$i]->image)){{$newProducts[0][$i]->image}}@else {{asset('images/no_image.jpg')}} @endif
                            @slot('category')
                                Laptop
                            @endslot
                            @slot('name')
                                {{$newProducts[0][$i] -> name}}
                            @endslot
                            @slot('id')
                                {{$newProducts[0][$i]->id}}
                            @endslot
                            @slot('price')
                                ${{$newProducts[0][$i]->price*(100-$newProducts[0][$i]->sale)/100}}
                            @endslot
                            @slot('old_price')
                                ${{$newProducts[0][$i]-> price}}
                            @endslot
                        @endcomponent
                        @if($i+1 == 3)
                </div>
                <div>
                    @endif
                    @endfor
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
                    @for($i = 0; $i < sizeof($topSelling[0]); $i++)
                        @component('partials.reusable.widget')
                            @if(!empty($topSelling[0][$i]->image)){{$topSelling[0][$i]->image}}@else {{asset('images/no_image.jpg')}} @endif
                            @slot('category')
                                {{$topSelling[0][$i]->category}}
                            @endslot
                            @slot('name')
                                {{$topSelling[0][$i]-> name}}
                            @endslot
                            @slot('id')
                                {{$topSelling[0][$i]->id}}
                            @endslot
                            @slot('price')
                                ${{$topSelling[0][$i]->price*(100-$topSelling[0][$i]->sale)/100}}
                            @endslot
                            @slot('old_price')
                                ${{$topSelling[0][$i]-> price}}
                            @endslot
                        @endcomponent
                        @if($i+1 == 3)
                            </div>
                            <div>
                        @endif
                    @endfor
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
