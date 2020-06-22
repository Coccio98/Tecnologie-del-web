@extends('layouts.app', ['activePage' => 'information-management', 'titlePage'=>'Information Management'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Information</h4>
                            <p class="card-category"> Here you can manage information</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <tr>
                                        <th>
                                            Section
                                        </th>
                                        <th>
                                            Content
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($informations as $information)
                                        <tr>
                                            <td>
                                                {{$information -> section}}
                                            </td>
                                            <td>
                                                {!! $information -> content !!}
                                            </td>
                                            <td class="td-actions text-right">
                                                <a rel="tooltip" class="btn btn-success btn-link" href="{{route('information.edit',['id'=>$information->id])}}"
                                                   data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        {!!  $informations->render()  !!}
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
