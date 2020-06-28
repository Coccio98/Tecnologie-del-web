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
                <li @if(!empty($path) && $path=='store') class="active"@endif><a href="{{route('store')}}">Store</a></li>
                @foreach($categories as $key=>$category)
                    <li @if(!empty($path) && $path=='store' && !empty(request()->get('category')) && request()->get('category') == $category->id) class="active"@endif>
                        <div class="dropdown padding-top">
                            <a href="{{route('store')}}?category={{$category->id}}" class=""  id="dropdownMenu1" aria-haspopup="true" aria-expanded="true">
                                {{$category->name}}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-category" aria-labelledby="dropdownMenu1">
                                @foreach($subcategories[$key] as $subcategory)
                                    <li><a href="{{route('store')}}?category={{$category->id}}&subcategory={{$subcategory->id}}">{{$subcategory->name}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </li>
                @endforeach
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<!-- /NAVIGATION -->
