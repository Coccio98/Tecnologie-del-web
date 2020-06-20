@extends('layouts.app', ['activePage' => 'edit-stock','titlePage' => __('Edit stock')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="" autocomplete="off" class="form-horizontal">
                        @csrf
                        @method('put')

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Edit Stock') }}</h4>
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
                                    <label class="col-sm-2 col-form-label">{{ __('Color') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('color') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('color') ? ' is-invalid' : '' }}" name="color" id="input-color" type="text" placeholder="{{ __('Color') }}" value="{{ old('color', !empty($stock) ? $stock->color:'') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('color'))
                                                <span id="color-error" class="error text-danger" for="input-color">{{ $errors->first('color') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Size') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('size') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('size') ? ' is-invalid' : '' }}" name="size" id="input-size" type="text" placeholder="{{ __('Size') }}" value="{{ old('size', !empty($stock) ? $stock->size:'') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('size'))
                                                <span id="size-error" class="error text-danger" for="input-size">{{ $errors->first('size') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Number') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('number') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('number') ? ' is-invalid' : '' }}" name="number" id="input-number" type="number" placeholder="{{ __('Number') }}" value="{{ old('number', !empty($stock) ? $stock->number:'') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('number'))
                                                <span id="number-error" class="error text-danger" for="input-number">{{ $errors->first('number') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Product</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('product') ? ' has-danger' : '' }}">
                                            <select class="custom-select{{ $errors->has('product') ? ' is-invalid' : '' }}" name="product" id="input-product" required="true" aria-required="true">
                                                @foreach($products as $product)
                                                    <option @if(!empty($stock) && ($product->id == $stock->product_id)) selected @endif value="{{$product->id}}">
                                                        {{$product->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('product'))
                                                <span id="product-error" class="error text-danger" for="input-product">{{ $errors->first('category') }}</span>
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
