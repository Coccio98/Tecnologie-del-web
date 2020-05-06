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
            <a class="review-link" href="#product-tab">{{$totRating}} Review(s) | Add your review</a>
        </div>
        <div>
            <h3 class="product-price"> ${{number_format(($product->price*(100-$product->sale)/100), 2, '.', ',')}} <del class="product-old-price">${{number_format($product->price, 2, '.', ',')}}</del></h3>
            <span id="product-available" class="product-available">@if($availability)In Stock @else Out of Stock @endif</span>
        </div>
        <p>{{$product->summary}}</p>

        <form id="addCart" action="{{route('addToCart',['id' => ($product->id)])}}" method="post">
            @csrf
            <div class="product-options">
                <input id="product_id" type="hidden" value="{{$product->id}}">
                <label>
                    Size
                    <select id='size-select' class="input-select" name="size" onchange="sizeColor()">
                        @foreach($productSizes as $size)
                            <option value="{{$size->size}}">{{$size->size}}</option>
                        @endforeach
                    </select>
                </label>
                <label>
                    Color
                    <select id='color-select' class="input-select" name="color" onchange="availability()">
                        @include('partials.product.color')
                    </select>
                </label>
            </div>

            <div class="add-to-cart">
                <div class="qty-label">
                    Qty
                    <div class="input-number">
                        <input type="number" name="quantity" value="1">
                        <span class="qty-up">+</span>
                        <span class="qty-down">-</span>
                    </div>
                </div>
                <button id="add-btn" class="add-to-cart-btn" @if(!$availability) disabled @endif><i class="fa fa-shopping-cart"></i> add to cart</button>
            </div>
        </form>
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
