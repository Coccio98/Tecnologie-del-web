
@extends('index')

@section('content')

    @component('partials.reusable.section')

        <div class=" col-md-9 col-md-push-1 details">
            <div class="section-title">
                <h3 class="title">Order details</h3>
            </div>

            <div class="payment-details">
                <div class="product-body">
                    <p>Address</p>
                    <h3 class="payment-name">
                        {{$address->address}}
                        {{$address->city}}
                        {{$address->country}}</h3>
                    <div class="row">
                        <div class="col-sm-5">
                            <p>Name</p>
                            <h3 class="payment-name">{{$address->name}}</h3>
                        </div>
                        <div class="col-sm-5">
                            <p class="payment-method">Payment Method</p>
                            <h3 class="payment-name">Credit card end with: {{substr($order->cardNumber,-4)}}</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="order-information">
                <div class="row">
                    <div class="col-sm-5">
                        <h4>Delivery date:</h4>
                        <h5>{{$order->delivery_date}}</h5>
                    </div>
                    <div class="col-sm-3">
                        <h4>Total + Coupon:</h4>
                        <h5>${{number_format($order->total, 2, '.', ',')}}</h5>
                    </div>
                </div>
            </div>
            @foreach($products as $product)
                @component('partials.reusable.order-product-details')
                    @slot('image')
                        <img src="@if(!empty($product->image)){{asset($product->image)}}@else {{asset('images/no_image.jpg')}} @endif" alt="">
                    @endslot
                    @slot('category')
                        Category
                    @endslot
                    @slot('name')
                        {{$product->name}}
                    @endslot
                    @slot('id')
                        {{$product->id}}
                    @endslot
                    @slot('price')
                        {{number_format($product->price_stamp, 2, '.', ',')}}
                    @endslot
                    @slot('quantity')
                        {{$product->quantity}}
                    @endslot
                    @slot('s')
                        {{$product->score}}
                    @endslot
                @endcomponent
            @endforeach
            <div class="add-to-cart">
                <a href="{{route('trackMyOrder',['id'=>$order->id])}}"><button class="add-to-cart-btn"><i class="fa fa-truck"></i>Track my order</button></a>
            </div>
            @endcomponent
        </div>
@endsection
