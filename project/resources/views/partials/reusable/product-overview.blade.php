<!-- product -->
<div class="product">
    <div class="product-img">
        {{$image}}
    </div>
    <div class="product-body">
        <p class="product-category">{{$category}}</p>
        <h3 class="product-name"><a href="{{ route('product') }}">{{$name}}</a></h3>
        <h4 class="product-price">{{$price}} <del class="product-old-price">{{$old_price}}</del></h4>
        @component('partials.reusable.stars')
            @slot('s')
                {{$s}}
            @endslot
        @endcomponent
        <div class="product-btns">
            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
        </div>
    </div>
    <div class="add-to-cart">
        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
    </div>
</div>
<!-- /product -->
