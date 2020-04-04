<!-- NAVIGATION -->
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">

                <li @if(!empty($path) && $path=='home') class="active"@endif><a href="/">Home</a></li>
                <li @if(!empty($path) && $path=='hotdeals-shop') class="active"@endif><a href="{{route('hotdeals-shop')}}">Hot Deals</a></li>
                <li @if(!empty($path) && $path=='') class="active"@endif><a href="#">Categories</a></li>
                <li @if(!empty($path) && $path=='') class="active"@endif><a href="#">Laptops</a></li>
                <li @if(!empty($path) && $path=='') class="active"@endif><a href="#">Smartphones</a></li>
                <li @if(!empty($path) && $path=='') class="active"@endif><a href="#">Cameras</a></li>
                <li @if(!empty($path) && $path=='') class="active"@endif><a href="#">Accessories</a></li>

            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<!-- /NAVIGATION -->
