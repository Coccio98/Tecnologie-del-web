<!-- order product  -->


<div class="order-product">

    <div class="order-information">
        <div class="row">
            <div class="col-sm-3">
                <h4>Delivery date:</h4>
                <h5>{{$orders[$i]->delivery_date}}</h5>
            </div>
            <div class="col-sm-3">
                <h4>Total:</h4>
                <h5>${{$orders[$i]->total}}</h5>
            </div>
        </div>
    </div>

    @foreach($products[$i] as $product)
        <div>
            <div class="product-img">
                <img src="@if(!empty($product->image)){{$product->image}}@else {{asset('images/no_image.jpg')}} @endif" alt="">
            </div>

            <div class="product-body">
                <p class="product-category">Category</p>
                <h3 class="product-name"><a href="{{ route('product',['id' => $product->id]) }}">{{$product->name}}</a></h3>
                @component('partials.reusable.stars')
                    @slot('s')
                        {{$product->score}}
                    @endslot
                @endcomponent
                <h4 class="product-price"> {{$product->quantity}}x ${{$product->price_stamp}}</h4>
            </div>
        </div>
    @endforeach
    <div class="add-to-cart">
        <a href="{{route('trackMyOrder')}}"><button class="add-to-cart-btn">Track my order</button></a>
    </div>

    <div class="del-to-cart">
        <a href="{{route('order-details')}}"><button class="del-to-cart-btn"> Order Details</button></a>
    </div>
</div>
<!-- /order product -->

