@extends('index')

@section('content')

    @include('partials.home.hot-deal')

    @component('partials.reusable.section')
        <form method="get" action="{{route('hotDeal-shop',['id' => $showcase->id])}}" id="myForm">
        @csrf
        <!-- ASIDE -->
            <div id="aside" class="col-md-3">
                <input type="hidden" value="@if(!empty(request()->get('search'))) {{request()->get('search')}} @endif" name="search">
                <!-- aside Widget -->
                <div class="aside">
                    <h3 class="aside-title">Categories</h3>
                    <div class="checkbox-filter">
                        @foreach($categories as $category)
                            <div class="input-radio radio-div">
                                <input type="radio" id="category-{{$category->id}}" name="category" value="{{$category->id}}" class="category"
                                       @if(request()->get('category') == $category->id) checked @endif>
                                <label for="category-{{$category->id}}">
                                    <span></span>
                                    {{$category->name}}
                                    <small>({{$category->countByCategoryHotDeal(request(),$showcase->id)}})</small>
                                </label>
                                @if(request()->get('category') == $category->id)<i class="fa fa-times pointer" onclick="uncheckCategory()"></i> @endif
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
                                    <small>({{$brand->countByBrandHotDeal(request(),$showcase->id)}})</small>
                                </label>
                                @if(request()->get('brand') == $brand->id)<i class="fa fa-times pointer" onclick="uncheckBrand()"></i> @endif
                            </div>
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