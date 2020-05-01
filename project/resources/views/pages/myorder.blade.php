@extends('index')

@section('content')
    @component('partials.reusable.section')
        <div class=" col-md-10 col-md-push-1">
            <div class="section-title">
                <h3 class="title">Your Order</h3>

                <div class="section-nav">
                    <ul class="section-tab-nav tab-nav">
                        <li class="active"><a data-toggle="tab" href="#tab1">Orders</a></li>
                        <li><a data-toggle="tab" href="#tab2">Current orders</a></li>
                        <li><a data-toggle="tab" href="#tab3">Canceled orders</a></li>
                    </ul>
                </div>
            </div>
{{--            TODO inteqrare con status--}}
            <div class="products-tabs">
                <div id="tab1" class="tab-pane active">
                    @for($i = 0; $i< sizeof($orders); $i++)
                        @include('partials.reusable.order-product')
                    @endfor
                </div>
                <div id="tab2" class="tab-pane">
                    @for($i = 0; $i< sizeof($orders); $i++)
                        test 1
                        @include('partials.reusable.order-product')
                    @endfor
                </div>
                <div id="tab3" class="tab-pane">
                    @for($i = 0; $i< sizeof($orders); $i++)
                        test 2
                        @include('partials.reusable.order-product')
                    @endfor
                </div>
            </div>
        </div>
    @endcomponent

@endsection
