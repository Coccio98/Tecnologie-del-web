@extends('index')

@section('content')

    @component('partials.reusable.section')
        <div class="col-md-11 col-md-push-1">
            <div class="billing-details">
                <div class="section-title">
                    <h3 class="title">Add credit card</h3>
                </div>
                <form method="POST" action="{{ route('saveCreditCard', ['id' => $id])}}">
                    @csrf
                    <div class="form-group">
                        <input id="cardHolder" class="input form-control @error('cardHolder') is-invalid @enderror" type="text" name="cardHolder" @if(!empty($creditCard)) value="{{$creditCard->cardHolder}}" @endif placeholder="Card Holder" required autocomplete="cardHolder" autofocus>
                        @error('cardHolder')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="cardNumber" class="input form-control @error('cardNumber') is-invalid @enderror" type="text" name="cardNumber" @if(!empty($creditCard)) value="{{$creditCard->cardNumber}}" @endif placeholder="Card Number" required autocomplete="cardNumber" autofocus>
                        @error('cardNumber')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="bootstrap-select-wrapper">
                        <label>Expiration date</label>
                        <select id="month" title="Month" name="month">
                            <option @if(!empty($creditCard) && substr($creditCard->expiring, 0,2) === '01') selected @endif value="01">01</option>
                            <option @if(!empty($creditCard) && substr($creditCard->expiring, 0,2) === '02') selected @endif value="02">02</option>
                            <option @if(!empty($creditCard) && substr($creditCard->expiring, 0,2) === '03') selected @endif value="03">03</option>
                            <option @if(!empty($creditCard) && substr($creditCard->expiring, 0,2) === '04') selected @endif value="04">04</option>
                            <option @if(!empty($creditCard) && substr($creditCard->expiring, 0,2) === '05') selected @endif value="05">05</option>
                            <option @if(!empty($creditCard) && substr($creditCard->expiring, 0,2) === '06') selected @endif value="06">06</option>
                            <option @if(!empty($creditCard) && substr($creditCard->expiring, 0,2) === '07') selected @endif value="07">07</option>
                            <option @if(!empty($creditCard) && substr($creditCard->expiring, 0,2) === '08') selected @endif value="08">08</option>
                            <option @if(!empty($creditCard) && substr($creditCard->expiring, 0,2) === '09') selected @endif value="09">09</option>
                            <option @if(!empty($creditCard) && substr($creditCard->expiring, 0,2) === '10') selected @endif value="10">10</option>
                            <option @if(!empty($creditCard) && substr($creditCard->expiring, 0,2) === '11') selected @endif value="11">11</option>
                            <option @if(!empty($creditCard) && substr($creditCard->expiring, 0,2) === '12') selected @endif value="12">12</option>
                        </select>
                        @error('month')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <select id="year" title="Year" name="year">
                            <option @if(!empty($creditCard) && substr($creditCard->expiring, -4) === '2020') selected @endif value="2020">2020</option>
                            <option @if(!empty($creditCard) && substr($creditCard->expiring, -4) === '2021') selected @endif value="2021">2021</option>
                            <option @if(!empty($creditCard) && substr($creditCard->expiring, -4) === '2022') selected @endif value="2022">2022</option>
                            <option @if(!empty($creditCard) && substr($creditCard->expiring, -4) === '2023') selected @endif value="2023">2023</option>
                            <option @if(!empty($creditCard) && substr($creditCard->expiring, -4) === '2024') selected @endif value="2024">2024</option>
                            <option @if(!empty($creditCard) && substr($creditCard->expiring, -4) === '2025') selected @endif value="2025">2025</option>
                            <option @if(!empty($creditCard) && substr($creditCard->expiring, -4) === '2026') selected @endif value="2026">2026</option>
                            <option @if(!empty($creditCard) && substr($creditCard->expiring, -4) === '2027') selected @endif value="2027">2027</option>
                            <option @if(!empty($creditCard) && substr($creditCard->expiring, -4) === '2028') selected @endif value="2028">2028</option>
                            <option @if(!empty($creditCard) && substr($creditCard->expiring, -4) === '2029') selected @endif value="2029">2029</option>
                            <option @if(!empty($creditCard) && substr($creditCard->expiring, -4) === '2030') selected @endif value="2030">2030</option>
                        </select>
                        @error('year')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" name="saveAddress" class="primary-btn order-submit">@if(!empty($creditCard))Modify Credit Card @else Add Credit Card @endif</button>
                </form>
            </div>
        </div>
    @endcomponent
@endsection

