@extends('index')

@section('content')

    @component('partials.reusable.section')

        <div class="col-md-7">
            <h3>Your Cart</h3>
            <div class="cart">
                <div class="col-md-7">
                    @component('partials.reusable.widget')
                        {{asset('images/product05.png')}}
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
                    @endcomponent
                </div>
                <div class="col-md-5">
                    <div class="del-to-cart col-md-6">
                        <button class="del-to-cart-btn">Delete</button>
                    </div>
                    <div class="qty-label col-md-6">
                        Qty
                        <div class="input-number">
                            <input type="number">
                            <span class="qty-up">+</span>
                            <span class="qty-down">-</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="cart">
                <div class="col-md-7">
                    @component('partials.reusable.widget')
                        {{asset('images/product07.png')}}
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
                    @endcomponent
                </div>
                <div class="col-md-5">
                    <div class="del-to-cart col-md-6">
                        <button class="del-to-cart-btn">Delete</button>
                    </div>
                    <div class="qty-label col-md-6">
                        Qty
                        <div class="input-number">
                            <input type="number">
                            <span class="qty-up">+</span>
                            <span class="qty-down">-</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <h3>Subtotal:</h3>
            <p>$1960.00</p>
            <a href="#" class="primary-btn order-submit">Proceed to Checkout</a>
        </div>

    @endcomponent

@endsection
