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
                @foreach($categories as $category)
                    <li @if(!empty($path) && $path=='store' && !empty(request()->get('category')) && request()->get('category') == $category->id) class="active"@endif>
                        <a href="{{route('store')}}?category={{$category->id}}">{{$category->name}}</a></li>
                @endforeach
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<!-- /NAVIGATION -->
