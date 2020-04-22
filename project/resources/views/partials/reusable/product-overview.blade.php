<!-- product -->
<div class="product">
    <div class="product-img">
        {{$image}}
    </div>
    <div class="product-body">
        <p class="product-category">{{$category}}</p>
        <h3 class="product-name"><a href="{{ route('product',['id' => $id]) }}">{{$name}}</a></h3>
        <h4 class="product-price">{{$price}} <del class="product-old-price">{{$old_price}}</del></h4>
        @component('partials.reusable.stars')
            @slot('s')
                {{$s}}
            @endslot
        @endcomponent
        <div class="product-btns">
            <a href="{{ route('addWishlist',['id' => $id]) }}"><button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button></a>
            <a href="{{ route('product',['id' => $id]) }}"><button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button></a>
        </div>
    </div>
    <div class="add-to-cart">
        <a href="{{route('addToCart',['id' => ($id)])}}"><button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
    </div>
</div>
<!-- /product -->
