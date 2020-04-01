@extends('index')

@section('content')
    @component('partials.reusable.section')
        <div class="col-md-12 col-md-push-1">
            <div class="section-title">
                <h3 class="title">
                    Your predefined purchase preferences</h3>
            </div>

            @component('partials.reusable.payment')
            @endcomponent

            <div class="section-title">
                <h3 class="title">Your credit cards</h3>
            </div>

            @component('partials.reusable.credit-card')
            @endcomponent

            @component('partials.reusable.credit-card')
            @endcomponent

            @component('partials.reusable.credit-card')
            @endcomponent
        </div>
    @endcomponent
    @component('partials.reusable.section')
        <div class="text-center">
            <h4><a href="/addCreditcard"><i class="fa fa-plus-square"></i>Add credit card</a></h4>
        </div>
    @endcomponent
@endsection
