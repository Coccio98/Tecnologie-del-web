<!-- wishlist product  -->
<div class="product-wishlist">
    <div class="product-img">
        <img src="@if(!empty($product->image)){{$product->image}}@else {{asset('images/no_image.jpg')}} @endif" alt="">
    </div>
    <div class="product-body">
        <p class="product-category">Category</p>
        <h3 class="product-name"><a href="{{route('product',['id' => ($product->id)])}}">{{$product->name}}</a></h3>
        <h4 class="product-price">${{$product->price*(100-$product->sale)/100}} <del class="product-old-price">{{$product->price}}</del></h4>

        <div class="add-to-cart">
            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
        </div>

        <div class="del-to-cart">
            <a href="{{route('deleteWishlist',['id' => ($product->id)])}}"><button class="del-to-cart-btn"><i class="fa fa-trash"></i> Delete</button></a>
        </div>

    </div>
</div>
<!-- /wishlist product -->
