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
            @for($i = 0; $i< sizeof($orders); $i++)
                @include('partials.reusable.order-product')
            @endfor

        </div>
    @endcomponent

@endsection
