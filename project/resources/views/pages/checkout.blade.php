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
                    <h3 class="title">Shiping address</h3>
                </div>
                <div class="form-group">
                    <input class="input" type="text" name="first-name" placeholder="First Name">
                </div>
                <div class="form-group">
                    <input class="input" type="text" name="last-name" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <input class="input" type="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input class="input" type="text" name="address" placeholder="Address">
                </div>
                <div class="form-group">
                    <input class="input" type="text" name="city" placeholder="City">
                </div>
                <div class="form-group">
                    <input class="input" type="text" name="country" placeholder="Country">
                </div>
                <div class="form-group">
                    <input class="input" type="text" name="zip-code" placeholder="ZIP Code">
                </div>
                <div class="form-group">
                    <input class="input" type="tel" name="tel" placeholder="Telephone">
                </div>
                <div class="form-group">
                    <div class="input-checkbox">
                        <input type="checkbox" id="create-account">
                        <label for="create-account">
                            <span></span>
                            Create Account?
                        </label>
                        <div class="caption">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            <input class="input" type="password" name="password" placeholder="Enter Your Password">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Billing Details -->

            <!-- Payment -->
            <div class="billing-details">
                <div class="section-title">
                    <h3 class="title">Payment</h3>
                </div>
                <div class="payment-method">
                    <div class="input-radio">
                        <input type="radio" name="payment" id="payment-1">
                        <label for="payment-1">
                            <span></span>
                            Credit card
                        </label>
                    </div>
                    <div class="input-radio">
                        <input type="radio" name="payment" id="payment-2">
                        <label for="payment-2">
                            <span></span>
                            Debit card
                        </label>
                    </div>
                    <div class="input-radio">
                        <input type="radio" name="payment" id="payment-3">
                        <label for="payment-3">
                            <span></span>
                            Paypal System
                        </label>
                    </div><br>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label>Name on card</label>
                            <input class="input" type="text" name="name" placeholder="Card holder"><br>
                            <small class="text-muted">Full name as displayed on card</small>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label>Credit card number</label>
                            <input class="input" type="text" name="card-number" placeholder="Card number"><br>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label>Expiration</label>
                            <input class="input" type="text" name="expiration" placeholder="Expiration date">
                        </div>
                        <div class="col-md-4">
                            <label>CVV</label><br>
                            <input class="input" type="text" name="cvv" placeholder="CVV">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Payment -->

            <!-- Order notes -->
            <div class="order-notes">
                <textarea class="input" placeholder="Order Notes"></textarea>
            </div>
            <!-- /Order notes -->
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
                @foreach($data as $product)
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
                        <input class="input" type="tel" name="tel" placeholder="Coupon code">
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
            <a href="#" class="primary-btn order-submit">Place order</a>
        </div>
        <!-- /Order Details -->
    @endcomponent

@endsection
