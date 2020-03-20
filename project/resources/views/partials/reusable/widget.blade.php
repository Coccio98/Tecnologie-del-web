<!-- product widget -->
<div class="product-widget">
    <div class="product-img">
        <img src="{{$slot}}" alt="">
    </div>
    <div class="product-body">
        <p class="product-category">{{$category}}</p>
        <h3 class="product-name"><a href="{{ route('product') }}">{{$name}}</a></h3>
        <h4 class="product-price">{{$price}} <del class="product-old-price">{{$old_price}}</del></h4>
    </div>
</div>
<!-- /product widget -->
