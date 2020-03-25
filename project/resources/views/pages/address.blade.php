@extends('index')

@section('content')
    @component('partials.reusable.section')
        <div class=" col-md-9 col-md-push-1">
            <div class="section-title">
                <h3 class="title">Your Addresses</h3>
            </div>

        @component('partials.reusable.address-order')
        @endcomponent

        @component('partials.reusable.address-order')
        @endcomponent

        @component('partials.reusable.address-order')
        @endcomponent

            <a href="#"><i class="fa fa-plus-square"></i>Aggiungi un nuovo indirizzo</a>
        </div>
    @endcomponent

    @endsection

