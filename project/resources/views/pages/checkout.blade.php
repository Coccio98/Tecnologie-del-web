
@extends('index')

@section('content')

    @component('partials.reusable.breadcrumb')
        <li><a href="{{route('home')}}">Home</a></li>
        <li class="active">Checkout</li>
    @endcomponent

    @component('partials.reusable.section')

        <div class="col-md-7">
            <!-- Billing Details -->
            <div class="billing-details">
                <div class="section-title">
                    <h3 class="title">Shipping address</h3>
                </div>
                @foreach($addresses as $address)
                    <label class="checkout-address">
                        <input type="radio" id="address" name="address" class="address-selector" autofocus>
                        <div class="address">
                            @include('partials.reusable.address-order')
                        </div>
                    </label>
                @endforeach
            </div>
            <!-- /Billing Details -->
            <div class="text-center">
                <h4><a href="{{route('addAddress',['id' => 0]) }}"><i class="fa fa-plus-square"></i>Add address</a></h4>
            </div>
            <!-- Payment -->
            <div class="billing-details">
                <div class="section-title">
                    <h3 class="title">Payment</h3>
                </div>
                @foreach($payments as $payment)
                    <label class="checkout-address">
                        <input type="radio" id="payment" name="payment" class="payment-selector"  autofocus>
                        <div class="address">
                            <div>
                                <div>
                                    <h4>Credit card end with: {{substr($payment->cardNumber,-4)}}</h4>
                                </div>
                                <div>
                                    <h4>Expiration date: {{$payment->expiring}}</h4>
                                </div>
                            </div>
                        </div>
                    </label>
                @endforeach
            </div>
            <div class="text-center">
                <h4><a href="{{route('addCreditCard',['id' => 0]) }}"><i class="fa fa-plus-square"></i>Add credit card</a></h4>
            </div>
            <!-- /Payment -->
        </div>

        <!-- Order Details -->
        <div class="col-md-5 order-details">
            <div class="section-title text-center">
                <h3 class="title">Your Order</h3>
            </div>
            <div class="order-summary">
                <div class="order-col">
                    <div><strong>PRODUCT</strong></div>
                    <div><strong>TOTAL</strong></div>
                </div>
                @foreach($cart as $product)
                    <div class="order-products">
                        <div class="order-col">
                            <div>{{$product->quantity}}x {{$product->name}}</div>
                            <div>${{$product->price*(100-$product->sale)/100}}</div>
                        </div>
                    </div>
                @endforeach
                <div class="order-col">
                    <div>Shiping</div>
                    <div><strong>FREE</strong></div>
                </div>
                <div class="order-col">
                    <div>Have a coupon?</div>
                    <div><strong><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Click here to enter your code
                            </a></strong></div>
                </div>
                <div class="collapse" id="collapseExample">
                    <div class="form-group">
                        <form action="" method="post">
                            @csrf
                            <input type="text" name="coupon_code" placeholder="Coupon code">
                            <input type="submit" value="Apply" class="btn btn-default">
                        </form>
                    </div>
                </div>
                <div class="order-col">
                    <div><strong>TOTAL</strong></div>
                    <div><strong class="order-total">${{$product->subtotal()}}</strong></div>
                </div>
            </div>
            <div class="input-checkbox">
                <input type="checkbox" id="terms">
                <label for="terms">
                    <span></span>
                    I've read and accept the <a href="#">terms & conditions</a>
                </label>
            </div>
            <a href="{{route('addOrder',['id' => ($product->id)])}}" class="primary-btn order-submit">Place order</a>
        </div>
        <!-- /Order Details -->
    @endcomponent

@endsection

