@extends('index')

@section('content')
    @component('partials.reusable.section')
        <div class="col-md-11 col-md-push-1">
            <div class="section-title">
                <h3 class="title">Your Addresses</h3>
            </div>

            @foreach($data as $address)
                @include('partials.reusable.address-order')
            @endforeach
        </div>
    @endcomponent
    @component('partials.reusable.section')
        <div class="text-center">
            <h4><a href="{{route('addAddress',['id' => 0]) }}"><i class="fa fa-plus-square"></i>Add address</a></h4>
        </div>
    @endcomponent
    @endsection

