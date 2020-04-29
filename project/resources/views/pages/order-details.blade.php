
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
                    <h3 class="payment-name">Address</h3>
                    <div class="row">
                        <div class="col-sm-5">
                            <p>Name</p>
                            <h3 class="payment-name">Name</h3>
                        </div>
                        <div class="col-sm-5">
                            <p class="payment-method">Payment Method</p>
                            <h3 class="payment-name">Credit card end with:</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="order-information">
                <div class="row">
                    <div class="col-sm-5">
                        <h4>Delivery date:</h4>
                        <h5>Date</h5>
                    </div>
                    <div class="col-sm-3">
                        <h4>Total:</h4>
                        <h5>$</h5>
                    </div>
                    <div class="col-sm-4">
                        <h4>Send to:</h4>
                        <h5>Name</h5>
                    </div>
                </div>
            </div>
            @component('partials.reusable.order-product-details')
                {{asset('images/product02.png')}}
                @slot('category')
                    Category
                @endslot
                @slot('name')
                    product name goes here
                @endslot
                @slot('price')
                    $980.00
                @endslot
                @slot('old_price')
                    $990.00
                @endslot
                @slot('s')
                    4
                @endslot
             @endcomponent

            @component('partials.reusable.order-product-details')
                {{asset('images/product06.png')}}
                @slot('category')
                    Category
                @endslot
                @slot('name')
                    product name goes here
                @endslot
                @slot('price')
                    $980.00
                @endslot
                @slot('old_price')
                    $990.00
                @endslot
                @slot('s')
                    3
                 @endslot
            @endcomponent

            <div class="add-to-cart">
                <a href="{{route('trackMyOrder',['id'=> 1])}}"><button class="add-to-cart-btn"><i class="fa fa-truck"></i>Track my order</button></a>
            </div>
    @endcomponent
        </div>
    @endsection
