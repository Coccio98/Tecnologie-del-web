@extends('index')

@section('content')

    @component('partials.reusable.section')
        @include('flash-message')
        <div class="col-md-7">
            <h3>Your Cart</h3>
            @foreach($cart as $product)
            <div class="cart">
                <div class="col-md-7">
                    <div class="product-wishlist">
                        <div class="product-img">
                            <img src="@if(!empty($product->image)){{asset('storage/'.$product->image)}}@else {{asset('storage/images/no_image.jpg')}} @endif" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">{{$product->category}}</p>
                            <h3 class="product-name"><a href="{{ route('product',['id' => $product->id]) }}">{{$product->name}}</a></h3>
                            <h4 class="product-price">${{number_format($product->price*(100-$product->sale)/100, 2, '.', ',')}} <del class="product-old-price">{{$product->price}}</del></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="del-to-cart col-md-6">
                        <a href="{{route('deleteCart',['id' => ($product->stock_id)])}}"><button class="del-to-cart-btn">Delete</button></a>
                    </div>
                    <div class="qty-label col-md-6">
                        Qty
                        <div class="input-number">
                            <a class="qty-up" href="{{url ('/cart/update-quantity/'.$product->stock_id.'/1')}}">+</a>
                            <input id="qty" class="input form-control" type="number" name="name" value="{{$product->quantity}}" >
                            <a class="qty-down" href="{{url ('/cart/update-quantity/'.$product->stock_id.'/-1')}}">-</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="col-md-5">
            <h3>Subtotal:</h3>
                <p>$@if(sizeof($cart)!=0){{number_format($cart[0]->subtotal(), 2, '.', ',')}} @else 0 @endif</p>
            <a href="{{route('checkout')}}" class="primary-btn order-submit">Proceed to Checkout</a>
        </div>

    @endcomponent

@endsection
