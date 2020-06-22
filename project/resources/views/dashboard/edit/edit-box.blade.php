@extends('layouts.app', ['activePage' => 'edit-box','titlePage' => __('Edit box')])

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="@if(!empty($box)){{route('box.update', ['id'=> $box->id])}}@else{{route('box.update', ['id'=> 0])}}@endif" autocomplete="off" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="card ">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">{{ __('Edit Box') }}</h4>
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
                                @if(!empty($box))
                                    <div class="row">
                                        <img src="{{ asset('storage/'.$box->image)}}" alt="" style="width: 150px">
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
                                @endif
                                <div class="row">
                                    <label class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-7">
                                        <div class="form-group{{ $errors->has('category') ? ' has-danger' : '' }}">
                                            <select class="custom-select{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" id="input-category" required="true" aria-required="true">
                                                @foreach($categories as $category)
                                                    <option @if(!empty($box) && ($category->id == $box->category_id)) selected @endif value="{{$category->id}}">
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
