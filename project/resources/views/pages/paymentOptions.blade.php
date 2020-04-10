@extends('index')

@section('content')
    @component('partials.reusable.section')
        <div class="col-md-11 col-md-push-1">

            <div class="section-title">
                <h3 class="title">Your credit cards</h3>
            </div>

            @foreach($data as $payment)
                @include('partials.reusable.credit-card')
            @endforeach
        </div>
    @endcomponent
    @component('partials.reusable.section')
        <div class="text-center">
            <h4><a href="{{route('addCreditCard',['id' => 0]) }}"><i class="fa fa-plus-square"></i>Add credit card</a></h4>
        </div>
    @endcomponent
@endsection
