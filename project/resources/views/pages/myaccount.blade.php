@extends('index')

@section('content')


    @component('partials.reusable.section')

        <div class="section-title">
            <h3 class="title">Your Account</h3>
        </div>



        @component('partials.myaccount.account')
            @slot('href')
                {{route('myorder')}}
            @endslot
            @slot('image')
                {{ asset('images/box2.png')}}
            @endslot
            Your Order
        @endcomponent

        @component('partials.myaccount.account')
            @slot('href')
                {{route('address')}}
            @endslot
            @slot('image')
                {{ asset('images/posizione.png')}}
            @endslot
            Address
        @endcomponent

        @component('partials.myaccount.account')
            @slot('href')
                #
            @endslot
            @slot('image')
                {{ asset('images/pagamento.png')}}
            @endslot
            Payment Options
        @endcomponent
    @endcomponent
    @component('partials.reusable.section')

        @component('partials.myaccount.account')
            @slot('href')
                #
            @endslot
            @slot('image')
                {{ asset('images/privacy.png')}}
            @endslot
            Access and security
        @endcomponent
    @endcomponent
@endsection




