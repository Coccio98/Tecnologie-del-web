@extends('layouts.app', ['activePage' => 'order-management', 'titlePage'=>'Order Management'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Orders</h4>
                            <p class="card-category"> Here you can manage orders</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                    <tr>
                                        <th>
                                            Number
                                        </th>
                                        <th>
                                            Delivery Date
                                        </th>
                                        <th>
                                            Shipping
                                        </th>
                                        <th>
                                            Courier
                                        </th>
                                        <th class="text-right">
                                            Actions
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $order)
                                        <tr>
                                            <td>
                                                {{$order -> number}}
                                            </td>
                                            <td>
                                                {{$order -> delivery_date}}
                                            </td>
                                            <td>
                                                {{$order -> status}}
                                            </td>
                                            <td>
                                                {{$order -> name}}
                                            </td>
                                            <td class="td-actions text-right">
                                                <a rel="tooltip" class="btn btn-success btn-link" href="{{route('order.edit',['id'=>$order->id])}}"
                                                   data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                    <div class="ripple-container"></div>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <tr>
                                        {!!  $orders->render()  !!}
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
