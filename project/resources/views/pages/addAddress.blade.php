@extends('index')

@section('content')

    @component('partials.reusable.section')
        <div class="col-md-11 col-md-push-1">
            <!-- Billing Details -->
            <div class="billing-details">
                <div class="section-title">
                    <h3 class="title">Add address</h3>
                </div>
                <form method="POST" action="{{ route('saveAddress', ['id' => $id])}}">
                    @csrf
                    <div class="form-group">
                        <input id="name" class="input form-control @error('name') is-invalid @enderror" type="text" name="name" @if(!empty($address)) value="{{$address->name}}" @endif placeholder="Full Name" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="address" class="input form-control @error('address') is-invalid @enderror" type="text" name="address" @if(!empty($address)) value="{{$address->address}}" @endif placeholder="Address" required autocomplete="address" autofocus>
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="city" class="input form-control @error('city') is-invalid @enderror" type="text" name="city" @if(!empty($address)) value="{{$address->city}}" @endif placeholder="City" required autocomplete="city" autofocus>
                        @error('city')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="country" class="input form-control @error('country') is-invalid @enderror" type="text" name="country" @if(!empty($address)) value="{{$address->country}}" @endif placeholder="Country" required autocomplete="country" autofocus>
                        @error('country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="phone" class="input form-control @error('phone') is-invalid @enderror" type="tel" name="phone" placeholder="Telephone" @if(!empty($address)) value="{{$address->phoneNumber}}" @endif required autocomplete="phone" autofocus>
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <button type="submit" name="saveAddress" class="primary-btn order-submit">@if(!empty($address))Modify Address @else Add address @endif</button>
                </form>
            </div>
        </div>
        @endcomponent
    @endsection
