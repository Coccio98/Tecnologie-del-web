<!-- MAIN HEADER -->
<div id="header">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- LOGO -->
            <div class="col-md-2">
                <div class="header-logo">
                    <a href="/" class="logo">
                        <img src="{{ asset('images/logo.png')}}" alt="">
                    </a>
                </div>
            </div>
            <!-- /LOGO -->

            <!-- SEARCH BAR -->
            <div class="col-md-6">
                <div class="header-search">
                    <form method="get" action="{{ route('store')}}">
                        @csrf
                        <select class="input-select" name="category">
                            <option value="0">All Categories</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        <input class="input" name="search" placeholder="Search here">
                        <button class="search-btn">Search</button>
                    </form>
                </div>
            </div>
            <!-- /SEARCH BAR -->

            <!-- ACCOUNT -->
            <div class="col-md-4 clearfix">
                <div class="header-ctn">
                    <!-- Wishlist -->
                    <div>
                        <a href="{{ route('wishlist') }}">
                            <i class="fa fa-heart-o"></i>
                            <span>Your Wishlist</span>
                            @if($wishlistCount != null)
                                <div class="qty">{{$wishlistCount}}</div>
                            @endif
                        </a>
                    </div>
                    <!-- /Wishlist -->

                    <!-- Cart -->
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true" href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Your Cart</span>
                            @if($cartCount != 0)
                                <div class="qty">{{$cartCount}}</div>
                            @endif
                        </a>
                        <div class="cart-dropdown">
                            @if($cart != null)
                                <div class="cart-list">
                                    @foreach($cart as $product)
                                        <div class="product-widget">
                                            <div class="product-img">
                                                <img src="@if(!empty($product->image)){{$product->image}}@else {{asset('images/no_image.jpg')}} @endif" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-name"><a href="{{ route('product',['id' => 1]) }}">{{$product->name}}</a></h3>
                                                <h4 class="product-price"><span class="qty">{{$product->quantity}}x</span>${{$product->price*(100-$product->sale)/100}}</h4>
                                            </div>
                                            <button class="delete"><i class="fa fa-close"></i></button>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="cart-summary">
                                    <small>3 Item(s) selected</small>
                                    <h5>SUBTOTAL: $2940.00</h5>
                                </div>
                            @endif
                            <div class="cart-btns">
                                <a href="{{ route('cart') }}">View Cart</a>
                                <a href="{{ route('checkout') }}">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- /Cart -->

                    <!-- My Account -->
                    <div>
                        <!-- Authentication Links -->
                        @guest
                            <div class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </div>
                            @if (Route::has('register'))
                                <div class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </div>
                            @endif
                        @else

                            <div class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa fa-user-o"></i>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('myaccount') }}">
                                        My Account
                                    </a>
                                    <br/>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest
                    </div>
                    <!-- /My account -->
                    <!-- Menu Toogle -->
                    <div class="menu-toggle">
                        <a href="#">
                            <i class="fa fa-bars"></i>
                            <span>Menu</span>
                        </a>
                    </div>
                    <!-- /Menu Toogle -->
                </div>
            </div>
            <!-- /ACCOUNT -->
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</div>
<!-- /MAIN HEADER -->
