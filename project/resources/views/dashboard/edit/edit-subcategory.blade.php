@extends('layouts.app', ['activePage' => 'edit-subcategory','titlePage' => __('Edit subcategory')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="@if(!empty($subcategory)){{route('subcategory.update', ['id'=> $subcategory->id])}}@else{{route('subcategory.update', ['id'=> 0])}}@endif" autocomplete="off" class="form-horizontal">
                        @csrf
                        @method('put')

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Edit Subcategory') }}</h4>
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
                                            <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name', !empty($subcategory) ? $subcategory->name:'' )}}" required="true" aria-required="true"/>
                                            @if ($errors->has('name'))
                                                <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('category') ? ' has-danger' : '' }}">
                                            <select class="custom-select{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" id="input-category" required="true" aria-required="true">
                                                @foreach($categories as $category)
                                                    <option @if(!empty($subcategory) && ($category->id == $subcategory->category_id)) selected @endif value="{{$category->id}}">
                                                        {{$category->name}}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('category'))
                                                <span id="category-error" class="error text-danger" for="input-category">{{ $errors->first('category') }}</span>
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
