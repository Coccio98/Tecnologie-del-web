@extends('layouts.app', ['activePage' => 'edit-image','titlePage' => __('Edit image')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="@if(!empty($image)){{route('image.update', ['id'=> $image->id])}}@else{{route('image.update', ['id'=> 0])}}@endif" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Edit Image') }}</h4>
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
                                @if(!empty($image))
                                    <div class="row">
                                        <img src="{{ asset('storage/'.$image->image)}}" alt="" style="width: 150px">
                                    </div>
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-7">
                                            <div class="{{ $errors->has('image') ? ' has-danger' : '' }}">
                                                <input class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" id="input-image" type="file"/>
                                                @if ($errors->has('image'))
                                                    <span id="image-error" class="error text-danger" for="input-image">{{ $errors->first('image') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-7">
                                            <div class="{{ $errors->has('image') ? ' has-danger' : '' }}">
                                                <input class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}" name="image" id="input-image" type="file" required="true" aria-required="true"/>
                                                @if ($errors->has('image'))
                                                    <span id="image-error" class="error text-danger" for="input-image">{{ $errors->first('image') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Main</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('main') ? ' has-danger' : '' }} form-check">
                                            <label class="form-check-label">
                                                <input class="form-control{{ $errors->has('main') ? ' is-invalid' : '' }} form-check-input" name="main" id="input-main" type="checkbox" value="1" @if(!empty($image) && $image->main) checked @endif/>
                                                <span class="form-check-sign">
                                                <span class="check"></span>
                                            </span>
                                            </label>
                                            @if ($errors->has('main'))
                                                <span id="main-error" class="error text-danger" for="input-main">{{ $errors->first('status') }}</span>
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
                                                    <option @if(!empty($image) && ($product->id == $image->product_id)) selected @endif value="{{$product->id}}">
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
