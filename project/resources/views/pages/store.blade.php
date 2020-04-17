@extends('index')

@section('content')

    @include('partials.reusable.breadcrumb')

    @component('partials.reusable.section')
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
                                Category
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
                {{$products->links('pagination.store-pagination')}}
            </div>
            <!-- /store bottom filter -->
        </div>
        <!-- /STORE -->
    @endcomponent

@endsection
