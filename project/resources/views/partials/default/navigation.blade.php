<!-- NAVIGATION -->
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">

                <li @if(!empty($path) && $path=='home') class="active"@endif><a href="/">Home</a></li>
                <li @if(!empty($path) && $path=='hotDeal-shop') class="active"@endif><a href="{{route('hotDeal-shop',['id'=> 1])}}">Hot Deals</a></li>
                <li @if(!empty($path) && $path=='store') class="active"@endif><a href="{{route('store')}}">Categories</a></li>
                @foreach($categories as $key=>$category)
                    <li @if(!empty($path) && $path=='store' && !empty(request()->get('category')) && request()->get('category') == $category->id) class="active"@endif>
                        <div class="dropdown padding-top">
                            <a href="{{route('store')}}?category={{$category->id}}" class=""  id="dropdownMenu1" aria-haspopup="true" aria-expanded="true">
                                {{$category->name}}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-category" aria-labelledby="dropdownMenu1">
                                @foreach($subcategories[$key] as $subcategory)
                                    <li><a href="#">{{$subcategory->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                @endforeach

                {{--<div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Dropdown
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </div>--}}
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<!-- /NAVIGATION -->
