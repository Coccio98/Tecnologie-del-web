<!-- order product  -->
<div class="order-product">

        <div class="order-information">
            <div class="row">
                <div class="col-sm-3">
                    <h4>Delivery date:</h4>
                    <h5>{{$orders[$i]->delivery_date}}</h5>
                </div>
                <div class="col-sm-3">
                    <h4>Total + Coupon:</h4>
                    <h5>${{number_format($orders[$i]->total, 2, '.', ',')}}</h5>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="col-md-8 col-md-push-1">
            @foreach($products[$i] as $product)
                <div>
                    <div class="product-img">
                        <img src="@if(!empty($product->image)){{$product->image}}@else {{asset('storage/images/no_image.jpg')}} @endif" alt="">
                    </div>

                    <div class="product-body">
                        <p class="product-category"><br/></p>
                        <h3 class="product-name"><a href="{{ route('product',['id' => $product->id]) }}">{{$product->name}}</a></h3>
                        @component('partials.reusable.stars')
                            @slot('s')
                                {{$product->score}}
                            @endslot
                        @endcomponent
                        <h4 class="product-price"> {{$product->quantity}}x ${{number_format($product->price_stamp, 2, '.', ',')}}</h4>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-md-4">
            <div class="add-to-cart">
                <a href="{{route('trackMyOrder',['id'=>$orders[$i]->id])}}"><button class="add-to-cart-btn">Track my order</button></a>
            </div>

            <div class="del-to-cart">
                <a href="{{route('order-details',['id'=>$orders[$i]->id])}}"><button class="del-to-cart-btn"> Order Details</button></a>
            </div>
        </div>
    </div>
</div>
<!-- /order product -->

