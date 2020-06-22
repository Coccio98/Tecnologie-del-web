@extends('layouts.app', ['activePage' => 'edit-showcase','titlePage' => __('Edit showcase')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="@if(!empty($showcase)){{route('showcase.update', ['id'=> $showcase->id])}}@else{{route('showcase.update', ['id'=> 0])}}@endif" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Edit Showcase') }}</h4>
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
                                    <label class="col-sm-2 col-form-label">{{ __('Title') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('title') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" id="input-title" type="text" placeholder="{{ __('Title') }}" value="{{ old('title', !empty($showcase) ? $showcase->title:'') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('title'))
                                                <span id="title-error" class="error text-danger" for="input-title">{{ $errors->first('title') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Subtitle') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('subtitle') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('subtitle') ? ' is-invalid' : '' }}" name="subtitle" id="input-subtitle" type="text" placeholder="{{ __('Subtitle') }}" value="{{ old('subtitle', !empty($showcase) ? $showcase->subtitle:'') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('subtitle'))
                                                <span id="subtitle-error" class="error text-danger" for="input-subtitle">{{ $errors->first('subtitle') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">{{ __('Expire') }}</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('expire') ? ' has-danger' : '' }}">
                                            <input class="form-control{{ $errors->has('expire') ? ' is-invalid' : '' }}" name="expire" id="input-expire" type="datetime-local" value="{{ old('expire', !empty($showcase) ? (date('Y-m-d\TH:i', strtotime($showcase->expire))):'') }}" required="true" aria-required="true"/>
                                            @if ($errors->has('expire'))
                                                <span id="expire-error" class="error text-danger" for="input-expire">{{ $errors->first('expire') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @if(!empty($showcase))
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Banner</label>
                                        <div class="col-sm-7">
                                            <div class="{{ $errors->has('banner') ? ' has-danger' : '' }}">
                                                <input class="form-control {{ $errors->has('banner') ? ' is-invalid' : '' }}" name="banner" id="input-banner" type="file"/>
                                                @if ($errors->has('banner'))
                                                    <span id="banner-error" class="error text-danger" for="input-banner">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <img src="{{ asset('storage/'.$showcase->banner)}}" alt="" style="width: 200px">
                                    </div>
                                @else
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Banner</label>
                                        <div class="col-sm-7">
                                            <div class="{{ $errors->has('banner') ? ' has-danger' : '' }}">
                                                <input class="form-control {{ $errors->has('banner') ? ' is-invalid' : '' }}" name="banner" id="input-banner" type="file" required="true" aria-required="true"/>
                                                @if ($errors->has('banner'))
                                                    <span id="banner-error" class="error text-danger" for="input-banner">{{ $errors->first('banner') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @if (!empty($showcase))
                <div class="row">
                    <div class="col-md-12">
                        <form method="post" action="{{route('showcase.addProduct', ['id'=> $showcase->id])}}" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="card ">
                                <div class="card-header card-header-primary">
                                    <h4 class="card-title">{{ __('Edit Showcase') }}</h4>
                                </div>
                                <div class="card-body ">
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Product</label>
                                        <div class="col-sm-7">
                                            <div class="form-group{{ $errors->has('product') ? ' has-danger' : '' }}">
                                                <select class="custom-select{{ $errors->has('product') ? ' is-invalid' : '' }}" name="product" id="input-product" required="true" aria-required="true">
                                                    @foreach($products as $product)
                                                        <option value="{{$product->id}}">
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
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <ul>
                                                @foreach($productsShowcase as $product)
                                                    <li> {{$product->name}}
                                                        <a rel="tooltip" class="btn btn-danger btn-link" href="{{route('showcase.deleteProduct',['id'=>$showcase->id, 'productId'=>$product->id])}}"
                                                           data-original-title="" title="">
                                                            <i class="material-icons">clear</i>
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer ml-auto mr-auto">
                                    <button type="submit" class="btn btn-primary">{{ __('Add') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
