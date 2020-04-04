@extends('index')

@section('content')
    @component('partials.reusable.section')
        <div class=" col-md-10 col-md-push-1">
            <div class="section-title">
                <h3 class="title">Your Order</h3>



                <div class="section-nav">
                    <ul class="section-tab-nav tab-nav">
                        <li class="active"><a data-toggle="tab" href="#tab1">Orders</a></li>
                        <li><a data-toggle="tab" href="#tab1">Current orders</a></li>
                        <li><a data-toggle="tab" href="#tab1">Canceled orders</a></li>
                    </ul>
                </div>
            </div>

            @component('partials.reusable.order-product')
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

            @component('partials.reusable.order-product')
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
                    4
                @endslot
            @endcomponent

            @component('partials.reusable.order-product')
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
                @slot('s')
                    4
                @endslot
            @endcomponent

            @component('partials.reusable.order-product')
                {{asset('images/product09.png')}}
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
        </div>
    @endcomponent

@endsection
