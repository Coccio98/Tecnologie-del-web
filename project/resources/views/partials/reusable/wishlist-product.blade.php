<!-- wishlist product  -->
<div class="product-wishlist">
    <div class="product-img">
        <img src="@if(!empty($product->image)){{$product->image}}@else {{asset('storage/images/no_image.jpg')}} @endif" alt="">
    </div>
    <div class="product-body">
        <p class="product-category">
            @foreach($productsCategories[$key] as $productsCategory)
                {{$productsCategory->name}}
            @endforeach
        </p>
        <h3 class="product-name"><a href="{{route('product',['id' => ($product->id)])}}">{{$product->name}}</a></h3>

        @component('partials.reusable.stars')
            @slot('s')
                {{$product->score}}
            @endslot
        @endcomponent

        <h4 class="product-price">${{number_format($product->price*(100-$product->sale)/100, 2, '.', ',')}} <del class="product-old-price">{{number_format($product->price, 2, '.', ',')}}</del></h4>

        <form id="addCart" action="{{route('addToCart',['id' => ($product->id)])}}" method="post">
            @csrf
            <div class="product-options">
                <input id="product_id_{{$key}}" type="hidden" value="{{$product->id}}">
                <label>
                    Size
                    <select id='{{$key}}' class="input-select" name="size" onchange="sizeColorWishlist(this.id)">
                        @foreach($productsSizes[$key] as $size)
                            <option value="{{$size->size}}">{{$size->size}}</option>
                        @endforeach
                    </select>
                </label>
                <label>
                    Color
                    <select id='color-select-{{$key}}' class="input-select" name="color" onchange="availabilityWishlist(this.id)">
                        @include('partials.wishlist.colorWishlist')
                    </select>
                </label>
                <label class="qty-label">
                    Qty
                    <div class="input-number" >
                        <input type="number" name="quantity" value="1">
                        <span class="qty-up">+</span>
                        <span class="qty-down">-</span>
                    </div>
                </label>
            </div>

            <div class="add-to-cart">
                <span id="product-available-{{$key}}" class="product-available">@if($availability[$key])In Stock @else Out of Stock @endif</span>
                <button id="add-btn-{{$key}}" class="add-to-cart-btn" @if(!$availability[$key]) disabled @endif><i class="fa fa-shopping-cart"></i> add to cart</button>
            </div>
        </form>
        <div class="del-to-cart">
            <a href="{{route('deleteWishlist',['id' => ($product->id)])}}"><button class="del-to-cart-btn"><i class="fa fa-trash"></i> Delete</button></a>
        </div>

    </div>
</div>
<!-- /wishlist product -->
