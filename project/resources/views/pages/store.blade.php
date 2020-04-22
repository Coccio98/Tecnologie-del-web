@extends('index')

@section('content')

    @component('partials.reusable.breadcrumb')
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('store')}}">All Categories</a></li>
        @if(!empty(request()->get('category')))
            <li><a href="{{ route('store') }}?category={{request()->get('category')}}">{{$categories[request()->get('category')-1]->name}}</a></li>
        @endif
    @endcomponent

    @component('partials.reusable.section')
        <!-- ASIDE -->
        <div id="aside" class="col-md-3">
            <form method="get" action="{{route('store')}}" id="myForm">
                @csrf
                    <input type="hidden" value="@if(!empty(request()->get('search'))) {{request()->get('search')}} @endif" name="search">
                <!-- aside Widget -->
                <div class="aside">
                    <h3 class="aside-title">Categories</h3>
                    <div class="checkbox-filter">
                        @foreach($categories as $category)
                            <div class="input-radio">
                                <input type="radio" id="category-{{$category->id}}" name="category" value="{{$category->id}}" class="category"
                                       @if(request()->get('category') == $category->id) checked @endif>
                                <label for="category-{{$category->id}}">
                                    <span></span>
                                    {{$category->name}}
                                    <small>(120)</small>
                                </label>
                            </div>
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
                            <input id="price-min" type="number" name="min">
                            <span class="qty-up">+</span>
                            <span class="qty-down">-</span>
                        </div>
                        <span>-</span>
                        <div class="input-number price-max">
                            <input id="price-max" type="number" name="max">
                            <span class="qty-up">+</span>
                            <span class="qty-down">-</span>
                        </div>
                    </div>
                    <br/>
                    <button class="btn primary-btn">Search</button>
                </div>
                <!-- /aside Widget -->

                <!-- aside Widget -->
                <div class="aside">
                    <h3 class="aside-title">Brand</h3>
                    <div class="checkbox-filter">
                        @foreach($brands as $brand)
                            <div class="input-radio">
                                <input type="radio" id="brand-{{$brand->id}}" name="brand" value="{{$brand->id}}" class="category"
                                       @if(request()->get('brand') == $brand->id) checked @endif>
                                <label for="brand-{{$brand->id}}">
                                    <span></span>
                                    {{$brand->name}}
                                    <small>(120)</small>
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <!-- /aside Widget -->
            </form>
        </div>
        <!-- /ASIDE -->

        <!-- STORE -->
        <div id="store" class="col-md-9">
            <!-- store top filter -->
            <div class="store-filter clearfix">
                <div class="store-sort">
                    <label>
                        Sort By:
                        <select class="input-select">
                            <option value="0">Popular</option>
                            <option value="1">Position</option>
                        </select>
                    </label>

                    <label>
                        Show:
                        <select class="input-select">
                            <option value="0">20</option>
                            <option value="1">50</option>
                        </select>
                    </label>
                </div>
            </div>
            <!-- /store top filter -->

            <section class="store-section">
                <!-- store products -->
                <div class="row">
                    <!-- product -->
                    @for($i=0; $i<sizeof($products); $i++)
                        <div class="col-md-4 col-xs-6">
                            @component('partials.reusable.product-overview')
                                @slot('image')
                                    <img src="@if(!empty($products[$i]->image)){{$products[$i]->image}}@else {{asset('images/no_image.jpg')}} @endif" alt="">
                                    <div class="product-label">
                                        @if($products[$i]->sale != 0)
                                            <span class="sale">-{{$products[$i]->sale}}%</span>
                                        @endif
                                        @if($now->diffInDays($products[$i]->created_at) <= 3)
                                            <span class="new">NEW</span>
                                        @endif
                                    </div>
                                @endslot
                                @slot('category')
                                    @foreach($productsCategories[$i] as $productsCategory)
                                        {{$productsCategory->name}}
                                    @endforeach
                                @endslot
                                @slot('name')
                                    {{$products[$i]->name}}
                                @endslot
                                @slot('id')
                                    {{$products[$i]->id}}
                                @endslot
                                @slot('price')
                                    ${{$products[$i]->price*(100-$products[$i]->sale)/100}}
                                @endslot
                                @slot('old_price')
                                    ${{$products[$i]->price}}
                                @endslot
                                @slot('s')
                                    {{$products[$i]->score}}
                                @endslot
                            @endcomponent
                        </div>
                        @if((($i+1) % 3)==0 && ($i+1 % 2)==0)
                            <div class="clearfix visible-lg visible-md visible-sm visible-xs"></div>
                        @elseif((($i+1) % 2)==0)
                            <div class="clearfix visible-sm visible-xs"></div>
                        @elseif((($i+1) % 3)==0)
                            <div class="clearfix visible-lg visible-md"></div>
                    @endif
                @endfor
                <!-- /product -->
                </div>
                <!-- /store products -->

            <!-- store bottom filter -->
            <div class="store-filter clearfix">
                {!!  $products->render('pagination.store-pagination')  !!}
            </div>
            <!-- /store bottom filter -->
            </section>
        </div>
        <!-- /STORE -->
    @endcomponent

@endsection
