
@extends('index')

@section('content')

    @component('partials.reusable.breadcrumb')
        <li><a href="{{route('home')}}">Home</a></li>
        <li class="active">Checkout</li>
    @endcomponent

    @component('partials.reusable.section')
        @include('flash-message')
        <label>Coupon Code</label>
        <form action="{{url('checkout/apply-coupon')}}" method="post">
            {{csrf_field()}}
            <input type="text" name="coupon_code">
            <input type="submit" value="Apply" class="btn btn-default">
        </form>
        <form id="addOrder" action="{{route('addOrder')}}" method="post">
            @csrf
            <div class="col-md-7">
                <!-- Billing Details -->

                <div class="billing-details row">
                    <div class="section-title">
                        <h3 class="title">Shipping address</h3>
                    </div>
                    @foreach($addresses as $address)
                        <label class="col-md-4">
                            <input type="radio" id="address" name="address" value="{{$address->id}}" class="address-selector @error('address') is-invalid @enderror" autofocus required>
                            <div class="address">
                                @include('partials.reusable.address-order')
                            </div>
                        </label>
                    @endforeach
                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <!-- /Billing Details -->
                <div class="text-center row">
                    <h4><a href="{{route('addAddress',['id' => 0]) }}"><i class="fa fa-plus-square"></i>Add address</a></h4>
                </div>
                <!-- Payment -->
                <div class="billing-details row">
                    <div class="section-title">
                        <h3 class="title">Payment</h3>
                    </div>
                    @foreach($payments as $payment)
                        <label class="col-md-6">
                            <input type="radio" id="payment" name="payment" value="{{$payment->id}}" class="payment-selector @error('payment') is-invalid @enderror" required autofocus>
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
                    @error('payment')
                    <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
                <div class="text-center row">
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
                        <div><strong>Subtotal</strong></div>
                        <div><strong class="order-total">$@if(sizeof($cart)!=0){{$cart[0]->subtotal()}} @else 0 @endif</strong></div>
                    </div>
                    <div class="order-col">
                        <div><strong>Coupon discount</strong></div>
                        <div><strong>-$@if(sizeof($cart)!=0){{$cart[0]->subtotal()-$total}} @else 0 @endif</strong></div>
                    </div>
                    <div class="order-col">
                        <div><strong>TOTAL</strong></div>
                        <div><strong class="order-total">${{$total}}</strong></div>
                    </div>
                    <input type="hidden" name="total" value="{{$total}}">
                </div>
                <div class="input-checkbox">
                    <input type="checkbox" id="terms" name="privacy" required>
                    <label for="terms">
                        <span></span>
                        I've read and accept the <a href="{{route('information')}}#privacy">terms & conditions</a>
                    </label>
                </div>

                <button class="primary-btn order-submit" form="addOrder">Place order</button>
            </div>
            <!-- /Order Details -->
        </form>
    @endcomponent

@endsection

