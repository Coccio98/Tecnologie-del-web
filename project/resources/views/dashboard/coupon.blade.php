@extends('layouts.app', ['activePage' => 'coupon', 'titlePage'=>'Coupon Management'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Coupon</h4>
                            <p class="card-category"> Here you can manage coupon</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="#" class="btn btn-sm btn-primary">Add coupon</a>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <tr>
                                        <th>
                                            Code
                                        </th>
                                        <th>
                                            Amount
                                        </th>
                                        <th>
                                            Expiry Date
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th class="text-right">
                                            Actions
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($coupons as $coupon)
                                        <tr>
                                            <td>
                                                {{$coupon -> code}}
                                            </td>
                                            <td>
                                                {{$coupon -> amount}} %
                                            </td>
                                            <td>
                                                {{$coupon -> expiry_date}}
                                            </td>
                                            <td>
                                                @if($coupon -> status)
                                                    Active
                                                @else
                                                    Not Active
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
