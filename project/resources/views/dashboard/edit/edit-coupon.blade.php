@extends('layouts.app', ['activePage' => 'edit-coupon','titlePage' => __('Edit coupon')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="@if(!empty($coupon)){{route('coupon.update', ['id'=> $coupon->id])}}@else{{route('coupon.update', ['id'=> 0])}}@endif" autocomplete="off" class="form-horizontal">
                        @csrf
                        @method('put')

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Edit Coupon') }}</h4>
                            </div>
                            <div class="card-body ">
                                @if (session('status'))
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <i class="material-icons">close</i>
                                                </button>
                                                <span>{{ session('status') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Code</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('code') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" name="code" id="input-code" type="text" placeholder="Code" value="{{ old('code', !empty($coupon) ? $coupon->code:'' )}}" required="true" aria-required="true"/>
                                            @if ($errors->has('code'))
                                                <span id="code-error" class="error text-danger" for="input-code">{{ $errors->first('code') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Amount</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('amount') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('amount') ? ' is-invalid' : '' }}" name="amount" id="input-amount" type="number" placeholder="Amount" value="{{ old('amount', !empty($coupon) ? $coupon->amount:'' )}}" required="true" aria-required="true"/>
                                            @if ($errors->has('amount'))
                                                <span id="amount-error" class="error text-danger" for="input-amount">{{ $errors->first('amount') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Expiry date</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('expiry_date') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('expiry_date') ? ' is-invalid' : '' }}" name="expiry_date" id="input-expiry_date" type="date" placeholder="Expiry Date" value="{{ old('expiry_date', !empty($coupon) ? $coupon->expiry_date:'' )}}" required="true" aria-required="true"/>
                                            @if ($errors->has('expiry_date'))
                                                <span id="expiry_date-error" class="error text-danger" for="input-expiry_date">{{ $errors->first('expiry_date') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Status</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }} form-check">
                                            <label class="form-check-label">
                                                <input class="form-control{{ $errors->has('status') ? ' is-invalid' : '' }} form-check-input" name="status" id="input-status" type="checkbox" value="1" @if(!empty($coupon) && $coupon->status) checked @endif/>
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                </span>
                                            </label>
                                            @if ($errors->has('status'))
                                                <span id="status-error" class="error text-danger" for="input-status">{{ $errors->first('status') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
