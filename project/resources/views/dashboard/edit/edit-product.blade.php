@extends('layouts.app', ['activePage' => 'edit-product','titlePage' => __('Edit product')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="@if(!empty($product)){{route('product.update', ['id'=> $product->id])}}@else{{route('product.update', ['id'=> 0])}}@endif" autocomplete="off" class="form-horizontal">
                        @csrf
                        @method('put')

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Edit Brand') }}</h4>
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
                                    <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name', !empty($product) ? $product->name:'') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('name'))
                                                <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Price') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('price') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" id="input-price" type="number" placeholder="{{ __('Price') }}" value="{{ old('price', !empty($product) ? $product->price:'') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('price'))
                                                <span id="price-error" class="error text-danger" for="input-price">{{ $errors->first('price') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Summary') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('summary') ? ' has-danger' : '' }}">
                                            <textarea class="{{ $errors->has('summary') ? ' is-invalid' : '' }}" name="summary" id="input-summary" placeholder="{{ __('Summary') }}" style="width: 100%" rows="5">{{ old('summary', !empty($product) ? $product->summary:'') }}</textarea>
                                            @if ($errors->has('summary'))
                                                <span id="summary-error" class="error text-danger" for="input-summary">{{ $errors->first('summary') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Description') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
                                            <textarea class="{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="input-description" placeholder="{{ __('Description') }}" style="width: 100%" rows="5">{{ old('description', !empty($product) ? $product->description:'') }}</textarea>
                                            @if ($errors->has('description'))
                                                <span id="description-error" class="error text-danger" for="input-description">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Details') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('details') ? ' has-danger' : '' }}">
                                            <textarea class="{{ $errors->has('details') ? ' is-invalid' : '' }}" name="details" id="input-details" placeholder="{{ __('Details') }}" style="width: 100%" rows="5">{{ old('details', !empty($product) ? $product->details:'') }}</textarea>
                                            @if ($errors->has('details'))
                                                <span id="details-error" class="error text-danger" for="input-details">{{ $errors->first('details') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Sale') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('sale') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('sale') ? ' is-invalid' : '' }}" name="sale" id="input-sale" type="number" placeholder="{{ __('Sale') }}" value="{{ old('sale', !empty($product) ? $product->sale:'') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('sale'))
                                                <span id="sale-error" class="error text-danger" for="input-sale">{{ $errors->first('sale') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Subcategory</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('subcategory') ? ' has-danger' : '' }}">
                                            <select class="custom-select{{ $errors->has('subcategory') ? ' is-invalid' : '' }}" name="subcategory" id="input-subcategory" required="true" aria-required="true">
                                                @foreach($dashsubcategories as $subcategory)
                                                    <option @if(!empty($product) && ($subcategory->id == $product->subcategory_id)) selected @endif value="{{$subcategory->id}}">
                                                        {{$subcategory->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('subcategory'))
                                                <span id="subcategory-error" class="error text-danger" for="input-subcategory">{{ $errors->first('subcategory') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Brand</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('brand') ? ' has-danger' : '' }}">
                                            <select class="custom-select{{ $errors->has('brand') ? ' is-invalid' : '' }}" name="brand" id="input-brand" required="true" aria-required="true">
                                                @foreach($brands as $brand)
                                                    <option @if(!empty($product) && ($brand->id == $product->brand_id)) selected @endif value="{{$brand->id}}">
                                                        {{$brand->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('brand'))
                                                <span id="brand-error" class="error text-danger" for="input-brand">{{ $errors->first('brand') }}</span>
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
