@extends('index')

@section('content')
    @component('partials.reusable.section')
        <div class="col-md-11 col-md-push-1">
            <div class="section-title">
                <h3 class="title">Your Addresses</h3>
            </div>

            @foreach($data as $address)
                <div class="col-md-3 address">
                    @include('partials.reusable.address-order')
                    <br/>
                    <div class="row">
                        <div class="col-sm-5">
                            <a href="{{route('addAddress',['id' => $address->id]) }}"><button class="modifica">Modify</button></a>
                        </div>
                        <div class="col-sm-3">
                            <a href="{{route('deleteAddress',['id' => $address->id]) }}"><button class="rimuovi">Remove</button></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endcomponent
    @component('partials.reusable.section')
        <div class="text-center">
            <h4><a href="{{route('addAddress',['id' => 0]) }}"><i class="fa fa-plus-square"></i>Add address</a></h4>
        </div>
    @endcomponent
    @endsection

