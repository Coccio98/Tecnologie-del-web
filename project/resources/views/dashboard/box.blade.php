@extends('layouts.app', ['activePage' => 'box-management', 'titlePage'=>'Box Management'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Boxes</h4>
                            <p class="card-category"> Here you can manage boxes</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <tr>
                                        <th>
                                            Image
                                        </th>
                                        <th>
                                            Category
                                        </th>
                                        <th class="text-right">
                                            Actions
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($boxes as $box)
                                        <tr>
                                            <td>
                                                <img src="{{ asset('storage/'.$box->image)}}" alt="" style="width: 100px">
                                            </td>
                                            <td>
                                                {{$box -> name}}
                                            </td>
                                            <td class="td-actions text-right">
                                                <a rel="tooltip" class="btn btn-success btn-link" href="{{route('box.edit',['id'=>$box->id])}}"
                                                   data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        {!!  $boxes->render()  !!}
                                    </tr>
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
