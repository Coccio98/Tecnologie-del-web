@extends('layouts.app', ['activePage' => 'image', 'titlePage'=>'Image Management'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Images</h4>
                            <p class="card-category"> Here you can manage image</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="#" class="btn btn-sm btn-primary">Add image</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <tr>
                                        <th>
                                            Image
                                        </th>
                                        <th>
                                            Main
                                        </th>
                                        <th class="text-right">
                                            Actions
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($images as $image)
                                        <tr>
                                            <td>
                                                    <img src="{{ asset('storage/'.$image->image)}}" alt="" style="width: 100px">
                                            </td>
                                            <td>
                                                @if($image -> main)
                                                  <p class="text-primary font-weight-bold"> Main Image </p>
                                                @else
                                                    Minor Image
                                                @endif
                                            </td>
                                            <td class="td-actions text-right">
                                                <a rel="tooltip" class="btn btn-success btn-link" href="#"
                                                   data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
