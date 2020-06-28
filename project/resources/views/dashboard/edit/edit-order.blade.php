@extends('layouts.app', ['activePage' => 'edit-order','titlePage' => __('Edit order')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="@if(!empty($order)){{route('order.update', ['id'=> $order->id])}}@else{{route('order.update', ['id'=> 0])}}@endif" autocomplete="off" class="form-horizontal">
                        @csrf
                        @method('put')

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Edit Order') }}</h4>
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
                                    <label class="col-sm-6 col-form-label">{{ __('Order Number: ') }}@if(!empty($order)){{ $order-> number }} @endif</label>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Delivery date') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('delivery_date') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('delivery_date') ? ' is-invalid' : '' }}" name="delivery_date" id="input-delivery_date" type="date" placeholder="{{ __('Delivery Date') }}" value="{{ old('delivery_date', !empty($order) ? $order->delivery_date:'') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('delivery_date'))
                                                <span id="delivery_date-error" class="error text-danger" for="input-delivery_date">{{ $errors->first('delivery_date') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Courier</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('courier') ? ' has-danger' : '' }}">
                                            <select class="custom-select{{ $errors->has('courier') ? ' is-invalid' : '' }}" name="courier" id="input-courier" required="true" aria-required="true">
                                                @foreach($couriers as $courier)
                                                    <option @if(!empty($order) && ($courier->id == $order->courier_id)) selected @endif value="{{$courier->id}}">
                                                        {{$courier->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('courier'))
                                                <span id="courier-error" class="error text-danger" for="input-courier">{{ $errors->first('courier') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Shipping</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('shipping') ? ' has-danger' : '' }}">
                                            <select class="custom-select{{ $errors->has('shipping') ? ' is-invalid' : '' }}" name="shipping" id="input-shipping" required="true" aria-required="true">
                                                @foreach($shippings as $shipping)
                                                    <option @if(!empty($order) && ($shipping->id == $order->shipping_id)) selected @endif value="{{$shipping->id}}">
                                                        {{$shipping->status}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('shipping'))
                                                <span id="shipping-error" class="error text-danger" for="input-shipping">{{ $errors->first('shipping') }}</span>
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
