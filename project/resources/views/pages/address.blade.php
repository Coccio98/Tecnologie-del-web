@extends('index')

@section('content')
    @component('partials.reusable.section')
        <div class="col-md-12 col-md-push-1">
            <div class="section-title">
                <h3 class="title">Your Addresses</h3>
            </div>

            @component('partials.reusable.address-order')
            @endcomponent

            @component('partials.reusable.address-order')
            @endcomponent

            @component('partials.reusable.address-order')
            @endcomponent
        </div>
    @endcomponent
    @component('partials.reusable.section')
        <div class="text-center">
            <h4><a href="/addAddress"><i class="fa fa-plus-square"></i>Add address</a></h4>
        </div>
    @endcomponent
    @endsection

