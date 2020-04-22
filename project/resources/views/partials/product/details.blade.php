<!-- Product details -->
<div class="col-md-5">
    <div class="product-details">
        <h2 class="product-name">{{$product->name}}</h2>
        <div>
            @component('partials.reusable.stars')
                @slot('s')
                    {{$product->score}}
                @endslot
            @endcomponent
            <a class="review-link" href="#">10 Review(s) | Add your review</a>
        </div>
        <div>
            <h3 class="product-price"> ${{$product->price*(100-$product->sale)/100}} <del class="product-old-price">${{$product->price}}</del></h3>
            <span class="product-available">In Stock</span>
        </div>
        <p>{{$product->summary}}</p>

        <div class="product-options">
            <label>
                Size
                <select class="input-select">
                    <option value="0">X</option>
                </select>
            </label>
            <label>
                Color
                <select class="input-select">
                    <option value="0">Red</option>
                </select>
            </label>
        </div>

        <div class="add-to-cart">
            <div class="qty-label">
                Qty
                <div class="input-number">
                    <input type="number">
                    <span class="qty-up">+</span>
                    <span class="qty-down">-</span>
                </div>
            </div>
            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
        </div>

        <ul class="product-btns">
            <li><a href="{{ route('addWishlist',['id' => $product->id]) }}"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
        </ul>

        <ul class="product-links">
            <li>Category:</li>
            @foreach($productCategories as $productCategory)
                <li><a href="{{ route('store') }}?category={{$productCategory->id}}">{{$productCategory->name}}</a></li>
            @endforeach
        </ul>

        <ul class="product-links">
            <li>Share:</li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
        </ul>

    </div>
</div>
<!-- /Product details -->
