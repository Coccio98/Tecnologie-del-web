@extends('index')

@section('content')

    @component('partials.reusable.section')

        <div class="col-md-7">
            <h3>My Orders</h3>

            @include('partials.myaccount.navigation-order')

            <div class="buyAgain">
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
                    <div class="add-to-cart com-md-6">
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
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
                </div>
            </div>
        </div>

    @endcomponent

@endsection
