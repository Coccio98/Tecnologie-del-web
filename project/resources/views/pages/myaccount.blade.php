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
                {{ asset('images/box.png')}}
            @endslot
            Your Order
        @endcomponent

        @component('partials.myaccount.account')
            @slot('href')
                {{route('address')}}
            @endslot
            @slot('image')
                {{ asset('images/address.png')}}
            @endslot
            Address
        @endcomponent

        @component('partials.myaccount.account')
            @slot('href')
                {{route('paymentOptions')}}
            @endslot
            @slot('image')
                {{ asset('images/payment.png')}}
            @endslot
            Payment Options
        @endcomponent

        @component('partials.myaccount.account')
            @slot('href')
                {{route('security')}}
            @endslot
            @slot('image')
                {{ asset('images/lock.png')}}
            @endslot
            Access and security
        @endcomponent
    @endcomponent
@endsection




