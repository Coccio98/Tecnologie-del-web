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
        <div class="col-md-12">
            <div class="section-title text-center">
                <h3 class="title">Related Products</h3>
            </div>
        </div>

        @for($i=0; ($i<sizeof($related)&&$i<4); $i++)
            <!-- product -->
            <div class="col-md-3 col-xs-6">
                @component('partials.reusable.product-overview')
                    @slot('image')
                        <img src="@if(!empty($related[$i]->image)){{ asset($related[$i]->image)}}@else {{asset('images/no_image.jpg')}} @endif" alt="">
                        <div class="product-label">
                            @if($related[$i]->sale != 0)
                                <span class="sale">-{{$related[$i]->sale}}%</span>
                            @endif
                            @if($now->diffInDays($related[$i]->created_at) <= 3)
                                <span class="new">NEW</span>
                            @endif
                        </div>
                    @endslot
                    @slot('category')
                        {{$productCategories[0]->name}}
                    @endslot
                    @slot('name')
                        {{$related[$i]->name}}
                    @endslot
                    @slot('id')
                        {{$related[$i]->id}}
                    @endslot
                    @slot('price')
                        ${{$related[$i]->price*(100-$related[$i]->sale)/100}}
                    @endslot
                    @slot('old_price')
                        ${{$related[$i]->price}}
                    @endslot
                    @slot('s')
                        {{$related[$i]->score}}
                    @endslot
                @endcomponent
            </div>

            @if(($i+1) == 2)
                <div class="clearfix visible-sm visible-xs"></div>
            @endif
        @endfor
    @endcomponent
@endsection
