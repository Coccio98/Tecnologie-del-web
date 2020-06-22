@extends('index')

@section('content')

    @component('partials.reusable.section')

        @foreach($boxes as $box)
            @component('partials.home.collection')
                @slot('image')
                    {{ asset('storage/'.$box->image)}}
                @endslot
                @slot('category')
                    {{$box->category_id}}
                @endslot
                {{$box->name}}
            @endcomponent
        @endforeach
    @endcomponent


    @component('partials.reusable.section')

        @component('partials.home.tab')
            Best Sales
            @slot('n')
                1
            @endslot
            @slot('products')
                <div id="tab1-1" class="tab-pane active">
                    <div class="products-slick" data-nav="#slick-nav-1-1">
                        @foreach($bestProducts as $product)
                            @component('partials.reusable.product-overview')
                                @slot('image')
                                    <img src="@if(!empty($product->image)){{asset('storage/'.$product->image)}}@else {{asset('storage/images/no_image.jpg')}} @endif" alt="">
                                    <div class="product-label">
                                        @if($product->sale != 0)
                                            <span class="sale">-{{$product->sale}}%</span>
                                        @endif
                                        @if($now->diffInDays($product->created_at) <= 3)
                                            <span class="new">NEW</span>
                                        @endif
                                    </div>
                                @endslot
                                @slot('category')
                                    {{$product->category}}
                                @endslot
                                @slot('name')
                                    {{$product->name}}
                                @endslot
                                @slot('id')
                                    {{$product->id}}
                                @endslot
                                @slot('price')
                                    ${{number_format(($product->price*(100-$product->sale)/100), 2, '.', ',')}}
                                @endslot
                                @slot('old_price')
                                    ${{number_format($product->price, 2, '.', ',')}}
                                @endslot
                                @slot('s')
                                    {{$product->score}}
                                @endslot
                            @endcomponent
                        @endforeach
                    </div>
                <div id="slick-nav-1-1" class="products-slick-nav"></div>
                </div>
            @endslot
        @endcomponent
    @endcomponent

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($showcases as $key=>$showcase)
                <div class="item @if($key==0) active @endif">
                    @include('partials.home.hot-deal')
                </div>
            @endforeach
        </div>
        <a class="left carousel-control" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    @component('partials.reusable.section')

        @component('partials.home.tab')
            Top Selling
            @slot('n')
                2
            @endslot
            @slot('products')
                <div id="tab1-2" class="tab-pane active">
                    <div class="products-slick" data-nav="#slick-nav-1-2">
                        @foreach($topSelling as $product)
                            @component('partials.reusable.product-overview')
                                @slot('image')
                                    <img src="@if(!empty($product->image)){{asset('storage/'.$product->image)}}@else {{asset('storage/images/no_image.jpg')}} @endif" alt="">

                                    <div class="product-label">
                                        @if($product->sale != 0)
                                            <span class="sale">-{{$product->sale}}%</span>
                                        @endif
                                        @if($now->diffInDays($product->created_at) <= 3)
                                            <span class="new">NEW</span>
                                        @endif
                                    </div>
                                @endslot
                                @slot('category')
                                    {{$product->category}}
                                @endslot
                                @slot('name')
                                    {{$product->name}}
                                @endslot
                                @slot('id')
                                    {{$product->id}}
                                @endslot
                                @slot('price')
                                    ${{number_format(($product->price*(100-$product->sale)/100), 2, '.', ',')}}
                                @endslot
                                @slot('old_price')
                                    ${{number_format($product->price, 2, '.', ',')}}
                                @endslot
                                @slot('s')
                                    {{$product->score}}
                                @endslot
                            @endcomponent
                        @endforeach
                    </div>
                    <div id="slick-nav-1-2" class="products-slick-nav"></div>
                </div>
            @endslot
        @endcomponent
    @endcomponent

@endsection
