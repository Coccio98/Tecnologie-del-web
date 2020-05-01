@extends('index')

@section('content')

    @component('partials.reusable.section')

        <div>
            <div class="row">
                <div class="col-sm-12">
                    <h3>Track My Order</h3>
                </div>
            </div>

            <div>
                <div class="row text-center">
                    <div class="col-md-4"><h3>Order No: {{$order -> number}}</h3> </div>
                    <div class="col-md-4"><h3>Total: {{$order -> total}}</h3> </div>
                    <div class="col-md-4"><h3> Status: {{$order -> status}}</h3></div>
                </div>

                <ol class="progtrckr" data-progtrckr-steps="5">
                    <li class=" @if($order -> shipping_id>='1')progtrckr-done @else progtrckr-todo @endif">Pending</li>
                    <li class=" @if($order -> shipping_id>='2')progtrckr-done @else progtrckr-todo @endif">Dispatched</li>
                    <li class=" @if($order -> shipping_id>='3')progtrckr-done @else progtrckr-todo @endif">Processed</li>
                    <li class=" @if($order -> shipping_id>='4')progtrckr-done @else progtrckr-todo @endif">Shipped</li>
                    <li class=" @if($order -> shipping_id>='5')progtrckr-done @else progtrckr-todo @endif">Delivered</li>
                </ol>

                <div class="col-md-3 address">
                    @include('partials.reusable.address-order')

                </div>
                <div class="col-md-3 address">
                    @include('partials.reusable.credit-card-view')

                </div>
            </div>
        </div>
    @endcomponent
@endsection
