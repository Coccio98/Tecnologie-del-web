<!-- FOOTER -->
<footer id="footer">
    <!-- top footer -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">About Us</h3>
                        <p>We are an e-commerce platform specialised on selling Computer, Smartphone and other Informatic and Electronic stuff.</p>
                        <ul class="footer-links">
                            <li><p><i class="fa fa-map-marker"></i>Via Camponeschi, 19 Piazza Santa Margherita, 2 Palazzo Camponeschi, 67100 L'Aquila AQ</p></li>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2948.5822295325997!2d13.395104950529521!3d42.351429579085355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132fcd6e60615377%3A0x5a65eca9a0cd9f3e!2sUniversit%C3%A0%20degli%20Studi%20dell&#39;Aquila!5e0!3m2!1sit!2sit!4v1588697068830!5m2!1sit!2sit" width="270" height="150" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <li><a itemprop="telephone" href="tel:+390123456789"><i class="fa fa-phone"></i>+390123456789</a></li>
                            <li class="item"> <i class="fa fa-envelope"> </i>
                                <a href="mailto:info@example.com">info-electro@example.com</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
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

                <div class="col-md-3 col-xs-6">
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

                <div class="col-md-3 col-xs-6">
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
