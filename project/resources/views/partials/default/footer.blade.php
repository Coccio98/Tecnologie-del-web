<!-- FOOTER -->
<footer id="footer">
    <!-- top footer -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <div class="col-md-4 col-xs-6 col-md-push-1">
                    <div class="footer">
                        <h3 class="footer-title">Categories</h3>
                        <ul class="footer-links">
                            <li><a href="{{route('hotDeal-shop',['id'=> 1])}}">Hot deals</a></li>
                            @foreach($categories as $category)
                                <li><a href="{{route('store')}}?category={{$category->id}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="clearfix visible-xs"></div>

                <div class="col-md-4 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Information</h3>
                        <ul class="footer-links">
                            <li><a href="{{route('information')}}#about">About Us</a></li>
                            <li><a href="{{route('information')}}#contact">Contact Us</a></li>
                            <li><a href="{{route('information')}}#privacy">Privacy Policy</a></li>
                            <li><a href="{{route('information')}}#terms">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Service</h3>
                        <ul class="footer-links">
                            <li><a href="{{ route('myaccount') }}">My Account</a></li>
                            <li><a href="{{ route('cart') }}">View Cart</a></li>
                            <li><a href="{{ route('wishlist') }}">Wishlist</a></li>
                            <li><a href="{{ route('myorder') }}">My Order</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /top footer -->
</footer>
<!-- /FOOTER -->
