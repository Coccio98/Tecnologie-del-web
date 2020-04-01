@extends('index')

@section('content')

    @component('partials.reusable.section')
        <div class="col-md-12 col-md-push-1">
            <div class="billing-details">
                <div class="section-title">
                    <h3 class="title">Add credit card</h3>
                </div>
                <div class="form-group">
                    <input class="input" type="text" name="first-name" placeholder="Card Holder">
                </div>
                <div class="form-group">
                    <input class="input" type="text" name="last-name" placeholder="Card Number">
                </div>
                <div class="bootstrap-select-wrapper">
                    <label>Expiration date</label>
                    <select title="Month" value="Month">
                        <option value="Value 1">01</option>
                        <option value="Value 2">02</option>
                        <option value="Value 3">03</option>
                        <option value="Value 4">04</option>
                        <option value="Value 5">05</option>
                        <option value="Value 1">06</option>
                        <option value="Value 2">07</option>
                        <option value="Value 3">08</option>
                        <option value="Value 4">09</option>
                        <option value="Value 5">10</option>
                        <option value="Value 4">11</option>
                        <option value="Value 5">12</option>
                    </select>
                    <select title="Year">
                        <option value="Value 1">2020</option>
                        <option value="Value 2">2021</option>
                        <option value="Value 3">2022</option>
                        <option value="Value 4">2023</option>
                        <option value="Value 5">2024</option>
                        <option value="Value 1">2025</option>
                        <option value="Value 2">2026</option>
                        <option value="Value 3">2027</option>
                        <option value="Value 4">2028</option>
                        <option value="Value 5">2029</option>
                        <option value="Value 5">2030</option>
                    </select>
                </div>
            </div>
            <a href="#" class="primary-btn order-submit">Add</a>
        </div>
    @endcomponent
@endsection

