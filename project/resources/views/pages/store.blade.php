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
        <form method="get" action="{{route('store')}}" id="myForm">
            @csrf
            <!-- ASIDE -->
            <div id="aside" class="col-md-3">
                    <input type="hidden" value="@if(!empty(request()->get('search'))) {{request()->get('search')}} @endif" name="search">
                <!-- aside Widget -->
                <div class="aside">
                    <h3 class="aside-title">Categories</h3>
                    <div class="checkbox-filter">
                        @foreach($categories as $key=>$category)
                            <div class="input-radio radio-div">
                                <input type="radio" id="category-{{$category->id}}" name="category" value="{{$category->id}}" class="category"
                                       @if(request()->get('category') == $category->id) checked @endif>
                                <label for="category-{{$category->id}}">
                                    <span></span>
                                    {{$category->name}}
                                    <small>({{$category->countByCategory(request())}})</small>
                                </label>
                                @if(request()->get('category') == $category->id)<i class="fa fa-times pointer" onclick="uncheckCategory()"></i>
                                    @foreach($subcategories[$key] as $subcategory)
                                        <div class="input-radio radio-div subcategory-div">
                                            <input type="radio" id="subcategory-{{$subcategory->id}}" name="subcategory" value="{{$subcategory->id}}" class="subcategory"
                                            @if(request()->get('subcategory') == $subcategory->id) checked @endif>
                                            <label for="subcategory-{{$subcategory->id}}">
                                                <span></span>
                                                {{$subcategory->name}}
                                            </label>
                                        </div>
                                    @endforeach
                                @endif
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
                        @php($k = 0)
                        @for($i =0; $k < 5 && $i<sizeof($brands); $i++)
                            @if($brands[$i]->countByBrand(request()) != 0)
                                @php($k++)
                                <div class="input-radio">
                                    <input type="radio" id="brand-{{$brands[$i]->id}}" name="brand" value="{{$brands[$i]->id}}" class="category"
                                           @if(request()->get('brand') == $brands[$i]->id) checked @endif>
                                    <label for="brand-{{$brands[$i]->id}}">
                                        <span></span>
                                        {{$brands[$i]->name}}
                                        <small>({{$brands[$i]->countByBrand(request())}})</small>
                                    </label>
                                    @if(request()->get('brand') == $brands[$i]->id)<i class="fa fa-times pointer" onclick="uncheckBrand()"></i> @endif
                                </div>
                            @endif
                        @endfor
                    </div>
                    @if($k == 5 && sizeof($brands)>5)
                        <div class="details" style="display:none">
                            <div class="checkbox-filter" style="margin-top: 6px">
                                @for($i = 5; $i<sizeof($brands); $i++)
                                    @if($brands[$i]->countByBrand(request()) != 0)
                                        <div class="input-radio">
                                            <input type="radio" id="brand-{{$brands[$i]->id}}" name="brand" value="{{$brands[$i]->id}}" class="category"
                                                   @if(request()->get('brand') == $brands[$i]->id) checked @endif>
                                            <label for="brand-{{$brands[$i]->id}}">
                                                <span></span>
                                                {{$brands[$i]->name}}
                                                <small>({{$brands[$i]->countByBrand(request())}})</small>
                                            </label>
                                            @if(request()->get('brand') == $brands[$i]->id)<i class="fa fa-times pointer" onclick="uncheckBrand()"></i> @endif
                                        </div>
                                    @endif
                                @endfor
                            </div>
                        </div>
                        <a class="pointer" id="more" onclick="$('.details').slideToggle(function(){$('#more').html($('.details').is(':visible')?'See Less':'See More');});">See More</a>
                    @endif
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
                            <select class="input-select" name="sort">
                                <option value="0">Popular</option>
                                <option @if(request()->get('sort') == "1") selected @endif value="1">Position</option>
                            </select>
                        </label>

                        <label>
                            Show:
                            <select class="input-select" name="show">
                                <option value="0">9</option>
                                <option @if(request()->get('show') == "1") selected @endif value="1">18</option>
                                <option @if(request()->get('show') == "2") selected @endif value="2">27</option>
                            </select>
                        </label>
                    </div>
                </div>
                <!-- /store top filter -->

                <section class="store-section">
                    <!-- store products -->
                    @include('partials.store.store-section')
                <!-- /store bottom filter -->
                </section>
            </div>
        <!-- /STORE -->
        </form>
    @endcomponent

@endsection
