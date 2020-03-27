@extends('index')

@section('content')

    @component('partials.reusable.section')
        <div class="col-md-11 col-md-push-1">
            <!-- Billing Details -->
            <div class="billing-details">
                <div class="section-title">
                    <h3 class="title">Add address</h3>
                </div>
                <div class="form-group">
                    <input class="input" type="text" name="first-name" placeholder="First Name">
                </div>
                <div class="form-group">
                    <input class="input" type="text" name="last-name" placeholder="Last Name">
                </div>
                <div class="form-group">
                    <input class="input" type="email" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input class="input" type="text" name="address" placeholder="Address">
                </div>
                <div class="form-group">
                    <input class="input" type="text" name="city" placeholder="City">
                </div>
                <div class="form-group">
                    <input class="input" type="text" name="country" placeholder="Country">
                </div>
                <div class="form-group">
                    <input class="input" type="tel" name="tel" placeholder="Telephone">
                </div>
            </div>
        <a href="#" class="primary-btn order-submit">Add address</a>
        </div>
        @endcomponent
    @endsection
